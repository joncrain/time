<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Capsule\Manager as Capsule;

class TimeInit extends Migration
{
    public function up()
    {
        $capsule = new Capsule();
        $capsule::schema()->create('time', function (Blueprint $table) {
            $table->increments('id');
            $table->string('serial_number');
            $table->string('timezone')->nullable();
            $table->boolean('networktime_status')->nullable();
            $table->string('networktime_server')->nullable();
            $table->boolean('autotimezone')->nullable();

            $table->unique('serial_number');
            $table->index('timezone');
            $table->index('networktime_status');

        });
    }
    
    public function down()
    {
        $capsule = new Capsule();
        $capsule::schema()->dropIfExists('time');
    }
}
