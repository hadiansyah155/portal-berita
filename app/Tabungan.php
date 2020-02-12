<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    protected $fillable = ['siswa_id', 'jumlah_uang'];

    public function siswa()
    {
        return $this->belongsTo('App\Siswa', 'siswa_id');
    }
}
