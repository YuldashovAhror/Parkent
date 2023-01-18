<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('photo_day');
            $table->string('title_uz');
            $table->string('title_ru');
            $table->string('title_en');
            $table->text('discription_uz');
            $table->text('discription_ru');
            $table->text('discription_en');
            $table->string('title2_uz');
            $table->string('title2_ru');
            $table->string('title2_en');
            $table->string('photo_night');
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
        Schema::dropIfExists('banners');
    }
};
