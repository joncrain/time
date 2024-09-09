<?php

use munkireport\processors\Processor;

class Time_processor extends Processor
{
    public function run($data)
    {
        $modelData = ['serial_number' => $this->serial_number];

        // Parse data
        $sep = ' = ';
        foreach(explode(PHP_EOL, $data) as $line) {
            if($line){
                list($key, $val) = explode($sep, $line);
                // Make sure we have data
                if ($val !== ""){
                    $modelData[$key] = $val;
                } else {
                    // Else blank empty or missing values
                    $modelData[$key] = null;
                }
            }
        } // End foreach explode lines

        Time_model::updateOrCreate(
            ['serial_number' => $this->serial_number], $modelData
        );
        
        return $this;
    }
}
