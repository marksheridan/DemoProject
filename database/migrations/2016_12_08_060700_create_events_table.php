<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('events', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('event_name', 50);
            $table->string('event_banner', 20);
            $table->string('event_city_id', 20);
            $table->string('event_venue_id', 20);
            $table->enum('event_status', ['open', 'closed','deleted']);
            $table->enum('event_flyer_paid', ['not_paid', 'paid'])->default('not_paid');
            $table->enum('event_type', ['Guestlist', 'RSVP']);
            $table->timestamp('event_date');
            $table->timestamp('event_start_time');
            $table->timestamp('event_end_time');
            $table->timestamp('event_closing_time');
            $table->string('event_description',2000);
            $table->string('event_requirement',1050);
            $table->text('video_link');
            $table->string('tagged_artists', 300)->nullable();
            $table->string('tagged_promoters', 300)->nullable();
            $table->integer('event_total_guest');
            $table->integer('event_guest_limit');
            $table->integer('created_by');
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
