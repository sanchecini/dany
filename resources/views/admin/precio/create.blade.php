@extends('layouts.admin')
@section('title','Registrar precios')
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
            Registro de clientes
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('clientes.index')}}">Precios</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro de precios</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de precios</h4>
                    </div>
                    {!! Form::open(['route'=>'precios.store', 'method'=>'POST','files' => true]) !!}
                    
                   
                    @include('admin.precio._form')
                   

                     <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                     <a href="{{route('precios.index')}}" class="btn btn-light">
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
{!! Html::script('panel/js/data-table.js') !!}
@endsection