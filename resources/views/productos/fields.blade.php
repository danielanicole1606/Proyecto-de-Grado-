<div class="row"><!-- Tip Id Field -->
<div class="form-group col-sm-4">
    {!! Form::label('tip_id', 'Tipo producto:') !!}
    {!! Form::select('tip_id',$tiproductos, null, ['class' => 'form-control']) !!}
</div>

<!-- Pro Descripcion Field -->
<div class="form-group col-sm-4">
    {!! Form::label('pro_descripcion', 'Descripción:') !!}
    {!! Form::text('pro_descripcion', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200]) !!}
</div>
</div>

<div class="row">
<!-- Pro Observaciones Field -->
<div class="form-group col-sm-4">
    {!! Form::label('pro_observaciones', 'Observaciones:') !!}
    {!! Form::text('pro_observaciones', null, ['class' => 'form-control','maxlength' => 150,'maxlength' => 150]) !!}
</div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('productos.index') }}" class="btn btn-danger pull-right">Cancelar</a>
</div>
