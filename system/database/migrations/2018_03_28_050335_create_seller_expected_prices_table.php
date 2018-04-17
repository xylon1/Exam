<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellerExpectedPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_expected_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('total_price');
            $table->string('price_per_anna');
            $table->string('price_per_sqft');
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
        Schema::dropIfExists('seller_expected_prices');
    }
}
