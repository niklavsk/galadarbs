<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Transportlidzeklis;
use App\PienaksanasLaiki;

class MarsrutaPieturas extends Model
{
    public function brauc() {
        return $this->hasMany(Transportlidzeklis::class,'marsruta_sakums');
    }

    public function irNoteikti() {
        return $this->hasMany(PienaksanasLaiki::class,'marsruta_pietura');
    }

}
