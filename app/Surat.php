<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ayat as Ayat;

class Surat extends Model
{
    protected $table = "surat";
    
    public function ayats(){
        return $this->hasMany('Ayat');
    }
}