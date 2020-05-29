<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Amats;
use App\Adrese;
use App\Darbinieki;

class Nodala extends Model
{
    protected $fillable=['apraksts','nodalas_vaditajs','atrasanas_vieta','epasts','kontakttalrunis'];

    public function nodadreses() {
        return $this->belongsTo(Adrese::class,'atrasanas_vieta');
    }

    public function nodalas() {
        return $this->hasMany(Amats::class,'nodala');
    }

    public function vadanodalu() {
        return $this->belongsTo(Darbinieki::class, 'nodalas_vaditajs');
    }

}
