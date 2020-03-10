<?php

use munkireport\models\MRModel as Eloquent;

class Time_model extends Eloquent
{
    protected $table = 'time';

    protected $fillable = [
      'serial_number',
      'timezone',
      'networktime_status',
      'networktime_server',
      'autotimezone'
    ];

    public $timestamps = false;

}
