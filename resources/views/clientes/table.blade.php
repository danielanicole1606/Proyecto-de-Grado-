<div class="table-responsive-sm">
    <table class="table table-striped" id="clientes-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Cédula/RUC</th>
        <th>Nombre/Razón social</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>Estado</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
             <?php $c=1?>
        @foreach($clientes as $clientes)
            <tr>
                <td>{{$c++}}</td>
                <td>{{ $clientes->cli_ced_ruc }}</td>
            <td>{{ $clientes->cli_nom_rasocial }}</td>
            <td>{{ $clientes->cli_direccion }}</td>
            <td>{{ $clientes->cli_telefono }}</td>
            <td>{{ $clientes->cli_correo }}</td>
            @if($clientes->cli_estado==1)
        <td>Activo</td>
        @else
        <td>Inactivo</td>
        @endif
        <td>
                <td>
                    {!! Form::open(['route' => ['clientes.destroy', $clientes->cli_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('clientes.show', [$clientes->cli_id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('clientes.edit', [$clientes->cli_id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Está seguro de eliminar?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>