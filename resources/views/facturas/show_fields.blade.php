<!-- Emp Id Field -->
<div class="form-group">
    {!! Form::label('emp_id', 'Empresa:') !!}
    <p>{{ $facturas->emp_id }}</p>
</div>

<!-- Cli Id Field -->
<div class="form-group">
    {!! Form::label('cli_id', 'Cliente:') !!}
    <p>{{ $facturas->cli_id }}</p>
</div>

<!-- Cg Id Field -->
<div class="form-group">
    {!! Form::label('cg_id', 'Guía N°:') !!}
    <p>{{ $facturas->cg_id }}</p>
</div>

<!-- Fac Numero Field -->
<div class="form-group">
    {!! Form::label('fac_numero', 'Factura N°:') !!}
    <p>{{ $facturas->fac_numero }}</p>
</div>

<!-- Fac Fecha Field -->
<div class="form-group">
    {!! Form::label('fac_fecha', 'Fecha:') !!}
    <p>{{ $facturas->fac_fecha }}</p>
</div>


