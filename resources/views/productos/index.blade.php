@extends('layouts.layout')

@section('productos')
  <div class="container productos">
    
      <div class="row mt-5 mb-5">
        @foreach ($productos as $producto)
          <div class="mb-4 col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow">
              <img src="{{ $producto['url_imagen'] }}" class="card-img-top">
              <div class="card-body text-center">
                <h5 class="card-title">{{ $producto['nombre'] }}</h5>
                <h5 class="card-title">L. {{ $producto['precio'] }}</h5>
                <button id="producto-{{ $producto['id'] }}" class="btn btn-primary btn-info-projects" data-bs-toggle="modal" data-bs-target="#ModalDetalleProducto">Detalles</button>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      
  </div>
@endsection