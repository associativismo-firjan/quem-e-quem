<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cnpj');
            $table->string('name');
            $table->interger('total_employee');
            $table->string('curriculum')->nullable();
            $table->bigInteger('city_id')->nullable();
            $table->string('email');
            $table->string('email2');
            $table->string('telephone');
            $table->string('telephone2');
            $table->string('address')->nullable();
            $table->string('neighborhood')->nullable();
            $table->integer('zip_code')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('companies');
    }
}
