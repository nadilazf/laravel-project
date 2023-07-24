<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportPenjualan extends Model
{
    use HasFactory;
    protected $table = 'report_penjualans';
    protected $fillable = ['bulan', 'nama_barang', 'quantity', 'harga_barang', 'total_profit'];
}
