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
                <li class="breadcrumb-item"><a href="{{route('clientes.index')}}">Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edición de clientee</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Edición de precios</h4>
                    </div>

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title"> <strong> Cliente:</strong> {{$cliente->cliente}}</h4>
                    </div>

                   
                    
                    <form method="POST" action="{{ route('precios.update', $cliente->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            <div class="form-group">
                                
                                {{ Form::hidden('cliente_id', $cliente->id, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                                
                            </div>
                            

                    <div class="form-group">
                        {{ Form::label('producto_id') }}
                        {{ Form::select('producto_id', $productos, $cliente->producto_id, ['class' => 'form-control' . ($errors->has('producto_id') ? ' is-invalid' : '')]) }}
                        {!! $errors->first('producto_id', '<div class="invalid-feedback">:message</p>') !!}
                    </div>  

                    <div class="form-group col-md-6">
                        <div class="form-group">
                            <label for="name">Precio</label>
                            <input type="text" class="form-control" name="precio" id="precio" aria-describedby="helpId" required>
                        </div>
                    </div>


                   

                     <button type="submit" class="btn btn-primary mr-2">Editar</button>
                     <a href="{{route('clientes.index')}}" class="btn btn-light">
                        Cancelar
                     </a>
                     </form>
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
 
<script>
    datosProducto = document.getElementById('product_id').value.split('_');
</script>
@endsection
