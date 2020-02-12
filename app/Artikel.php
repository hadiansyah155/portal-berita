<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = [
        'judul',
        'slug',
        'deskripsi',
        'foto',
        'user_id',
        'kategori_id'
    ];
    public $timestamps = true;

    public function kategori()
    {
        // data Model 'Artikel' bisa dimiliki oleh model 'Kategori'
        // Melalui 'kategori_id'
        return $this->belongsTo('App\Kategori', 'kategori_id');
    }

    public function user()
    {
        // data Model 'Artikel' bisa dimiliki oleh Model 'User'
        // Melalui 'kategori_id'
        return $this->belongsTo('App\User', 'user_id');
    }

    public function tag()
    {
        // Model 'Artikel' Memiliki relasi many to Many (belongsToMany)
        // terhadap model 'Tag' yang terhubung oleh
        // table 'artikel_id' masing-masing sebagai 'tag_id' dan
        // 'artikel_id'
        return $this->belongsToMany(
            'App\Tag',
            'artikel_tag',
            'artikel_id',
            'tag_id'
        );
    }
}
