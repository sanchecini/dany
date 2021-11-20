@extends('layouts.admin')
@section('title','Panel administrador')
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
            Panel administrador
        </h3>
    </div>

    

    
</div>
@endsection
@section('scripts')
{!! Html::script('panel/js/data-table.js') !!}
!! Html::script('panel/js/chart.js') !!}


@endsection
