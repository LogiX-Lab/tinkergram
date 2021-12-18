<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('name');
            $table->text('caption');
            $table->text('delivery_method')->nullable();
            $table->text('service_quality')->nullable();
            $table->text('ingredient_supply')->nullable();
            $table->text('online_booking')->nullable();
            $table->text('event_booking')->nullable();
            $table->text('fresh_made')->nullable();
            $table->text('url');
            $table->text('address');
            $table->text('contact_info');
            $table->string('image')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
