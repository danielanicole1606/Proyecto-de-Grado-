<div class="row">
<!-- Cli Ced Ruc Field -->
<div class="form-group col-sm-4">
    {!! Form::label('cli_ced_ruc', 'Cédula/RUC:') !!}
    {!! Form::text('cli_ced_ruc', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Cli Nom Rasocial Field -->
<div class="form-group col-sm-4">
    {!! Form::label('cli_nom_rasocial', 'Nombre/Razón social:') !!}
    {!! Form::text('cli_nom_rasocial', null, ['class' => 'form-control','maxlength' => 150,'maxlength' => 150]) !!}
</div>
</div>

<div class="row">
<!-- Cli Direccion Field -->
<div class="form-group col-sm-4">
    {!! Form::label('cli_direccion', 'Dirección:') !!}
    {!! Form::text('cli_direccion', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200]) !!}
</div>

<!-- Cli Telefono Field -->
<div class="form-group col-sm-4">
    {!! Form::label('cli_telefono', 'Teléfono:') !!}
    {!! Form::text('cli_telefono', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>
</div>

<div class="row">
<!-- Cli Correo Field -->
<div class="form-group col-sm-4">
    {!! Form::label('cli_correo', 'Correo:') !!}
    {!! Form::text('cli_correo', null, ['class' => 'form-control','maxlength' => 150,'maxlength' => 150]) !!}
</div>

<!-- Cli Estado Field -->
<div class="form-group col-sm-4">
    {!! Form::label('cli_estado', 'Estado:') !!}
    {!! Form::select('cli_estado',['1'=>'Activo','0'=>'Inactivo'], null, ['class' => 'form-control']) !!}
</div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('clientes.index') }}" class="btn btn-danger pull-right">Cancelar</a>
</div>
