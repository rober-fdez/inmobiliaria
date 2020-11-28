<?php

namespace App\Http\Controllers;

use App\Equipament;
use App\Http\Requests\EquipamentStore;
use Illuminate\Http\Request;

class EquipamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipaments = Equipament::paginate(10);
        return view('equipament.index', compact('equipaments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipament.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EquipamentStore $request)
    {
        Equipament::create($request->all());
        return redirect('equipament')->with('seccess_message', 'Equipo agregado correctamente');
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
        $equipament = Equipament::find($id);
        return view('equipament.edit', compact('equipament'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EquipamentStore $request, Equipament $equipament)
    {
        $equipament = Equipament::find($equipament->id);
        $equipament->name = $request->name;
        $equipament->description = $request->description;
        $equipament->save();
        return redirect('equipament')->with('success_message', 'El tipo de quipo se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Equipament::destroy($id);
        return redirect('equipament')->with('success_message', 'Equipo eliminado correctamente');
    }
}
