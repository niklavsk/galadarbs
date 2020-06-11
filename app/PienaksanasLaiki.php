<?php

namespace App;

use App\MarsrutaPieturas;
use Illuminate\Database\Eloquent\Model;

class PienaksanasLaiki extends Model
{
    public $table = 'pienaksanas_laiki';
    protected $fillable=['marsruta_pieturas','laiks'];

    public function irNoteikti() {
        return $this->belongsTo('App\MarsrutaPieturas','marsruta_pietura');
    }

}
