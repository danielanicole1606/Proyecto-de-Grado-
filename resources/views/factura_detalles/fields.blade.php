<!-- Fac Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fac_id', 'Fac Id:') !!}
    {!! Form::number('fac_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Pro Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pro_id', 'Pro Id:') !!}
    {!! Form::number('pro_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Det Cant Field -->
<div class="form-group col-sm-6">
    {!! Form::label('det_cant', 'Det Cant:') !!}
    {!! Form::number('det_cant', null, ['class' => 'form-control']) !!}
</div>

<!-- Det Valu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('det_valu', 'Det Valu:') !!}
    {!! Form::number('det_valu', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('facturaDetalles.index') }}" class="btn btn-secondary">Cancel</a>
</div>
