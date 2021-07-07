@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <ul class="nav nav-tabs justify-content-center">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Productos</a>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn btn-dark position-relative">
                        Mensajes
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                          99+
                        </span>
                      </button>
                </li>
              </ul>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-header text-center">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
