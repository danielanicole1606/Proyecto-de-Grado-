<div class="row">
<!-- Tra Placa Field -->
<div class="form-group col-sm-4">
    {!! Form::label('tra_placa', 'Placa:') !!}
    {!! Form::text('tra_placa', null, ['class' => 'form-control','maxlength' => 8,'maxlength' => 8]) !!}
</div>

<!-- Tra Modelo Field -->
<div class="form-group col-sm-4">
    {!! Form::label('tra_modelo', 'Modelo:') !!}
    {!! Form::text('tra_modelo', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>
</div>

<div class="row">
<!-- Tra Color Field -->
<div class="form-group col-sm-4">
    {!! Form::label('tra_color', 'Color:') !!}
    {!! Form::text('tra_color', null, ['class' => 'form-control','maxlength' => 20,'maxlength' => 20]) !!}
</div>

<!-- Tra Año Field -->
<div class="form-group col-sm-4">
    {!! Form::label('tra_año', 'Año:') !!}
    {!! Form::text('tra_año', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>
</div>


<div class="row">
<!-- Tra Estado Field -->
<div class="form-group col-sm-4">
    {!! Form::label('tra_estado', 'Estado:') !!}
    {!! Form::select('tra_estado',['1'=>'Activo','0'=>'Inactivo'] ,null , ['class' => 'form-control']) !!}
</div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('trailers.index') }}" class="btn btn-danger pull-right">Cancelar</a>
</div>
