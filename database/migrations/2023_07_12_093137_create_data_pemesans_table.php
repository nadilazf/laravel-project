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
        Schema::create('data_pemesans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemesan');
            $table->integer('jumlah_pesanan');
            $table->integer('total_harga');
            $table->text('alamat_pemesan');
            $table->string('telp');
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
        Schema::dropIfExists('data_pemesans');
    }
};
