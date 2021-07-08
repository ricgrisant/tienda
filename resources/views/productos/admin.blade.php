@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
@endsection

@section('adminProductos')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="dash-card card-header text-center">{{ __('Administar Productos') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                {{-- botones de opciones a menu del admin --}}
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
        </div>
    </div>

    <div class="row">
        <div class="col-12 m-4">
            <button type="button" class="btn btn-light float-end">Agregar Producto</button>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-body">
                    <table id="tbl-productos" class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Creado</th>
                            <th scope="col">Usuario Creador</th>
                            <th scope="col">Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                              
                              @foreach ($productos as $producto)
                                <tr>
                                    <td>{{ $producto->id }}</td>
                                    <td>{{ $producto->nombre }}</td>
                                    <td>{{ $producto->precio }}</td>
                                    <td>{{ date('m-d-Y',strtotime($producto->created_at))}}</td>
                                    <td>{{ $producto->name }}</td>
                                    <td> 
                                        <!-- Dropdown de Acciones-->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Acciones
                                            </button>
                                            <div class="dropdown-menu">
                                                <a name="{{ $producto->id }}"  class="btn-editarProducto dropdown-item" href="#">
                                                    Editar
                                                    <i class="far fa-edit fa-fw"></i>
                                                </a>
                                                <a name="{{ $producto->id }}"  class="btn-eliminarProducto dropdown-item" href="#">
                                                    Eliminar
                                                    <i class="far fa-edit fa-fw"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                              @endforeach
                          
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
    <script>
        $('#tbl-productos').DataTable( {
            fixedHeader: true,
            responsive: true,
            autoWidth : false,
            language: {
                "lengthMenu": "Mostrar _MENU_ elementos por página",
                "zeroRecords": "No se ha encontrado Información",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Sin Registros disponibles",
                "infoFiltered": "(Filtrado de _MAX_ elementos totales)",
                "sSearch": "Buscar",

                paginate: {
                    first:    '«',
                    previous: '‹',
                    next:     '›',
                    last:     '»'
                },
                aria: {
                    paginate: {
                        first:    'Primero',
                        previous: 'Anterior',
                        next:     'Siguiente',
                        last:     'Último'
                    }
                }
            }
        } );
    </script>
@endsection
