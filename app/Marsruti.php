<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MarsrutaPieturas;
use App\Transportlidzeklis;

class Marsruti extends Model
{
    public $table = 'marsruti';
    protected $fillable=['nosaukums','apraksts'];

    public function brauc() {
        return $this->hasMany('App\Transportlidzeklis','marsruta_id');
    }

    public function irNoteikti() {
        return $this->hasMany('App\MarsrutaPieturas','marsruta_id');
    }
}
