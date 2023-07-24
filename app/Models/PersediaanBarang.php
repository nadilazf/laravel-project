<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersediaanBarang extends Model
{
    use HasFactory;
    protected $table = 'persediaan_barangs';
    protected $fillable = ['kode_barang', 'nama_barang', 'jenis_barang', 'harga_barang', 'quantity', 'tujuan_barang'];
}
