<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    //
    protected $fillable = ['nama', 'slug'];
    public $timestamps = true;

    public function artikel()
    {
        // Model Kategori bisa Memiliki banyak data
        // dari Model Artikel melalui 'kategori_id'
        return $this->hasMany('App\Artikel', 'kategori_id');
    }
}
