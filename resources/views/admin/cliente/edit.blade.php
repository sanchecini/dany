@extends('layouts.admin')
@section('title','Editar cliente')
@section('styles')
@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Edición de cliente
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('clientes.index')}}">clientees</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edición de clientee</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Edición de clientee</h4>
                    </div>

                    {!! Form::model($cliente,['route'=>['clientes.update',$cliente], 'method'=>'PUT','files' => true]) !!}


                    <div class="form-group">
                      <label for="name">Nombre</label>
                      <input type="text"
                        class="form-control" name="name" id="name" value="{{$cliente->name}}" aria-describedby="helpId" required>
                    </div>
                    
                   

                     <button type="submit" class="btn btn-primary mr-2">Editar</button>
                     <a href="{{route('clientes.index')}}" class="btn btn-light">
                        Cancelar
                     </a>
                     {!! Form::close() !!}
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
{!! Html::script('panel/js/dropify.js') !!}
@endsection
