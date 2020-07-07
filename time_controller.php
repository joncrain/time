<?php 

/**
 * time class
 *
 * @package munkireport
 * @author 
 **/
class Time_controller extends Module_controller
{
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
        jsonView(
            Time_model::select('time.*')
            ->whereSerialNumber($serial_number)
            ->filter()
            ->limit(1)
            ->first()
            ->toArray()
        );
    }

    public function get_list($column = '')
    {
        jsonView(
            Time_model::select($column . ' AS label')
                ->selectRaw('count(*) AS count')
                ->filter()
                ->groupBy($column)
                ->orderBy('count', 'desc')
                ->get()
                ->toArray()
        );
    }
} 