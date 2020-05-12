<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('gudang_id')->nullable();
            $table->foreign('gudang_id')->references('id')->on('gudang')->onDelete('cascade');
            $table->unsignedBigInteger('kategori_id')->nullable();
            $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('cascade');
            $table->unsignedBigInteger('merek_id')->nullable();
            $table->foreign('merek_id')->references('id')->on('merek')->onDelete('cascade');
            $table->string('nama');
            $table->string('sku');
            $table->integer('jumlah');
            $table->integer('tagihan');
            $table->string('satuan');
            $table->string('spesifikasi');
            $table->string('gambar');
            $table->string('manajemen');
            $table->integer('hargasewa');
            $table->integer('hargamasuk');
            $table->integer('hargakeluar');
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
        Schema::dropIfExists('barang');
    }
}
