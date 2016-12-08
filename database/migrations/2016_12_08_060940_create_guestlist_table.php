<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestlistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_guestlist', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('clubber_id')->nullable();
            $table->integer('event_id')->unsigned();
            $table->unsignedInteger('business_user_id');
            $table->string('guest_name', 50);
            $table->string('guest_phone_no', 10);
            $table->string('guest_email',255);
            $table->unsignedInteger('no_of_couples');
            $table->string('guest_entry_code',255);
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
