<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSyndicatesStates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('syndicates_states', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('syndicate_id')->unsigned();
            $table->integer('state_id')->unsigned();
            $table->timestamps();

            $table->foreign('syndicate_id')->references('id')->on('syndicates');
            $table->foreign('state_id')->references('id')->on('states');
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
        Schema::table('syndicates_states', function(Blueprint $table) {
            $table->dropForeign(['syndicate_id', 'state_id']);
        });

        Schema::dropIfExists('syndicates_states');
    }
}
