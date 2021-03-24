<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videogame;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videogames = Videogame::all();
        return view('videogames.index', compact('videogames'));
    }
}
