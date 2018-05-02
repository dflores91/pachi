<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class BusquedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($email,$proyecto)
    {
        //
        $usuarios = User::where('email', '=', $email)->get();
        return view('busquedaUsuario',compact('usuarios','proyecto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return redirect('busqueda/'.$request->email.'/'.$request->proyecto);
    }

    public function agregarUsuario($email, $proyecto)
    {
        //
        $usuarios = User::where('email', '=', $email)->get();
        $usuarios[0]->miembroDe()->attach($proyecto,['leer' => 1, "escribir" => 1]);
        return redirect('project/'.$proyecto.'/members');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
