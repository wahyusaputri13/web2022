<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->text('title', 4294967295)->nullable();
            $table->text('slug', 4294967295)->nullable();
=======
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
>>>>>>> d43339c (hapus migrasi)
            $table->date('date');
            $table->string('upload_by');
            $table->text('description', 4294967295);
            $table->bigInteger('attachment')->nullable();
            $table->boolean('highlight')->default(false);
            $table->string('kategori')->nullable();
            $table->boolean('dip')->default(false);
            $table->string('dip_tahun')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('news');
    }
}
