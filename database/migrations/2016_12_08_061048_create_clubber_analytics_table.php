<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubberAnalyticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubber_analytics', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('clubber_id');
            $table->string('user_name', 50);
            $table->integer('business_user_id');
            $table->string('user_mobile', 10);
            $table->string('user_email',255);
            $table->string('total_free_events');
            $table->unsignedInteger('total_free_events_guests');
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
