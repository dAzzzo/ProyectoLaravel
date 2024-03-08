@extends('productos.layouts') {{-- Asegúrate de que este extend apunte a tu layout principal --}}

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Añadir Producto
                </div>
                <div class="float-end">
                    <a href="{{ route('productos.index') }}" class="btn btn-primary btn-sm">&larr; Atrás</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('productos.store') }}" method="post">
                    @csrf

                    <div class="mb-3 row">
                        <label for="nombre" class="col-md-4 col-form-label text-md-end text-start">Nombre</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{ old('nombre') }}">
                            @error('nombre')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="Descripcion" class="col-md-4 col-form-label text-md-end text-start">Descripción</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('Descripcion') is-invalid @enderror" id="Descripcion" name="Descripcion">{{ old('Descripcion') }}</textarea>
                            @error('Descripcion')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="precio" class="col-md-4 col-form-label text-md-end text-start">Precio</label>
                        <div class="col-md-6">
                          <input type="number" step="0.01" class="form-control @error('precio') is-invalid @enderror" id="precio" name="precio" value="{{ old('precio') }}">
                            @error('precio')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="stock" class="col-md-4 col-form-label text-md-end text-start">Stock</label>
                        <div class="col-md-6">
                          <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" value="{{ old('stock') }}">
                            @error('stock')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Añadir Producto">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection