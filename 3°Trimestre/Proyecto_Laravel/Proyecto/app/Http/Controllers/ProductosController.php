<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductosController extends Controller
{
    /**
     * Mostrar todos los productos.
     */
    public function index()
    {
        $productos = Productos::with('registradoPor')->get();
        return view('Productos.index', compact('productos'));
    }

    /**
     * Mostrar formulario de creación de producto.
     */
    public function create()
    {
        return view('Productos.create');
    }

    /**
     * Guardar un nuevo producto.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_producto'  => 'required|string|max:255',
            'existencia'       => 'required|integer|min:0',
            'descripcion'      => 'required|string',
            'precio_compra'    => 'required|numeric|min:0',
            'precio_alquiler'  => 'required|numeric|min:0',
            'fecha_entrada'    => 'required|date',
            'fecha_salida'     => 'required|date|after_or_equal:fecha_entrada',
            'imagen'           => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $producto = new Productos($request->except('imagen'));

        // asignar id del usuario autenticado como registrador
        $producto->id_usuario = Auth::id();

        // si viene archivo, lo guardamos en binario usando el mutator del modelo
        if ($request->hasFile('imagen')) {
            $producto->imagen = $request->file('imagen'); // usa setImagenAttribute en el modelo
        }

        $producto->save();

        return redirect()->route('Productos.index')->with('success', 'Producto creado correctamente');
    }

    /**
     * Mostrar un producto específico.
     */
    public function show($id)
    {
        $producto = Productos::with('registradoPor')->findOrFail($id);
        return view('Productos.show', compact('producto'));
    }

    /**
     * Mostrar formulario de edición de producto.
     */
    public function edit($id)
    {
        $producto = Productos::findOrFail($id);
        return view('Productos.edit', compact('producto'));
    }

    /**
     * Actualizar un producto.
     */
    public function update(Request $request, $id)
    {
        $producto = Productos::findOrFail($id);

        $request->validate([
            'nombre_producto'  => 'sometimes|string|max:255',
            'existencia'       => 'sometimes|integer|min:0',
            'descripcion'      => 'sometimes|string',
            'precio_compra'    => 'sometimes|numeric|min:0',
            'precio_alquiler'  => 'sometimes|numeric|min:0',
            'fecha_entrada'    => 'sometimes|date',
            'fecha_salida'     => 'sometimes|date|after_or_equal:fecha_entrada',
            'imagen'           => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $producto->fill($request->except('imagen'));

        // Si se envía nueva imagen, reemplazamos el BLOB
        if ($request->hasFile('imagen')) {
            $producto->imagen = $request->file('imagen');
        }

        // `id_usuario` se mantiene o puedes permitir cambiarlo solo si es administrador; aquí lo dejamos como está
        $producto->save();

        return redirect()->route('Productos.index')->with('success', 'Producto actualizado correctamente');
    }

    /**
     * Eliminar un producto.
     */
    public function destroy($id)
    {
        $producto = Productos::findOrFail($id);
        $producto->delete();

        return redirect()->route('Productos.index')->with('success', 'Producto eliminado correctamente');
    }

}
