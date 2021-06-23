<div class="row">
<div class="form-group col-sm-4">
    {!! Form::label('per_cedula', 'Cédula:') !!}
    {!! Form::text('per_cedula', null, ['class' => 'form-control','required'=>'required']) !!}
</div>
<div class="form-group col-sm-4">
    {!! Form::label('per_apellidos', 'Apellidos:') !!}
    {!! Form::text('per_apellidos', null, ['class' => 'form-control','required'=>'required']) !!}
</div>
<div class="form-group col-sm-4">
    {!! Form::label('per_nombres', 'Nombres:') !!}
    {!! Form::text('per_nombres', null, ['class' => 'form-control','required'=>'required']) !!}
</div>
</div>
<div class="row">
<div class="form-group col-sm-4">
    {!! Form::label('per_direccion', 'Dirección:') !!}
    {!! Form::text('per_direccion', null, ['class' => 'form-control','required'=>'required']) !!}
</div>
<div class="form-group col-sm-4">
    {!! Form::label('per_telefono', 'Teléfono:') !!}
    {!! Form::text('per_telefono', null, ['class' => 'form-control','required'=>'required']) !!}
</div>
<div class="form-group col-sm-4">
    {!! Form::label('per_fnacimiento', 'Fecha Nacimiento:') !!}
    {!! Form::date('per_fnacimiento', null, ['class' => 'form-control','required'=>'required']) !!}
</div>
</div>
<div class="row">
<div class="form-group col-sm-4">
    {!! Form::label('per_estado_civil', 'Estado Civil:') !!}
    {!! Form::select('per_estado_civil',
    ['Soltero'=>'Soltero',
    'Casado'=>'Casado',
    'Viudo'=>'Viudo',
    'Divorciado'=>'Divorciado',
    'Unión Libre'=>'Unión Libre'] ,null, ['class' => 'form-control','required'=>'required']) !!}
</div>
<div class="form-group col-sm-4">
    {!! Form::label('email', 'Correo:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<div class="form-group col-sm-4">
    {!! Form::label('per_sexo', 'Sexo:') !!}
    {!! Form::select('per_sexo',['Mujer'=>'Mujer','Hombre'=>'Hombre'] ,null, ['class' => 'form-control','required'=>'required']) !!}
</div>
</div>
<div class="row">
<div class="form-group col-sm-4">
    {!! Form::label('per_usuario', 'Usuario:') !!}
    {!! Form::text('per_usuario', null, ['class' => 'form-control','required'=>'required']) !!}
</div>
<div class="form-group col-sm-4">
    {!! Form::label('password', 'Contraseña:') !!}
    {!! Form::password('password',  ['class' => 'form-control','required'=>'required']) !!}
</div>
<div class="form-group col-sm-4">
    {!! Form::label('per_tipo', 'Tipo:') !!}
    {!! Form::select('per_tipo',['A'=>'Administrador','E'=>'Encargado','C'=>'Chofer'] ,null, ['class' => 'form-control','required'=>'required']) !!}
</div>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('personas.index') }}" class="btn btn-danger pull-right">Cancelar</a>
</div>
