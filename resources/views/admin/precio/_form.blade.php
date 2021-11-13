


<div class="form-row">
    <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::select('cliente_id', $clientes, $cliente->producto_id, ['class' => 'form-control' . ($errors->has('producto_id') ? ' is-invalid' : ''), 'placeholder' => 'Cliente']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>


    
    <div class="form-group col-md-6">
        <div class="form-group">
            <label for="name">Precio</label>
            <input type="text" class="form-control" name="precio" id="precio" aria-describedby="helpId" required>
        </div>
    </div>

    </div>

