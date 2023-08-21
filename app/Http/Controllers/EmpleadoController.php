<?php

namespace App\Http\Controllers;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $empelado = Empleado::all();

        
        return view('empleado',compact('empelado'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        //
        return view('creare');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
       $nvempl =new Empleado();
       $nvempl->nombre=$request->input('nombre');
       $nvempl->apellido=$request->input('tapellido');
       $nvempl->salario=$request->input('salario');
       $nvempl->fechaIngreso=$request->input('fecha');
       $nvempl->save(); 

        //
        return redirect('/empleado');
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
