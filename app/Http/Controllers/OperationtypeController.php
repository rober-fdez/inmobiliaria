<?php

namespace App\Http\Controllers;

use App\Http\Requests\OperationtypeStore;
use App\Http\Requests\OperationtyUpdate;
use App\Operationtype;
use Illuminate\Http\Request;

class OperationtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operationtypes = Operationtype::paginate(10);
        return view('operationtype.index', compact('operationtypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('operationtype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OperationtypeStore $request)
    {
        Operationtype::create($request->all());
        return redirect('operationtype')->with('status_success','Tipo de operacón creado carrectamente');
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
        $operationtype = Operationtype::find($id);
        return view('operationtype.edit', compact('operationtype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OperationtyUpdate $request, Operationtype $operationtype)
    {
        $operationtype = Operationtype::find($operationtype->id);
        $operationtype->name = $request->name;
        $operationtype->description = $request->description;
        $operationtype->save();
        return redirect('operationtype')->with('status_success', 'El tipo de operacón se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Operationtype::destroy($id);
        return redirect('operationtype')->with('status_success', 'El tipo de operacion se a eliminado correctamente');
    }
}
