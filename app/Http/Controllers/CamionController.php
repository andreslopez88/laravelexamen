<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camion;

class CamionController extends Controller
{
    public function create()
    {
        return view('frmcamion');
    }

    public function store(Request $request)
    {
        $camion = new Camion();
        $camion->matricula = $request->matricula;
        $camion->modelo = $request->modelo;
        $camion->potencia = $request->potencia;
        $camion->save();
        return $camion;
    }
        public function index()
        {
            $camion = camion::orderBy('idcamion', 'asc')->get();
            return view('camion.list', compact('camions'));
        }

        public function show(camion $camion)
        {
            return view('camion.show', compact('camions'));
        }

        public function edit(camion $camion)
        {
            return view('camion.edit', compact('camions'));
        }

        public function update(Request $request, camion $camion)
        {
            $camion = new Camion();
            $camion->matricula = $request->matricula;
            $camion->modelo = $request->modelo;
            $camion->potencia = $request->potencia;
            $camion->save();
            return redirect()->route('camion.index');
        }

        public function destroy(camion $camion)
        {
            $camion->delete();
            return redirect()->route('camion.index');
        }
    }
