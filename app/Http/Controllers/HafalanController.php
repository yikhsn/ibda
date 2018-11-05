<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hafalan;

class HafalanController extends Controller
{
    public function index()
    {
        $hafalan = Hafalan::get();

        

        return $hafalan;
    }
}
