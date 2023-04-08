<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    // use HasFactory;
    protected $table= "pemesanan";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama_customer
        no_tlp
        alamat
        tgl_pesanan
        id_produk
        nama_produk
        harga_perproduk
        jumlah_produk
        total_harga'
    ];
}
