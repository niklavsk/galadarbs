<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MaksajumuVesture;
use App\Amats;
use App\Nodala;
use App\Depo;
use App\Adrese;
use App\User;

class Darbinieki extends Model
{
    protected $fillable=['pk','vards','otrais_vards','uzvards','adrese','talrunis'];

    public function pieder() {
        return $this->belongsTo(Adrese::class, 'adrese');
    }

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

    public function userIsDarbinieks() {
        return $this->belongsTo(User::class, 'user_id');
    }

}
