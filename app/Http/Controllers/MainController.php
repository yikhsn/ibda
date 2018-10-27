<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surat;
use App\Ayat;
use App\Juz;

class MainController extends Controller
{
    public function index() {
        return view('home.index');
    }

    public function read() {
        $surats = Surat::get();

        $juzs = Juz::get();

        return view('home.list', compact(['surats', 'juzs']));
    }
}