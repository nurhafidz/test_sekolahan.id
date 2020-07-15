<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $arrayNilai = array (
            89 => 'Agus',
            90 => 'Juni',
            97 => 'Yanuar',
            85 => 'Desi',
            88 => 'Nopi',
            93 => 'Febi'
            );
        
            krsort($arrayNilai);


        return view('home', compact('arrayNilai'));
    }
}
