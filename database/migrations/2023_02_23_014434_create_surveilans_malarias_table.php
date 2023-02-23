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
        Schema::create('surveilans_malarias', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->nullable();
            $table->string('nama')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('alamat')->nullable();
            $table->string('region_prop')->nullable();
            $table->string('region_kab')->nullable();
            $table->string('region_kec')->nullable();
            $table->string('region_kel')->nullable();
            $table->date('tgl_kembali')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('insert_by')->default('-')->nullable();
            $table->string('delete_by')->default('-')->nullable();
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
        Schema::dropIfExists('surveilans_malarias');
    }
};
