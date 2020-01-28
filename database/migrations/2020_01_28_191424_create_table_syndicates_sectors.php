<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSyndicatesSectors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('syndicates_sectors', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('syndicate_id')->unsigned();
            $table->integer('sector_id')->unsigned();
            $table->timestamps();

            $table->foreign('syndicate_id')->references('id')->on('syndicates');
            $table->foreign('sector_id')->references('id')->on('sectors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('syndicates_sectors', function(Blueprint $table) {
            $table->dropForeign(['syndicate_id', 'sector_id']);
        });

        Schema::dropIfExists('syndicates_sectors');
    }
}