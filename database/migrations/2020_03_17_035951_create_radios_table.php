<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRadiosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('radios', function (Blueprint $table) {
            $table->bigInteger('id', true, true);
            $table->string('title', 50);
            $table->string('image', 500);
            $table->text('description', 300);
            $table->string('link', 100);
            $table->unsignedBigInteger('categories_id');
            $table->foreign('categories_id')->references('id')->on('categories');
            $table->unsignedBigInteger('countries_id');
            $table->foreign('countries_id')->references('id')->on('countries');
            $table->timestamps();
            $table->softDeletes()->nullable($value = true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('radios');
    }
}
