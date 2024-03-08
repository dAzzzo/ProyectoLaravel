@extends('productos.layouts') 

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">Listado de Productos</div>
            <div class="card-body">
                <a href="{{ route('productos.create') }}" class="btn btn-success btn-sm my-2">Nuevo Producto</a>
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">S#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                        <tr>
                            <th>{{ $producto->id }}</th>
                            <td>{{ $producto->Nombre }}</td>
                            <td>{{ $producto->Descripcion }}</td>
                            <td>{{ $producto->Precio }}</td>
                            <td>{{ $producto->Stock }}</td>
                            <td>
                                <form action="{{ route('productos.destroy', $producto->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('productos.show', $producto->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Ver</a>

                                    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-primary btn-sm">Editar</a>   

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Quieres Borrar este producto?');">Borrar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                  </table>

            </div>
        </div>
    </div>    
</div>
    
@endsection