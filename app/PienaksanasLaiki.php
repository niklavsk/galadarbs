<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MarsrutaPieturas;

class PienaksanasLaiki extends Model
{
    public $table = 'pienaksanas_laiki';
    protected $fillable=['marsruta_pieturas','laiks'];

    public function irNoteikti() {
        return $this->belongsTo(MarsrutaPieturas::class,'marsruta_pietura');
    }

}
