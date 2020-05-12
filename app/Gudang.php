<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    protected $table = 'gudang';
    protected $fillable = ['nama','lokasi','jumlah_ruangan','kapasitas','gambar'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function barang(){
        return $this->hasMany('App\Barang');
    }
}