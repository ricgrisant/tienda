@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card shadow">
                <div class="dash-card card-header text-center">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p class="text-center">Haz ingresado como administrador de la tienda!</p>
                    <p class="text-center">Selecciona una opción de arriba para administrar!</p>
                </div>

                {{-- botones de opciones a menu del admin --}}
                

            </div>
        </div>
    </div>
</div>
@endsection
