<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Depo;
use App\Marsruti;

class Transportlidzeklis extends Model
{
    public $table = 'transportlidzeklis';
    protected $fillable=['tehniskas_parbaudes_termins','pedeja_remonta_datums','razosanas_datums','razotajs','depo_nr','marsruta_id'];

    public function tiekApkalpots() {
        return $this->belongsTo('App\Depo','depo_nr');
    }

    public function brauc() {
        return $this->belongsTo('App\Marsruti','marsruta_id');
    }

}
