<div class="table-responsive-sm">
    <table class="table table-striped" id="guiasTransportes-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Cliente</th>
      <!--   <th>Encargado</th> -->
        <th>Chofer</th>
        <th>Trailer</th>
        <th>Tipo producto</th>
        <th>Fecha</th>
        <th>Guía N°</th>
        <th>Origen</th>
        <th>Destino</th>
        <!-- <th>Observaciones</th>
        <th>Estado</th> -->
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
              <?php $c=1?>
        @foreach($guiasTransportes as $guiasTransporte)
            <tr>
                 <td>{{$c++}}</td>
                <td>{{ $guiasTransporte->cli_nom_rasocial }}</td>
           
            <td>{{ $guiasTransporte->name}}</td>
            <td>{{ $guiasTransporte->tra_placa }}</td>
            <td>{{ $guiasTransporte->tip_descripcion }}</td>
            <td>{{ $guiasTransporte->cg_fecha }}</td>
            <td>{{ $guiasTransporte->cg_numero_guia }}</td>
            <td>{{ $guiasTransporte->cg_origen }}</td>
            <td>{{ $guiasTransporte->cg_destino }}</td>
           <!--  <td>{{ $guiasTransporte->cg_observaciones }}</td> -->
            
                <td>
                    {!! Form::open(['route' => ['guiasTransportes.destroy', $guiasTransporte->cg_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('guiasTransportes.show', [$guiasTransporte->cg_id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('guiasTransportes.edit', [$guiasTransporte->cg_id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Está seguro de eliminar?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
