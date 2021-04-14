<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal()
    {
        return view('site.principal');
    }

    public function soma(int $p1, int $p2)
    {
        // echo "Soma = ".($p1+$p2);
        return view('site.soma', ['x' => $p1, 'y' => $p2]); // Array associativo
        // return view('site.soma', compact('p1', 'p2')); compact
        // return view('site.soma')->with('p1', $p1)->with('p2', $p2);
    }
}
