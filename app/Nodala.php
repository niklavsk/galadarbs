<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Amats;
use App\Adrese;
use App\Darbinieki;

class Nodala extends Model
{
    public $table = 'nodala';
    protected $fillable=['apraksts','nodalas_vaditajs','atrasanas_vieta','epasts','kontakttalrunis'];

    public function nodadreses() {
        return $this->belongsTo('App\Adrese','atrasanas_vieta');
    }

    public function nodalas() {
        return $this->hasMany('App\Amats','nodala');
    }

    public function vadanodalu() {
        return $this->belongsTo('App\Darbinieki', 'nodalas_vaditajs');
    }

}
