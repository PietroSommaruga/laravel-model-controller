<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function index()
    {
        /* Chiamata al db e salvataggio dei dati */
        $data = Movie::all();

        /* dd($data); */

        return view('welcome', compact('data'));
    }
}