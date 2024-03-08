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
                        <label for="Nombre" class="col-md-4 col-form-label text-md-end text-start">Nombre</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('Nombre') is-invalid @enderror" id="Nombre" name="Nombre" value="{{ old('Nombre') }}">
                            @error('Nombre')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="Email" class="col-md-4 col-form-label text-md-end text-start">Email</label>
                        <div class="col-md-6">
                          <input type="Email" class="form-control @error('Email') is-invalid @enderror" id="Email" name="Email" value="{{ old('Email') }}">
                            @error('Email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="Direccion" class="col-md-4 col-form-label text-md-end text-start">Dirección</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('Direccion') is-invalid @enderror" id="Direccion" name="Direccion" value="{{ old('Direccion') }}">
                            @error('Direccion')
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