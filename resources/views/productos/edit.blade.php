@extends('productos.layouts') {{-- Asegúrate de que este extend apunte a tu layout principal --}}

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Modificar Producto
                </div>
                <div class="float-end">
                    <a href="{{ route('productos.index') }}" class="btn btn-primary btn-sm">&larr; Atrás</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('productos.update', $producto->id) }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="Nombre" class="col-md-4 col-form-label text-md-end text-start">Nombre</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('Nombre') is-invalid @enderror" id="Nombre" name="Nombre" value="{{ $producto->Nombre }}">
                            @error('Nombre')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="Descripcion" class="col-md-4 col-form-label text-md-end text-start">Descripción</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('Descripcion') is-invalid @enderror" id="Descripcion" name="Descripcion">{{ $producto->Descripcion }}</textarea>
                            @error('Descripcion')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="Precio" class="col-md-4 col-form-label text-md-end text-start">Precio</label>
                        <div class="col-md-6">
                          <input type="number" step="0.01" class="form-control @error('Precio') is-invalid @enderror" id="Precio" name="Precio" value="{{ $producto->Precio }}">
                            @error('Precio')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="Stock" class="col-md-4 col-form-label text-md-end text-start">Stock</label>
                        <div class="col-md-6">
                          <input type="number" class="form-control @error('Stock') is-invalid @enderror" id="Stock" name="Stock" value="{{ $producto->Stock }}">
                            @error('Stock')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Actualizar Producto">
                    </div>

                </form>
            </div>
        </div>
    </div>    
</div>

@endsection