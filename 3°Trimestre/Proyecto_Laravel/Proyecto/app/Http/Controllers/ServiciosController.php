<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicios;

class ServiciosController extends Controller
{
    // Mostrar todos los servicios
    public function index()
    {
        $servicios = Servicios::all();
        return view('Servicios.index', compact('servicios'));
    }

    // Mostrar el formulario para crear un nuevo servicio
    public function create()
    {
        return view('Servicios.create');
    }

    // Almacenar un nuevo servicio en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'precio' => 'required|numeric|min:0'
        ]);

        Servicios::create($request->all());

        return redirect()->route('Servicios.index')->with('success', 'Servicio creado exitosamente.');
    }

    // Mostrar los detalles de un servicio específico
    public function show($id)
    {
        $servicio = Servicios::find($id);
        return view('Servicios.show', compact('servicio'));
    }

    // Mostrar el formulario para editar un servicio
    public function edit($id)
    {
        $servicio = Servicios::find($id);
        return view('Servicios.edit', compact('servicio'));
    }

    // Actualizar un servicio en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'precio' => 'required|numeric|min:0'
        ]);

        $servicio = Servicios::find($id);
        $servicio->update($request->all());

        return redirect()->route('Servicios.index')->with('success', 'Servicio actualizado exitosamente.');
    }

    // Eliminar un servicio
    public function destroy($id)
    {
        $servicio = Servicios::find($id);
        $servicio->delete();

        return redirect()->route('Servicios.index')->with('success', 'Servicio eliminado exitosamente.');
    }
}