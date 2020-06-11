<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MaksajumuVesture;
use App\Amats;
use App\Nodala;
use App\Depo;
use App\User;

class Darbinieki extends Model
{
    protected $fillable=['pk','vards','otrais_vards','uzvards','adrese','talrunis'];

    public function pieder() {
        return $this->belongsTo('App\Adrese', 'adrese');
    }

    public function orders() {
        return $this->hasMany('App\MaksajumuVesture','pers_kods');
    }

    public function manyJobs() {
        return $this->hasMany('App\Amats','darba_pilditajs');
    }

    public function vadanodalu() {
        return $this->hasOne('App\Nodala', 'nodalas_vaditajs');
    }

    public function vadadepo() {
        return $this->hasOne('App\Depo', 'depo_vaditajs');
    }

    public function userIsDarbinieks() {
        return $this->belongsTo('App\User', 'user_id');
    }

}
