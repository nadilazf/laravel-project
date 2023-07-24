<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPemesan extends Model
{
    use HasFactory;
    protected $table = 'data_pemesans';
    protected $fillable = ['nama_pemesan', 'jumlah_pesanan', 'total_harga', 'alamat_pemesan', 'telp'];
}
