<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Amats;
use App\Transportlidzeklis;
use App\Darbinieki;

class Depo extends Model
{
    public $table = 'depo';
    protected $fillable=['apraksts','depo_vaditajs','atrasanas_vieta','epasts','kontakttalrunis'];

    public function depoadreses() {
        return $this->belongsTo('App\Adrese','atrasanas_vieta');
    }


    public function atrodasZem() {
        return $this->hasMany('App\Amats','depo');
    }

    public function tiekApkalpots() {
        return $this->hasMany('App\Transportlidzeklis','depo_nr');
    }

    public function vadadepo() {
        return $this->belongsTo('App\Darbinieki', 'depo_vaditajs');
    }

}
