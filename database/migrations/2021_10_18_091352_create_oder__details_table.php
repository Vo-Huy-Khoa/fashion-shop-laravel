<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oder_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('oder_id')->unsigned()->nullable();
            $table->foreign('oder_id')->references('id')->on('oders');
            $table->integer('shipping_id')->unsigned()->nullable();
            $table->foreign('shipping_id')->references('id')->on('shippings');
            $table->tinyInteger('status')->nullable();
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
        Schema::dropIfExists('oder__details');
    }
}
