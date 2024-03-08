@extends('clientes.layouts') {{-- Asegúrate de que este extend apunte a tu layout principal --}}

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Añadir Cliente
                </div>
                <div class="float-end">
                    <a href="{{ route('clientes.index') }}" class="btn btn-primary btn-sm">&larr; Atrás</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('clientes.store') }}" method="post">
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
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email</label>
                        <div class="col-md-6">
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="direccion" class="col-md-4 col-form-label text-md-end text-start">Dirección</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('direccion') is-invalid @enderror" id="direccion" name="direccion" value="{{ old('direccion') }}">
                            @error('direccion')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="Telefono" class="col-md-4 col-form-label text-md-end text-start">Teléfono</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('Telefono') is-invalid @enderror" id="Telefono" name="Telefono" value="{{ old('Telefono') }}">
                            @error('Telefono')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Añadir Cliente">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection