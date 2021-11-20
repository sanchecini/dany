@extends('layouts.admin')
@section('title','Gestión de clientes')
@section('styles')
<style type="text/css">
    .unstyled-button {
        border: none;
        padding: 0;
        background: none;
      }
</style>

@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Clientes
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Clientes</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Clientes</h4>
                        {{--  <i class="fas fa-ellipsis-v"></i>  --}}
                        <div class="btn-group">
                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="{{route('clientes.create')}}" class="dropdown-item">Agregar</a>
                              {{--  <button class="dropdown-item" type="button">Another action</button>
                              <button class="dropdown-item" type="button">Something else here</button>  --}}
                            </div>
                          </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Dirección</th>
                                    <th>Municipio</th>
                                    <th>Telefono</th>
                                    <th>Whatsapp</th>

                                   
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $cliente)
                                <tr>
                                    <th scope="row">{{$cliente->id}}</th>
                                    <td>
                                        <a href="{{route('clientes.show',$cliente)}}">{{$cliente->cliente}}</a>
                                    </td>
                                    <td>{{$cliente->direccion}}</td>
                                    <td>{{$cliente->municipio}}</td>
                                    <td>{{$cliente->telefono}}</td>
                                    <td>{{$cliente->whatsapp}}</td>

                                    <td style="width: 50px;">
                                        {!! Form::open(['route'=>['clientes.destroy',$cliente], 'method'=>'DELETE']) !!}

                                        <a class="jsgrid-button jsgrid-edit-button" href="{{route('clientes.edit', $cliente)}}" title="Editar">
                                            <i class="far fa-edit"></i>
                                        </a>

                                        <a class="jsgrid-button jsgrid-edit-button" href="{{route('precios.agregar', $cliente)}}" title="Precios">
                                        <i class="fas fa-address-book"></i>
                                        </a>
                                        
                                        <button class="jsgrid-button jsgrid-delete-button unstyled-button" type="submit" title="Eliminar">
                                            <i class="far fa-trash-alt"></i>
                                        </button>

                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

            
                @foreach($array as $usuario)
                <p>{{$usuario}}</p>
                <a href="{{asset('panel/images/logo/.$usuario')}}" data-lightbox="imagen_8">
<img src="{{asset('panel/images/logo/'.$usuario)}}" alt="Icono producto">
</a>
            @endforeach  
            
           

                </div>
                {{--  <div class="card-footer text-muted">
                    {{$clientes->render()}}
                    
                </div>  --}}
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{!! Html::script('panel/js/data-table.js') !!}
@endsection
