<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = ['nama','sku','jumlah', 'tagihan', 'satuan', 'spesifikasi', 'hargamasuk', 'hargasewa', 'hargakeluar', 'gambar', 'manajemen'];

    public function gudang()
    {
        return $this->belongsTo('App\Gudang');
    }

    public function kategori()
    {
        return $this->belongsTo('App\Kategori');
    }

    public function merek()
    {
        return $this->belongsTo('App\Merek');
    }
}
