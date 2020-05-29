<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Darbinieki;
use App\Nodala;
use App\Depo;
use App\Pietura;

class Adrese extends Model
{
    protected $fillable=['valsts','novads','pilseta','iela','majas_nr','pagasts','majas_nosaukums','pasta_indekss'];

    public function dzivo() {
        return $this->hasMany(Darbinieki::class,'adrese');
    }

    public function nodadreses() {
        return $this->hasMany(Nodala::class,'atrasanas_vieta');
    }

    public function depoadreses() {
        return $this->hasMany(Depo::class,'atrasanas_vieta');
    }

    public function atrodas() {
        return $this->hasMany(Pietura::class,'atrasanas_vieta');
    }
}