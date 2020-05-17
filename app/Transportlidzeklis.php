<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Depo;
use App\MarsrutaPieturas;

class Transportlidzeklis extends Model
{
    public function tiekApkalpots() {
        return $this->belongsTo(Depo::class,'depo_nr');
    }

    public function brauc() {
        return $this->belongsTo(MarsrutaPieturas::class,'marsruta_sakums');
    }

}
