@extends('layouts.admin')
@section('title','Editar producto')
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
            Edición de producto
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('productos.index')}}">productoes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edición de productoe</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Edición de productoe</h4>
                    </div>

                    {!! Form::model($producto,['route'=>['productos.update',$producto], 'method'=>'PUT','files' => true]) !!}


                    <div class="form-group">
                      <label for="name">Nombre</label>
                      <input type="text"
                        class="form-control" name="producto" id="producto" value="{{$producto->producto}}" aria-describedby="helpId" required>
                    </div>
                    
                   

                     <button type="submit" class="btn btn-primary mr-2">Editar</button>
                     <a href="{{route('productos.index')}}" class="btn btn-light">
                        Cancelar
                     </a>
                     {!! Form::close() !!}
                </div>
                {{--  <div class="card-footer text-muted">
                    {{$productos->render()}}
                </div>  --}}
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{!! Html::script('panel/js/dropify.js') !!}
@endsection
