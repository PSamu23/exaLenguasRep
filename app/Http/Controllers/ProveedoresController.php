<?php

namespace App\Http\Controllers;

use App\Models\Proveedore;
use Illuminate\Http\Request;


class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedor = Proveedore::all();
        //
        return view('proveedores',compact('proveedor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('crearp');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nvprove =new Proveedore();
        $nvprove->nombre=$request->input('nombre');
        $nvprove->telefono=$request->input('telefono');
        $nvprove->correo=$request->input('correo');
        $nvprove->fechaRegistro=$request->input('fecha');
        $nvprove->save(); 

        //
        return redirect('/proveedores');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
