<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Ayat, Surat, Juz};

class MainController extends Controller
{
    public function index() {
        $surat = Ayat::all();

        return view('index', compact('data'));
    }
}