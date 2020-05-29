<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MarsrutaPieturas;
use App\Adrese;

class Pietura extends Model
{
    protected $fillable=['nosaukums','atrasanas_vieta'];

    public function atrodas() {
        return $this->belongsTo(Adrese::class,'atrasanas_vieta');
    }

    public function pieder() {
        return $this->hasMany(MarsrutaPieturas::class,'pietura');
    }

}