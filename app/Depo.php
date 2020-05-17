<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Amats;
use App\Transportlidzeklis;

class Depo extends Model
{

    public function atrodasZem() {
        return $this->hasMany(Amats::class,'depo');
    }


    public function tiekApkalpots() {
        return $this->hasMany(Transportlidzeklis::class,'depo_nr');
    }

}
