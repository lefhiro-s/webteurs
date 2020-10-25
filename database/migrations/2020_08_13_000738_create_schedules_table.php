<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $days = [
                'Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo'
            ];
            $table->id();
            $table->timestamps();
            $table->foreignId('model_id')->constrained();
            $table->enum('days_init', $days);
            $table->enum('days_end', $days);
            $table->time('hour_init', 0);
            $table->time('hour_end', 0);
            $table->boolean('activate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
