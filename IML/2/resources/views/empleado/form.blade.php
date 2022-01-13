<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('empleadoID') }}
            {{ Form::text('empleadoID', $empleado->empleadoID, ['class' => 'form-control' . ($errors->has('empleadoID') ? ' is-invalid' : ''), 'placeholder' => 'Empleadoid']) }}
            {!! $errors->first('empleadoID', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('departamentoID') }}
            {{ Form::text('departamentoID', $empleado->departamentoID, ['class' => 'form-control' . ($errors->has('departamentoID') ? ' is-invalid' : ''), 'placeholder' => 'Departamentoid']) }}
            {!! $errors->first('departamentoID', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $empleado->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('salario') }}
            {{ Form::text('salario', $empleado->salario, ['class' => 'form-control' . ($errors->has('salario') ? ' is-invalid' : ''), 'placeholder' => 'Salario']) }}
            {!! $errors->first('salario', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>