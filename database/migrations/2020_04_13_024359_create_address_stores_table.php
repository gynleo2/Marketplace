<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_stores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('store_id')->unique();
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('postcode');            
            $table->timestamps();

            $table->foreign('store_id')->references('id')->on('stores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address_stores');
    }
}
