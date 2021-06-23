<!-- Cli Id Field -->
<div class="form-group">
    {!! Form::label('cli_id', 'Cliente:') !!}
    <p>{{ $guiasTransporte->cli_id }}</p>
</div>

<!-- Per Id Field -->
<div class="form-group">
    {!! Form::label('per_id', 'Encargado:') !!}
    <p>{{ $guiasTransporte->per_id }}</p>
</div>

<!-- Chofer Id Field -->
<div class="form-group">
    {!! Form::label('chofer_id', 'Chofer:') !!}
    <p>{{ $guiasTransporte->chofer_id }}</p>
</div>

<!-- Tra Id Field -->
<div class="form-group">
    {!! Form::label('tra_id', 'Trailer:') !!}
    <p>{{ $guiasTransporte->tra_id }}</p>
</div>

<!-- Pro Id Field -->
<div class="form-group">
    {!! Form::label('tip_id', 'Tipo producto:') !!}
    <p>{{ $guiasTransporte->tip_id }}</p>
</div>

<!-- Cg Fecha Field -->
<div class="form-group">
    {!! Form::label('cg_fecha', 'Fecha:') !!}
    <p>{{ $guiasTransporte->cg_fecha }}</p>
</div>

<!-- Cg Numero Guia Field -->
<div class="form-group">
    {!! Form::label('cg_numero_guia', 'Guía N°:') !!}
    <p>{{ $guiasTransporte->cg_numero_guia }}</p>
</div>

<!-- Cg Origen Field -->
<div class="form-group">
    {!! Form::label('cg_origen', 'Origen:') !!}
    <p>{{ $guiasTransporte->cg_origen }}</p>
</div>

<!-- Cg Destino Field -->
<div class="form-group">
    {!! Form::label('cg_destino', 'Destino:') !!}
    <p>{{ $guiasTransporte->cg_destino }}</p>
</div>

<!-- Cg Observaciones Field -->
<div class="form-group">
    {!! Form::label('cg_observaciones', 'Observaciones:') !!}
    <p>{{ $guiasTransporte->cg_observaciones }}</p>
</div>

<!-- Cg Estado Field -->
<div class="form-group">
    {!! Form::label('cg_estado', 'Estado:') !!}
    <p>{{ $guiasTransporte->cg_estado }}</p>
</div>
