<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100)->nullable();
            $table->enum('gender', ['L', 'P'])->default('L');
            $table->unsignedBigInteger('jurusan_id');
            $table->string('asalsekolah', 30)->nullable();
            $table->string('tempatlahir', 30)->nullable();
            $table->date('tanggallahir')->nullable();
            $table->timestamps();

            $table->foreign('jurusan_id')->references('id')->on('jurusan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peserta');
        Schema::table('peserta', function (Blueprint $table) {
            $table->dropForeign('peserta_jurusan_id_foreign');
        });
    }
}
