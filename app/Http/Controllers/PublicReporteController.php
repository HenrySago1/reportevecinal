<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reporte;

class PublicReporteController extends Controller
{
    public function create()
    {
        return view('reportar');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'tipo' => 'required|string',
            'imagen' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('imagen')) {
            $validated['imagen'] = $request->file('imagen')->store('reportes', 'public');
        }

        $validated['estado'] = 'Nuevo';
        Reporte::create($validated);

        return redirect()->route('public.reporte.create')->with('success', '¡Reporte enviado con éxito!');
    }
}
