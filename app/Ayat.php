<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Juz as Juz;
use App\Surat as Surat;

class Ayat extends Model
{
    protected $table = "ayat";

    public function juz() {
        return $this->belongsTo('Juz');
    }

    public function surat() {
        return $this->belongsTo('Surat');
    }
}
