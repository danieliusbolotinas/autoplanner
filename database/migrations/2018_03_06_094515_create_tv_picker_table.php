<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTvPickerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tv_picker', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tv3', 20);
            $table->string('tv6', 20);
            $table->string('tv8', 20);
            $table->string('lnk', 20);
            $table->string('btv', 20);
            $table->string('tv1', 20);
            $table->string('info tv', 20);
            $table->string('pbk', 20);
            $table->string('ntv mir lietuva', 20);
            $table->string('ren lietuva', 20);
            $table->string('lietuvos rytas tv', 20);
            $table->string('lietuvos televizja', 20);
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
        Schema::dropIfExists('tv_picker');
    }
}
