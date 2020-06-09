<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Amats;
use App\Darbinieki;

class MaksajumuVesture extends Model
{
    public $table = 'maksajumu_vesture';
    protected $fillable=['pers_kods','amats','likme','stundu_sk','izsniegsanas_datums','alga'];

    public function tiekIzmaksats() {
        return $this->belongsTo(Amats::class,'amats');
    }

    public function orders() {
        return $this->belongsTo(Darbinieki::class,'pers_kods');
    }

}
