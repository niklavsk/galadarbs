<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MaksajumuVesture;

class Amats extends Model
{
    public function tiekIzmaksats() {
        return $this->hasMany(MaksajumuVesture::class,'amats');
    }


}
