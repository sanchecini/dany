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
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title"> <strong> Cliente:</strong> {{$cliente->cliente}}</h4>
                    </div>
                    {!! Form::open(['route'=>'precios.store', 'method'=>'POST','files' => true]) !!}

                            <div class="form-group">
                                
                                {{ Form::hidden('cliente_id', $cliente->id, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                                
                            </div>
                            

                    <div class="form-group">
                        {{ Form::label('Producto') }}
                        {{ Form::select('producto_id', $productos, $cliente->producto_id, ['class' => 'form-control' . ($errors->has('producto_id') ? ' is-invalid' : '')]) }}
                        {!! $errors->first('producto_id', '<div class="invalid-feedback">:message</p>') !!}
                    </div>  

                    <div class="form-group col-md-6">
                        <div class="form-group">
                            <label for="name">Precio</label>
                            <input type="text" class="form-control" name="precio" id="precio" aria-describedby="helpId" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Registrar</button>
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
    
@foreach ($precios as $precio)
                                @foreach($array as $usuario)
                                <a href="{{asset('panel/images/logo/.$usuario')}}" data-lightbox="imagen_8">
<img src="{{asset('panel/images/logo/'.$usuario)}}" alt="Icono producto">
</a>
    <h1>{{$precio->producto}}</h1>
                                      
    <h2>$ {{$precio->precio}}</h2>
    <h2>{{$precio->cliente}}</h2>
                                                 
                        


                                       
                                 
                                @endforeach
                                @endforeach
                                           
        
     
@endsection
@section('scripts')
{!! Html::script('panel/js/data-table.js') !!}

<script>
    document.getElementById("select").value = "1";
</script>   
@endsection
