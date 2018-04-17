<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('district')->nullable();
            $table->string('town')->nullable();
            $table->string('address')->nullable();
            $table->string('street')->nullable();
            $table->string('vdc')->nullable();
            $table->string('ward_no')->nullable();
            $table->string('house_no')->nullable();
            $table->string('land_area_id')->nullable();
            $table->string('reference')->nullable();
            $table->string('property_description')->nullable();
            $table->string('property_type')->nullable();
            $table->string('apartment_builder_id')->nullable();
            $table->string('complition_stage')->nullable();
            $table->string('complition_date')->nullable();
            $table->string('complition_year')->nullable();
            $table->string('seller_expected_id')->nullable();
            $table->string('availibility')->nullable();
            $table->string('urgency_id')->nullable();
            $table->string('road_access_id')->nullable();
            $table->string('map')->nullable();
            $table->string('property_status_id')->nullable();
            $table->string('highlight')->nullable();
            $table->longText('property_detail_info')->nullable();
            $table->string('negotiability')->nullable();
            $table->string('exterior_id')->nullable();
            $table->string('interior_id')->nullable();
            $table->string('environment_id')->nullable();
            $table->string('rent_id')->nullable();
            $table->string('elevation')->nullable();
            $table->string('facility_id')->nullable();
            $table->string('finance_id')->nullable();
            $table->string('advance')->nullable();
            $table->string('broker_response')->nullable();
            $table->string('owner_id')->nullable();
            $table->string('legal_document_id')->nullable();
            $table->string('ad_transaction_id')->nullable();
            $table->string('ad_objective_id')->nullable();
            $table->string('ad_type_id')->nullable();
            $table->string('commission_id')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
