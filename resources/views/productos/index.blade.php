@extends('layouts.layout')

@section('productos')
  <div class="container productos">
      <div class="row mt-5 mb-5">
        @if (count($productos)>0)
          @foreach ($productos as $producto)
            <div class="mb-4 col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card h-100 shadow border">
                <img src="{{url("/uploads/img/productos/$producto->url_imagen ")}}" class="card-img-top">
                <div class="card-body text-center">
                  <h5 class="card-title">{{ $producto->nombre }}</h5>
                  <h5 class="card-title">L. {{ $producto->precio }}</h5>

                  {{-- Botón para activar la ventana modal la cual se encuentra en layout.blade.php --}}
                  <button type="button" data-id="{{ $producto->id }}" class="btn btn-light btn-detalleProducto" data-bs-toggle="modal" data-bs-target="#ModalDetalleProductos">
                    Ver Detalle
                  </button>
                </div>
              </div>
            </div>
          @endforeach
        @else
            <h3 class="text-center">Sin Inventario</h3>
        @endif
        
      </div>
      
  </div>
@endsection