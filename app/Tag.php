<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function artikel()
    {
        // Model 'Tag' Memiliki Relasi Many to Many(belongsToMany)
        // terhadap Model 'Artikel' yang terhubung oleh table 'artikel_tag'
        // Masing2 sebagai 'artikel_id' dan 'tag_id'
        return $this->belongsToMany(
            'App\Artikel',
            'artikel_tag',
            'tag_id',
            'artikel_id');
    }
}
