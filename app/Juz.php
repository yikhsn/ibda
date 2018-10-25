<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ayat as Ayat;

class Juz extends Model
{
    protected $table = "juz";

    public function ayats(){
        return $this->hasMany('Ayat');
    }
}
