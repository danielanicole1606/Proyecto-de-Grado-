<div class="row">
<!-- Emp Ruc Field -->
<div class="form-group col-sm-4">
    {!! Form::label('emp_ruc', 'RUC:') !!}
    {!! Form::text('emp_ruc', null, ['class' => 'form-control','maxlength' => 15,'maxlength' => 15]) !!}
</div>

<!-- Emp Razon Social Field -->
<div class="form-group col-sm-4">
    {!! Form::label('emp_razon_social', 'Razón social:') !!}
    {!! Form::text('emp_razon_social', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>
</div>


<div class="row">
<!-- Emp Rep Legal Field -->
<div class="form-group col-sm-4">
    {!! Form::label('emp_rep_legal', 'Representante legal:') !!}
    {!! Form::text('emp_rep_legal', null, ['class' => 'form-control','maxlength' => 60,'maxlength' => 60]) !!}
</div>

<!-- Emp Telefono Field -->
<div class="form-group col-sm-4">
    {!! Form::label('emp_telefono', 'Teléfono:') !!}
    {!! Form::text('emp_telefono', null, ['class' => 'form-control','maxlength' => 60,'maxlength' => 60]) !!}
</div>
</div>

<div class="row">
<!-- Emp Direccion Field -->
<div class="form-group col-sm-4">
    {!! Form::label('emp_direccion', 'Dirección:') !!}
    {!! Form::text('emp_direccion', null, ['class' => 'form-control','maxlength' => 150,'maxlength' => 150]) !!}
</div>

<!-- Emp Correo Field -->
<div class="form-group col-sm-4">
    {!! Form::label('emp_correo', 'Correo:') !!}
    {!! Form::email('emp_correo', null, ['class' => 'form-control','maxlength' => 120,'maxlength' => 120]) !!}
</div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('empresas.index') }}" class="btn btn-danger pull-right">Cancelar</a>
</div>
