<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MarsrutaPieturas;

class PienaksanasLaiki extends Model
{
    public function irNoteikti() {
        return $this->belongsTo(MarsrutaPieturas::class,'marsruta_pietura');
    }

}
