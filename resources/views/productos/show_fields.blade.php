<!-- Tip Id Field -->
<div class="form-group">
    {!! Form::label('tip_id', 'Tipo producto:') !!}
    <p>{{ $productos->tip_id }}</p>
</div>

<!-- Pro Descripcion Field -->
<div class="form-group">
    {!! Form::label('pro_descripcion', 'Descripción:') !!}
    <p>{{ $productos->pro_descripcion }}</p>
</div>

<!-- Pro Observaciones Field -->
<div class="form-group">
    {!! Form::label('pro_observaciones', 'Observaciones:') !!}
    <p>{{ $productos->pro_observaciones }}</p>
</div>

