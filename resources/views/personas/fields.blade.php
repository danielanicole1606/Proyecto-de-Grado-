<!-- Per Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('per_id', 'Per Id:') !!}
    {!! Form::number('per_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Per Apellidos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('per_apellidos', 'Per Apellidos:') !!}
    {!! Form::text('per_apellidos', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Per Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('per_nombre', 'Per Nombre:') !!}
    {!! Form::text('per_nombre', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Per Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('per_telefono', 'Per Telefono:') !!}
    {!! Form::text('per_telefono', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Per Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('per_direccion', 'Per Direccion:') !!}
    {!! Form::text('per_direccion', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Per Correo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('per_correo', 'Per Correo:') !!}
    {!! Form::text('per_correo', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Per Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('per_tipo', 'Per Tipo:') !!}
    {!! Form::number('per_tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Per Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('per_estado', 'Per Estado:') !!}
    {!! Form::number('per_estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('personas.index') }}" class="btn btn-secondary">Cancel</a>
</div>
