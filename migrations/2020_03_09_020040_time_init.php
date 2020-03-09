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
            $table->string('serial_number')->unique();
            $table->string('timezone');
            $table->index('timezone');
        });
    }
    
    public function down()
    {
        $capsule = new Capsule();
        $capsule::schema()->dropIfExists('time');
    }
}
