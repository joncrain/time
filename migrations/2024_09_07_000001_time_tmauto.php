<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Capsule\Manager as Capsule;

class TimeTmauto extends Migration
{
    private $tableName = 'time';

    public function up()
    {
        $capsule = new Capsule();

        $capsule::schema()->table($this->tableName, function (Blueprint $table) {
            $table->boolean('automatic_time_only_enabled')->nullable();
            $table->boolean('automatic_time_zone_enabled')->nullable();
        });

        // Create indexes
        $capsule::schema()->table($this->tableName, function (Blueprint $table) {
            $table->index('automatic_time_only_enabled');
            $table->index('automatic_time_zone_enabled');
        });
    }

    public function down()
    {
        $capsule = new Capsule();
        $capsule::schema()->table($this->tableName, function (Blueprint $table) {
            $table->dropColumn('automatic_time_only_enabled');
            $table->dropColumn('automatic_time_zone_enabled');
        });
    }
}
