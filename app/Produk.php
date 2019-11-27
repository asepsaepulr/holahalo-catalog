<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produks';
    protected $fillable = ['nama','foto','deskripsi','slug','id_kategori'];
    public $timestemps = true;

    public function Kategori()
    {
        return $this->belongsTo('App\Kategori','id_kategori');
    }
 
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
