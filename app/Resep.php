<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    protected $table = 'reseps';

    //Artinya satu resep punya banyak bahan baku
    public function bahanbakus()
    {
        return $this->hasMany(BahanBaku::class);
    }
}
