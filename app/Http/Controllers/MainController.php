<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surat;
use App\Ayat;
use App\Juz;

class MainController extends Controller
{
    public function index() {
        return view('index');
    }

    public function surat($id) {
        $surat = Surat::with('ayats')->first();

        return $surat;
    }

    public function ayat($id) {
        $ayat = Ayat::with('surat')->first();

        return $ayat;
    }

    public function juz($id) {
        $juz = Juz::with('ayats')->first();

        return $juz;
    }
}