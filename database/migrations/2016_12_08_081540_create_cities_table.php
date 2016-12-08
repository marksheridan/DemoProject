<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('city_id', 20);
            $table->string('city_name', 20);
            $table->enum('city_status', ['active', 'inactive']);
            $table->enum('city_tier', ['1','2','3']);
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
