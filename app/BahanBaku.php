<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BahanBaku extends Model
{
    protected $table = 'bahanbakus';

    //Artinya 1 bahan baku dapat menjadi bagian
    //dari beberapa resep
    public function reseps()
    {
        return $this->belongsTo(Resep::class);
    }
}
