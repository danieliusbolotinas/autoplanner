<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBriefTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brief', function (Blueprint $table) {
            $table->increments('id');
            $table->string('client');
            $table->string('brand');
            $table->string('product');
            $table->string('project name');
            $table->integer('project number');
            $table->string('client name');
            $table->string('agency manager');
            $table->date('campaign start date');
            $table->date('campaign end date');
            $table->string('target group');
            $table->integer('agency commission');          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brief');
    }
}
