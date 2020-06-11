<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MaksajumuVesture;
use App\Darbinieki;
use App\Depo;
use App\Nodala;

class Amats extends Model
{
    protected $fillable=['nosaukums','nodala', 'depo', 'stundas_likme', 'darba_pilditajs', 'darba_uzsaksanas_datums', 'darba_beigsanas_datums'];

    public function tiekIzmaksats() {
        return $this->hasMany('App\MaksajumuVesture','amats');
    }

    public function manyJobs() {
        return $this->belongsTo('App\Darbinieki','darba_pilditajs');
    }

    public function atrodasZem() {
        return $this->belongsTo('App\Depo','depo');
    }

    public function nodalas() {
        return $this->belongsTo('App\Nodala','nodala');
    }

}
