<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssesmentCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assesment_centers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('pict');
            $table->text('desc');
            $table->integer('importance');
            $table->string('uk');
            $table->string('syarat1');
            $table->string('syarat2');
            $table->string('syarat3');
            $table->string('syarat4')->nullable();
            $table->string('syarat5')->nullable();
            $table->string('syarat6')->nullable();
            $table->string('pictagenda')->nullable();
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
        Schema::dropIfExists('assesment_centers');
    }
}
