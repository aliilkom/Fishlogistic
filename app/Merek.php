<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
    protected $table = 'merek';
    protected $fillable = ['user_id', 'name', 'manajemen'];
    
    public function barang()
    {
        return $this->hasMany('App\Barang');
    }
}
