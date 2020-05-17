<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MaksajumuVesture;
use App\Amats;
use App\Nodala;
use App\Depo;

class Darbinieki extends Model
{

    public function orders() {
        return $this->hasMany(MaksajumuVesture::class,'pers_kods');
    }

    public function manyJobs() {
        return $this->hasMany(Amats::class,'darba_pilditajs');
    }

    public function vadanodalu() {
        return $this->hasOne(Nodala::class, 'nodalas_vaditajs');
    }

    public function vadadepo() {
        return $this->hasOne(Depo::class, 'depo_vaditajs');
    }
}
