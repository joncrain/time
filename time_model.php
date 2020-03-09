<?php

use munkireport\models\MRModel as Eloquent;

class Time_model extends Eloquent
{
    protected $table = 'time';

    protected $fillable = [
      'serial_number',
      'timezone',
    ];

    public $timestamps = false;

}
