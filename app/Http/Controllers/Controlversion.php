<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\version;
use App\Users;
use App\Proyecto;

class Controlversion extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $proyecto=Proyecto::all();
        return view('versiones');
    }
}
