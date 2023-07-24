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
        Schema::create('persediaan_barangs', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_barang');
            $table->string('nama_barang');
            $table->string('jenis_barang');
            $table->integer('harga_barang');
            $table->integer('quantity');
            $table->string('tujuan_barang');
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
        Schema::dropIfExists('persediaan_barangs');
    }
};
