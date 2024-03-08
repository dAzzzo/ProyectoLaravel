<?php

namespace App\Http\Controllers;

use App\Models\Clientes; // Asegúrate de que este es el nombre correcto de tu modelo
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        // Pagina los resultados, mostrando 10 clientes por página
        $clientes = Clientes::paginate(10);
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        Clientes::create($request->all()); // Corregido a Clientes
        return redirect()->route('clientes.index');
    }

    public function show(Clientes $cliente) // Corregido a Clientes
    {
        return view('clientes.show', compact('cliente'));
    }

    public function edit(Clientes $cliente) // Corregido a Clientes
    {
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Clientes $cliente) // Corregido a Clientes
    {
        $cliente->update($request->all());
        return redirect()->route('clientes.index');
    }

    public function destroy(Clientes $cliente) // Corregido a Clientes
    {
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}
