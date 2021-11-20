@extends('layouts.admin')
@section('title','Gestión de precios')
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
            Precios
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Precios</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Precios</h4>
                        {{--  <i class="fas fa-ellipsis-v"></i>  --}}
                        <div class="btn-group">
                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="{{route('precios.create')}}" class="dropdown-item">Agregar</a>
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
                              

                       
                </div>



                {{--  <div class="card-footer text-muted">
                    {{$precios->render()}}
                </div>  --}}
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{!! Html::script('panel/js/data-table.js') !!}
@endsection
