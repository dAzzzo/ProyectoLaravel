<?php

namespace App\Http\Controllers;

use App\Models\ProductoModel; // Asegúrate de que este es el nombre correcto de tu modelo
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        // Pagina los resultados, mostrando 10 productos por página
        $productos = ProductoModel::paginate(10);
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        ProductoModel::create($request->all()); // Corregido a ProductoModel
        return redirect()->route('productos.index');
    }

    public function show(ProductoModel $producto) // Corregido a ProductoModel
    {
        return view('productos.show', compact('producto'));
    }

    public function edit(ProductoModel $producto) // Corregido a ProductoModel
    {
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, ProductoModel $producto) // Corregido a ProductoModel
    {
        $producto->update($request->all());
        return redirect()->route('productos.index');
    }

    public function destroy(ProductoModel $producto) // Corregido a ProductoModel
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
