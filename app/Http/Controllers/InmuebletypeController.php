<?php

namespace App\Http\Controllers;

use App\Http\Requests\InmuebletypeStore;
use App\Http\Requests\InmuebletypeUpdate;
use App\Inmuebletype;
use Illuminate\Http\Request;

class InmuebletypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inmuebletyps = Inmuebletype::paginate(10);
        return view('inmuebletype.index', compact('inmuebletyps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inmuebletype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InmuebletypeStore $request)
    {
        Inmuebletype::create($request->all());
        return redirect('inmuebletype')->with('status_success', 'Tipo de inmueble creado correctamente');
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
        $inmuebletype = Inmuebletype::find($id);
        return view('inmuebletype.edit', compact('inmuebletype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InmuebletypeUpdate $request, Inmuebletype $inmuebletype)
    {
        $inmuebletype = Inmuebletype::find($inmuebletype->id);
        $inmuebletype->name = $request->name;
        $inmuebletype->description = $request->description;
        $inmuebletype->save();
        return redirect('inmuebletype')->with('status_success', 'El tipo de inmueble se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Inmuebletype::destroy($id);
        return redirect('inmuebletype')->with('status_success', 'El tipo de inmueble se elimino correctamente');
    }
}
