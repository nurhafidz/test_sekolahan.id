<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = array (
            89 => 'Agus',
            90 => 'Juni',
            97 => 'Yanuar',
            85 => 'Desi',
            88 => 'Nopi',
            93 => 'Febi'
            );
        
            krsort($data);


        return view('home', compact('data'));
    }
}
