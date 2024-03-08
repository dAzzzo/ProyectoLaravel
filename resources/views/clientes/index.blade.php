@extends('clientes.layouts') 

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">Listado de Clientes</div>
            <div class="card-body">
                <a href="{{ route('clientes.create') }}" class="btn btn-success btn-sm my-2">Nuevo Cliente</a>
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">S#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                        <tr>
                            <th scope="row">{{ $cliente->id }}</th>
                            <td>{{ $cliente->Nombre }}</td>
                            <td>{{ $cliente->Email }}</td>
                            <td>{{ $cliente->Direccion }}</td>
                            <td>{{ $cliente->Telefono }}</td>
                            <td>
                                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-primary btn-sm">Editar</a>   

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Quieres Borrar este cliente?');">Borrar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                  </table>

                  {{ $clientes->links() }}

            </div>
        </div>
    </div>    
</div>
    
@endsection
