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
        return $this->hasMany(PienaksanasLaiki::class,'marsruta_pietura');
    }

    public function pieder() {
        return $this->belongsTo(Pietura::class,'pietura');
    }

    public function brauc() {
        return $this->belongsTo(Marsruti::class,'marsruta_id');
    }

}
