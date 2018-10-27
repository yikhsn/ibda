<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ayat;

class AyatController extends Controller
{
    // public function show($id) {
    //     $ayat = Ayat::with('surat')->first();

    //     return $ayat;
    // }

    public function show($nomor_surat, $nomor_ayat) {
        $ayat = Ayat::where([
            ['nomor_surat', '=', $nomor_surat],
            ['nomor_ayat', '=', $nomor_ayat],
        ])->first();

        return view('surat.single', compact('ayat'));
    }
}
