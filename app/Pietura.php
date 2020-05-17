<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MarsrutaPieturas;

class Pietura extends Model
{
    public function pieder() {
        return $this->hasMany(MarsrutaPieturas::class,'pietura');
    }

}
