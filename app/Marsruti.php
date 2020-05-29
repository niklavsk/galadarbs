<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MarsrutaPieturas;
use App\Transportlidzeklis;

class Marsruti extends Model
{
    protected $fillable=['nosaukums','apraksts'];

    public function brauc() {
        return $this->hasMany(Transportlidzeklis::class,'marsruta_id');
    }

    public function irNoteikti() {
        return $this->hasMany(MarsrutaPieturas::class,'marsruta_id');
    }
}
