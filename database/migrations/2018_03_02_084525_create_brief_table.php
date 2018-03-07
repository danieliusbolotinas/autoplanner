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
            $table->string('client', 200);
            $table->string('brand', 50);
            $table->string('product', 50);
            $table->string('project name', 50);
            $table->integer('project number');
            $table->string('client name', 50);
            $table->string('agency manager', 50);
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
