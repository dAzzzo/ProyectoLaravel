<?php

namespace App\Http\Controllers;

use App\Models\ClienteModel; // Asegúrate de que este es el nombre correcto de tu modelo
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        // Pagina los resultados, mostrando 10 clientes por página
        $clientes = ClienteModel::paginate(10);
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        ClienteModel::create($request->all()); // Corregido a ClienteModel
        return redirect()->route('clientes.index');
    }

    public function show(ClienteModel $cliente) // Corregido a ClienteModel
    {
        return view('clientes.show', compact('cliente'));
    }

    public function edit(ClienteModel $cliente) // Corregido a ClienteModel
    {
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, ClienteModel $cliente) // Corregido a ClienteModel
    {
        $cliente->update($request->all());
        return redirect()->route('clientes.index');
    }

    public function destroy(ClienteModel $cliente) // Corregido a ClienteModel
    {
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}
