<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paquete;

class PaqueteController extends Controller
{
    public function create()
    {
        return view('frmpaquete');
    }

    public function store(Request $request)
    {
        $paquete = new Paquete();
        $paquete->codigo = $request->codigo;
        $paquete->descricione = $request->descricion;
        $paquete->save();
        return $paquete;
    }
        public function index()
        {
            $paquete = paquete::orderBy('idpaquete', 'asc')->get();
            return view('paquete.list', compact('paquetes'));
        }

        public function show(paquete $paquete)
        {
            return view('paquete.show', compact('paquetes'));
        }

        public function edit(paquete $paquete)
        {
            return view('paquete.edit', compact('paquetes'));
        }

        public function update(Request $request, paquete $paquete)
        {
            $paquete = new Paquete();
            $paquete->codigo = $request->codigo;
            $paquete->descricione = $request->descricion;
            $paquete->save();
            return redirect()->route('paquete.index');
        }

        public function destroy(paquete $paquete)
        {
            $paquete->delete();
            return redirect()->route('paquete.index');
        }
    }
