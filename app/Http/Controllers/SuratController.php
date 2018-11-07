<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surat;

class SuratController extends Controller
{
    public function show($id) {
        $surat = Surat::with('ayats')
                    ->where('nomor_surat', $id)
                    ->first();

        $all_surats = Surat::get();

        return view('surat.index', compact(['surat', 'all_surats']));
    }

    public function ayat($nomor_surat, $nomor_ayat) {
        $surat = Surat::with('ayats')
                    ->where('nomor_surat', $nomor_surat)
                    ->first();

        $ayat = $surat->ayats->where('nomor_ayat', $nomor_ayat);

        // return view('surat.single', compact('ayat'));
    }
}
