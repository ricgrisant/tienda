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
                    <p class="text-center">Selecciona una opción de abajo para administrar!</p>
                </div>

                {{-- botones de opciones a menu del admin --}}
                <ul class="nav nav-tabs justify-content-center">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="/productos/admin">Productos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/mensajes/admin">
                        Mensajes
                            <span class="text-white position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                              99+
                            </span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>
@endsection
