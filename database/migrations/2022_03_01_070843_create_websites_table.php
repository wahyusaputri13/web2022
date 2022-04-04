<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websites', function (Blueprint $table) {
            $table->id();
            $table->string('web_name')->nullable()->default("-");
            $table->string('web_description')->nullable()->default("-");
            $table->string('email')->nullable()->default("-");
            $table->string('address')->nullable()->default("-");
            $table->string('phone')->nullable()->default("-");
            $table->string('instagram')->nullable()->default("#");
            $table->string('twitter')->nullable()->default("#");
            $table->string('facebook')->nullable()->default("#");
            $table->string('youtube')->nullable()->default("#");
            $table->string('url_stream')->nullable()->default("#");
            $table->string('image_hero')->nullable();
            $table->string('image_hero_name')->nullable();
            $table->string('favicon')->nullable()->default('assets/pemda.ico');
            $table->string('favicon_name')->nullable();
            $table->string('latitude')->nullable()->default('-7.358744');
            $table->string('longitude')->nullable()->default('109.903063');
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
        Schema::dropIfExists('websites');
    }
}
