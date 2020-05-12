<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = ['user_id', 'nama', 'manajemen'];

    public function barang()
    {
        return $this->hasMany('App\Barang');
    }
}
