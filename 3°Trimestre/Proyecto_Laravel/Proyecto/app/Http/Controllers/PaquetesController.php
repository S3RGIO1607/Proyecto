<?php

namespace App\Http\Controllers;

use App\Models\Paquetes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaquetesController extends Controller
{
    /**
     * Mostrar todos los paquetes.
     */
    public function index()
    {
        $paquetes = Paquetes::with('registradoPor')->get();
        return view('Paquetes.index', compact('paquetes'));
    }

    /**
     * Mostrar formulario de creación de paquete.
     */
    public function create()
    {
        return view('Paquetes.create');
    }

    /**
     * Guardar un nuevo paquete.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipo_evento' => 'required|string|max:255',
            'nombre'      => 'required|string|max:255',
            'descripcion' => 'required|string',
            'capacidad'   => 'required|in:20-40,40-60,60-80',
            'precio'      => 'required|numeric|min:0',
        ]);

        $paquete = new Paquetes();
        $paquete->tipo_evento = $request->tipo_evento;
        $paquete->nombre      = $request->nombre;
        $paquete->descripcion = $request->descripcion;
        $paquete->capacidad   = $request->capacidad;
        $paquete->precio      = $request->precio;

        $paquete->save();

        return redirect()->route('Paquetes.index')->with('success', 'Paquete creado correctamente');
    }

    /**
     * Mostrar un paquete específico.
     */
    public function show($id)
    {
        $paquete = Paquetes::with('registradoPor')->findOrFail($id);
        return view('Paquetes.show', compact('paquete'));
    }

    /**
     * Mostrar formulario de edición de paquete.
     */
    public function edit($id)
    {
        $paquete = Paquetes::findOrFail($id);
        return view('Paquetes.edit', compact('paquete'));
    }

    /**
     * Actualizar un paquete.
     */
    public function update(Request $request, $id)
    {
        $paquete = Paquetes::findOrFail($id);

        $request->validate([
            'tipo_evento' => 'required|string|max:255',
            'nombre'      => 'required|string|max:255',
            'descripcion' => 'required|string',
            'capacidad'   => 'required|in:20-40,40-60,60-80',
            'precio'      => 'required|numeric|min:0',
        ]);

        $paquete->tipo_evento = $request->tipo_evento;
        $paquete->nombre      = $request->nombre;
        $paquete->descripcion = $request->descripcion;
        $paquete->capacidad   = $request->capacidad;
        $paquete->precio      = $request->precio;

        $paquete->save();

        return redirect()->route('Paquetes.index')->with('success', 'Paquete actualizado correctamente');
    }

    /**
     * Eliminar un paquete.
     */
    public function destroy($id)
    {
        $producto = Paquetes::findOrFail($id);
        $producto->delete();

        return redirect()->route('Paquetes.index')->with('success', 'Paquete eliminado correctamente');
    }

}