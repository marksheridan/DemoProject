<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateB2bAnalyticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b2b_analytics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('business_user_id');
            $table->unsignedInteger('total_free_events');
            $table->integer('total_free_events_guests');
            $table->timestamp('user_join_dt');
            $table->timestamp('last_visited');
            $table->unsignedInteger('times_visited');
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
