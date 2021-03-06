<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Hazifeladatok extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hazifeladatoks', function (Blueprint $table) {
            $table->id();
            $table->string('tanulo');
            $table->string('beadott_feladat');
            $table->string('link');
            $table->string('szoveges_ertekeles')->nullable();
            $table->integer('pont')->nullable();
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
        Schema::dropIfExists('hazifeladatoks');
    }
}
