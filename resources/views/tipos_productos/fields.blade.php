<div class="row">
<!-- Tip Descripcion Field -->
<div class="form-group col-sm-4">
    {!! Form::label('tip_descripcion', 'Descripción:') !!}
    {!! Form::text('tip_descripcion', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200]) !!}
</div>

<!-- Tip Estado Field -->
<div class="form-group col-sm-4">
    {!! Form::label('tip_estado', 'Estado:') !!}
    {!! Form::select('tip_estado',['1'=>'Activo','0'=>'Inactivo'] ,null, ['class' => 'form-control']) !!}
</div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tiposProductos.index') }}" class="btn btn-danger pull-right">Cancelar</a>
</div>
