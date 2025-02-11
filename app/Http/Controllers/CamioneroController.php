<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\camionero;

class CamioneroController extends Controller
{
    public function create()
    {
        return view('frmcamionero');
    }

    public function index()
    {
        $camioneros = camionero::orderBy('id', 'desc')->get();
        return view('camionero.listar', compact('camioneros'));
    }

    public function store(Request $request)
    {
        $camionero = new camionero();
        $camionero->dni = $request->dni;
        $camionero->Nombre = $request->Nombre;
        $camionero->Poblacion = $request->Poblacion;
        $camionero->telefono = $request->telefono;
        $camionero->Direccion = $request->Direccion;
        $camionero->salario = $request->salario;
        $camionero->save();

        return redirect()->route('camionero.index');
    }

    public function show(camionero $camionero)
    {
        return view('camionero.show', compact('camionero'));
    }

    public function destroy(camionero $camionero)
    {
        $camionero->delete();
        return redirect()->route('camionero.index');
    }

    public function edit(camionero $camionero)
    {
        return view('camionero.edit', compact('camionero'));
    }

    public function update(Request $request, camionero $camionero)
    {
        $camionero->dni = $request->dni;
        $camionero->Nombre = $request->Nombre;
        $camionero->Poblacion = $request->Poblacion;
        $camionero->telefono = $request->telefono;
        $camionero->Direccion = $request->Direccion;
        $camionero->salario = $request->salario;
        $camionero->save();

        return redirect()->route('camionero.index');
    }
}
