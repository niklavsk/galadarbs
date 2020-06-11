<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adrese extends Model
{
    public $table = 'adrese';
    protected $fillable=['valsts','novads','pilseta','iela','majas_nr','pagasts','majas_nosaukums','pasta_indekss'];

    public function dzivo() {
        return $this->hasMany('App\Darbinieki','adrese');
    }

    public function nodadreses() {
        return $this->hasMany('App\Nodala','atrasanas_vieta');
    }

    public function depoadreses() {
        return $this->hasMany('App\Depo','atrasanas_vieta');
    }

    public function atrodas() {
        return $this->hasMany('App\Pietura','atrasanas_vieta');
    }
}
