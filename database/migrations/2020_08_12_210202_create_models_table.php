<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char('name', 100);
            $table->char('description', 100);
            $table->integer('age');
            $table->char('gender', 100);
            $table->foreignId('country_id')->constrained();
            $table->foreignId('currency_id')->constrained();
            $table->integer('weight');
            $table->integer('height');
            $table->integer('breast');
            $table->char('eyes', 100);
            $table->integer('waist');
            $table->char('hair', 100);
            $table->char('contexture', 100);
            $table->integer('huckle');
            $table->char('skin', 100);
            $table->integer('rate');
            $table->foreignId('time_type_id')->constrained();
            $table->foreignId('cam_type_id')->constrained();
            $table->boolean('verified');
            $table->boolean('active');
            $table->foreignId('user_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('models');
    }
}
