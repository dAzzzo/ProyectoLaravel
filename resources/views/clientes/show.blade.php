@extends('clientes.layouts') {{-- Asegúrate de que este extend apunte a tu layout principal --}}

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Información del Cliente
                </div>
                <div class="float-end">
                    <a href="{{ route('clientes.index') }}" class="btn btn-primary btn-sm">&larr; Atrás</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label class="col-md-4 col-form-label text-md-end text-start"><strong>Nombre:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $cliente->Nombre }}
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-md-4 col-form-label text-md-end text-start"><strong>Email:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $cliente->Email }}
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-md-4 col-form-label text-md-end text-start"><strong>Dirección:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $cliente->Direccion }}
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-md-4 col-form-label text-md-end text-start"><strong>Teléfono:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $cliente->Telefono }}
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection
