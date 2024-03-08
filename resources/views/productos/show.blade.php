@extends('productos.layouts') {{-- Asegúrate de que este extend apunte a tu layout principal --}}

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Información del Producto
                </div>
                <div class="float-end">
                    <a href="{{ route('productos.index') }}" class="btn btn-primary btn-sm">&larr; Atrás</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label class="col-md-4 col-form-label text-md-end text-start"><strong>Nombre:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $producto->Nombre }}
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-md-4 col-form-label text-md-end text-start"><strong>Descripción:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $producto->Descripcion }}
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-md-4 col-form-label text-md-end text-start"><strong>Precio:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $producto->Precio }}
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-md-4 col-form-label text-md-end text-start"><strong>Stock:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $producto->Stock }}
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection
