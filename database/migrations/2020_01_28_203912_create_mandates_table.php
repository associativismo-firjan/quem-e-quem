<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMandatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mandates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('role');
            $table->bigInteger('position')->nullable();
            $table->dateTime('start');
            $table->dateTime('end')->nullable();
            $table->boolean('status')->default(true);
            $table->bigInteger('syndicate_id')->unsigned();
            $table->bigInteger('person_id')->unsigned();
            $table->timestamps();

            $table->foreign('syndicate_id')->references('id')->on('syndicates');
            $table->foreign('person_id')->references('id')->on('people');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mandates');
    }
}
