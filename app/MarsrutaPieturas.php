<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Marsruti;
use App\PienaksanasLaiki;
use App\Pietura;

class MarsrutaPieturas extends Model
{
    public $table = 'marsruta_pieturas';
    protected $fillable=['pieturas_kartas_nr','pietura','marsruta_id'];

    public function irNoteikti() {
        return $this->hasMany('App\PienaksanasLaiki','marsruta_pietura');
    }

    public function pieder() {
        return $this->belongsTo('App\Pietura','pietura');
    }

    public function brauc() {
        return $this->belongsTo('App\Marsruti','marsruta_id');
    }

}
