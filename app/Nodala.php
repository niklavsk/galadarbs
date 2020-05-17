<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Amats;

class Nodala extends Model
{

    public function nodalas() {
        return $this->hasMany(Amats::class,'nodala');
    }

}
