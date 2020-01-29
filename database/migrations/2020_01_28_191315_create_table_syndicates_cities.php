<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSyndicatesCities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        dump('Create table syndicates_cities');
        
        Schema::create('syndicates_cities', function(Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('syndicate_id');
            $table->smallInteger('city_id');
            $table->timestamps();

            $table->foreign('syndicate_id')->references('id')->on('syndicates');
            $table->foreign('city_id')->references('id')->on('cities');
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
        Schema::table('syndicates_cities', function(Blueprint $table) {
            $table->dropForeign(['syndicate_id', 'city_id']);
        });
        
        Schema::dropIfExists('syndicates_cities');
    }
}
