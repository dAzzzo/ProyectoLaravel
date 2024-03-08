<?php

namespace App\Http\Controllers;

use App\Models\Productos; // Asegúrate de que este es el nombre correcto de tu modelo
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        // Pagina los resultados, mostrando 10 productos por página
        $productos = Productos::paginate(10);
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        Productos::create($request->all()); // Corregido a Productos
        return redirect()->route('productos.index');
    }

    public function show(Productos $producto) // Corregido a Productos
    {
        return view('productos.show', compact('producto'));
    }

    public function edit(Productos $producto) // Corregido a Productos
    {
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, Productos $producto) // Corregido a Productos
    {
        $producto->update($request->all());
        return redirect()->route('productos.index');
    }

    public function destroy(Productos $producto) // Corregido a Productos
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
