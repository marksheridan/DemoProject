<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name', 50);
            $table->string('user_type', 50);
            $table->string('user_email',255)->unique_index();
            $table->string('password', 60);
            $table->string('user_phone_no', 20);
            $table->string('user_alt_email',255);
            $table->string('user_alt_phone', 10);
            $table->string('user_city', 20);
            $table->string('enabled_tagged_events');
            $table->string('disabled_tagged_event');
            $table->string('user_img',20);
            $table->enum('user_status', ['active', 'inactive', 'pending']);
            $table->string('user_tagline',1000);
            $table->string('user_gallery',2000);
            $table->string('user_contact_person', 50);
            $table->string('user_twitter_link', 512);
            $table->string('user_facebook_link', 512);
            $table->string('user_instagram_link', 512);
            $table->string('user_soundcloud_link', 512);
            $table->string('user_mixcloud_link', 512);
            $table->string('user_beatport_link', 512);
            $table->string('user_website_link', 512);
            $table->integer('user_gallery_space');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
