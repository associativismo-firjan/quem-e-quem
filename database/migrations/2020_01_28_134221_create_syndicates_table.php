<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSyndicatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syndicates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('initial');
            $table->string('address')->nullable();
            $table->string('neighborhood')->nullable();
            $table->integer('zip_code')->nullable();
            $table->bigInteger('status_firjan_membership')->nullable();
            $table->bigInteger('status_CNI_membership')->nullable();
            $table->bigInteger('matriz')->nullable();
            $table->integer('regional_id')->unsigned();
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
        Schema::dropIfExists('syndicates');
    }
}
