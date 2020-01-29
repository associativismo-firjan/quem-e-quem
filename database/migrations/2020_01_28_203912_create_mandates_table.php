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
            $table->string('term_office');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->boolean('status')->default(true);
            $table->bigInteger('syndicate_id')->unsigned();
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
        Schema::dropIfExists('mandates');
    }
}
