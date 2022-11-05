<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {

            $table->id('service_ID');
            $table->integer('service_provider');
            //$table->foreign('service_provider')->references('user_ID')->on('users')->onDelete('cascade');

            $table->string('service_title');
            $table->string('service_type')->default('unknown');
            $table->integer('service_price');
            $table->integer('service_qty');

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
        Schema::dropIfExists('services');
    }
}
