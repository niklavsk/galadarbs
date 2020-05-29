<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Amats;
use App\Transportlidzeklis;
use App\Adrese;
use App\Darbinieki;

class Depo extends Model
{
    protected $fillable=['apraksts','depo_vaditajs','atrasanas_vieta','epasts','kontakttalrunis'];

    public function depoadreses() {
        return $this->belongsTo(Adrese::class,'atrasanas_vieta');
    }

    public function atrodasZem() {
        return $this->hasMany(Amats::class,'depo');
    }

    public function tiekApkalpots() {
        return $this->hasMany(Transportlidzeklis::class,'depo_nr');
    }

    public function vadadepo() {
        return $this->belongsTo(Darbinieki::class, 'depo_vaditajs');
    }

}
