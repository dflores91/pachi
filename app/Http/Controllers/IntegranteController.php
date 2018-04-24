<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Integrante;

class IntegranteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('usuarios');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $integrante= new Integrante();
        $proyecto->nombre=$request->get('name');
        $proyecto->descripcion=$request->get('descripcion');
        $proyecto->id_creacion=$request->get('id');
        $proyecto->save();
        
        return redirect('project')->with('success', 'Information has been added');
    }

    public function index()
    {
        return view('/usuarios');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto = Proyecto::find($id);
        return view('editproyecto',compact('proyecto','id'));
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
        $proyecto= Proyecto::find($id);
        $proyecto->nombre=$request->get('nombre');
        $proyecto->descripcion=$request->get('descripcion');
        $proyecto->save();
        return redirect('project');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proyecto = Proyecto::find($id);
        $proyecto->delete();
        return redirect('project')->with('success','Information has been  deleted');
    }
}
