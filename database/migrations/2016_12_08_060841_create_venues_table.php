<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->increments('venue_id',20);
            $table->string('user_id',100);
            $table->string('venue_name',255);
            $table->string('venue_phone_no', 20);
            $table->string('venue_category', 50);
            $table->double('latitude');
            $table->double('longitude');
            $table->string('venue_city', 20);
            $table->string('venue_cover_img', 20);
            $table->enum('venue_status', ['active', 'inactive', 'deleted'])->default('active');
            $table->enum('venue_card', ['yes', 'no'])->default('yes');
            $table->enum('venue_parking', ['yes', 'no'])->default('yes');
            $table->enum('venue_seats', ['yes', 'no'])->default('yes');
            $table->enum('venue_smoking', ['yes', 'no'])->default('yes');
            $table->text('venue_address');
            $table->integer('created_by');
            $table->integer('updated_by');
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
        //
    }
}
