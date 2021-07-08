@extends('layouts.layout')

@section('contacto')
    <div class="container productos">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center m-4">Envianos un Mensaje</h2>
            </div>
            
            @if (session('mensaje'))
                <div class="alert col-12 m-2 alert-success alert-dismissible text-center fade show" role="alert">
                    {{ session('mensaje') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="mt-5 d-flex justify-content-center">
                <form class="form-nuevo-msg shadow" action="/mensajes" method="POST">
                  @csrf
                    <div class="row mb-3">
                      <label for="inputNombre" class="col-12 col-form-label">Nombre</label>
                      <div class="col-12">
                        <input required type="text" name="nombre" class="form-control" id="inputNombre">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputCorreo" class="col-12 col-form-label">Correo</label>
                      <div class="col-12">
                        <input required type="email" name="correo" class="form-control" id="inputCorreo">
                      </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputMensaje" class="col-12 col-form-label">Mensaje</label>
                        <div class="col-12">
                          <textarea required type="mensaje" name="mensaje" class="form-control" id="inputMensaje"></textarea>
                        </div>
                      </div>
                    <div class="row mb-3">
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-light">Enviar</button>
                    </div>
                    </div> 
                </form>
            </div>
        </div>
    </div>
@endsection