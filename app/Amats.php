<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MaksajumuVesture;
use App\Darbinieki;
use App\Depo;
use App\Nodala;

class Amats extends Model
{
    public $table = 'amats';
    protected $fillable=['nosaukums','nodala', 'depo', 'stundas_likme', 'darba_pilditajs', 'darba_uzsaksanas_datums', 'darba_beigsanas_datums'];

    public function tiekIzmaksats() {
        return $this->hasMany(MaksajumuVesture::class,'amats');
    }

    public function manyJobs() {
        return $this->belongsTo(Darbinieki::class,'darba_pilditajs');
    }

    public function atrodasZem() {
        return $this->belongsTo(Depo::class,'depo');
    }

    public function nodalas() {
        return $this->belongsTo(Nodala::class,'nodala');
    }

}
