<?php 

/**
 * time class
 *
 * @package munkireport
 * @author joncrain
 **/
class Time_controller extends Module_controller
{
	
    /*** Protect methods with auth! ****/
    function __construct()
    {
        // Store module path
        $this->module_path = dirname(__FILE__);
    }
	
    /**
     * Get time information for serial_number
     *
     * @param string $serial serial number
     **/
    public function get_data($serial_number = '')
    {
        $obj = new View();

        if (! $this->authorized()) {
            $obj->view('json', array('msg' => 'Not authorized'));
        }
        $columns = [
            'timezone',
            'networktime_status',
            'networktime_server',
            'autotimezone',
        ];

        $out = time_model::select($columns)
            ->whereSerialNumber($serial_number)
            ->filter()
            ->limit(1)
            ->first()
            ->toArray();

        $obj->view('json', array('msg' => $out));
    }

    public function get_list()
    {
        $obj = new View();
        $out = time_model::selectRaw('timezone, count(*) AS count')
            ->filter()
            ->groupBy('timezone')
            ->orderBy('count', 'desc')
            ->get()
            ->toArray();

        $obj->view('json', array('msg' => $out));
    }

    public function get_netlist()
    {
        $obj = new View();
        $out = time_model::selectRaw('networktime_status, count(*) AS count')
            ->filter()
            ->groupBy('networktime_status')
            ->orderBy('count', 'desc')
            ->get()
            ->toArray();

        $obj->view('json', array('msg' => $out));
    }

} // END class time_controller
