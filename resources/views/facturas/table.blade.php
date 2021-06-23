<div class="table-responsive-sm">
    <table class="table table-striped" id="facturas-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Establecimiento</th>
        <th>Cliente</th>
        <th>Guía N°</th>
        <th>Factura N°</th>
        <th>Fecha Registro</th>
        <th>Total</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $c=1?>
            <?php $gtotal=0; ?>
        @foreach($facturas as $facturas)
        <?php 
        if($facturas->fac_iva==0){ //no graba iva
            $total=($facturas->subt-$facturas->fac_descuento);
        }else{ //si graba iva
        $iva=($facturas->subt-$facturas->fac_descuento)*0.12;
        $total=($facturas->subt-$facturas->fac_descuento)+$iva;
        }
        $gtotal=$gtotal+$total;
        ?>
            <tr>
                 <td>{{$c++}}</td>
           <td>{{ $facturas->emp_razon_social }}</td>
            <td>{{ $facturas->cli_nom_rasocial}}</td>
            <td>00000{{ $facturas->cg_numero_guia }}</td>
            <td>00000{{ $facturas->fac_numero }}</td>
            <td>{{ $facturas->fac_fecha }}</td>
            <td class="text-right">{{ number_format ($total,2) }} $</td>
                <td>
                    {!! Form::open(['route' => ['facturas.destroy', $facturas->fac_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('facturas.show', [$facturas->fac_id]) }}" target="_blank" class='btn btn-ghost-danger'><i class="far fa-file-pdf"></i></a>
                        <a href="{{ route('facturas.edit', [$facturas->fac_id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
        <tr>
            <th colspan="6" class="text-right">Total</th>
            <th>{{number_format ($gtotal,2) }} $</th>
        </tr>
    </table>
</div>