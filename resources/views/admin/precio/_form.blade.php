


<div class="form-row">
    <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::select('cliente_id', $clientes, $precio->cliente_id, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : ''), 'id'=> 'select', 'placeholder' => 'Cliente']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::select('producto_id', $productos, $precio->producto_id, ['class' => 'form-control' . ($errors->has('producto_id') ? ' is-invalid' : ''), 'placeholder' => 'Producto']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>


</div>



<div class="form-group col-md-6">
        <div class="form-group">
            <label for="name">Precio</label>
            <input type="text" class="form-control" name="precio" id="precio" aria-describedby="helpId" required>
        </div>
    </div>

