<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    protected $fillable = ['kode_barang','nama_barang','kategori_barang','stok_barang','satuan_barang','harga_barang','deskripsi'];
}
