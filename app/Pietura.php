<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MarsrutaPieturas;
use App\Adrese;

class Pietura extends Model
{
    public $table = 'pietura';
    protected $fillable=['nosaukums','atrasanas_vieta'];

    public function atrodas() {
        return $this->belongsTo('App\Adrese','atrasanas_vieta');
    }

    public function pieder() {
        return $this->hasMany('App\MarsrutaPieturas','pietura');
    }

}
