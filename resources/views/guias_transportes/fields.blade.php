<div class="row">
<!-- Cli Id Field -->
<div class="form-group col-sm-4">
    {!! Form::label('cli_id', 'Cliente:') !!}
    {!! Form::select('cli_id',$clientes, null, ['class' => 'form-control']) !!}
</div>

<!-- Per Id Field -->
<!-- <div class="form-group col-sm-4" hidden>
    {!! Form::label('per_id', 'Encargado:') !!}
    {!! Form::number('per_id',Auth::user()->per_id, ['class' => 'form-control']) !!}
</div> -->

<!-- Chofer Id Field -->
<div class="form-group col-sm-4">
    {!! Form::label('chofer_id', 'Chofer:') !!}
    {!! Form::select('chofer_id',$choferes,null, ['class' => 'form-control']) !!}
</div>

<!-- Tra Id Field -->
<div class="form-group col-sm-4">
    {!! Form::label('tra_id', 'Trailer:') !!}
    {!! Form::select('tra_id',$trailers, null, ['class' => 'form-control']) !!}
</div>
</div>

<div class="row">
<!-- Pro Id Field -->
<div class="form-group col-sm-4">
    {!! Form::label('tip_id', 'Tipo producto:') !!}
    {!! Form::select('tip_id',$tiproductos, null, ['class' => 'form-control']) !!}
</div>

<!-- Cg Fecha Field -->
<div class="form-group col-sm-4">
    {!! Form::label('cg_fecha', 'Fecha:') !!}
    {!! Form::date('cg_fecha', null, ['class' => 'form-control','id'=>'cg_fecha']) !!}
</div>

<!-- Cg Numero Guia Field -->
<div class="form-group col-sm-4">
    {!! Form::label('cg_numero_guia', 'Guía N°:') !!}
    {!! Form::text('cg_numero_guia',$cgNo, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>
</div>

<div class="row">
<!-- Cg Origen Field -->
<div class="form-group col-sm-4">
    {!! Form::label('cg_origen', 'Origen:') !!}
    {!! Form::text('cg_origen', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200]) !!}
</div>

<!-- Cg Destino Field -->
<div class="form-group col-sm-4">
    {!! Form::label('cg_destino', 'Destino:') !!}
    {!! Form::text('cg_destino', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200]) !!}
</div>

<!-- Cg Observaciones Field -->
<div class="form-group col-sm-4">
    {!! Form::label('cg_observaciones', 'Observaciones:') !!}
    {!! Form::text('cg_observaciones', null, ['class' => 'form-control','maxlength' => 600,'maxlength' => 600]) !!}
</div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('guiasTransportes.index') }}" class="btn btn-danger pull-right">Cancelar</a>
</div>
