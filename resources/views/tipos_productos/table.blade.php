<div class="table-responsive-sm">
    <table class="table table-striped" id="tiposProductos-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $c=1?>
        @foreach($tiposProductos as $tiposProducto)
            <tr>
                 <td>{{$c++}}</td>
                <td>{{ $tiposProducto->tip_descripcion }}</td>
            @if($tiposProducto->tip_estado==1)
        <td>Activo</td>
        @else
        <td>Inactivo</td>
        @endif
        <td>
                <td>
                    {!! Form::open(['route' => ['tiposProductos.destroy', $tiposProducto->tip_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tiposProductos.show', [$tiposProducto->tip_id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('tiposProductos.edit', [$tiposProducto->tip_id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Está seguro de eliminar?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>