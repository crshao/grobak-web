<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'pesanans';

    protected $fillable = ['id_user', 'state', 'id_courier'];

    public function couriers(){
        return $this->belongsTo(Courier::class);
    }
}
