<div class="table-responsive-sm">
    <table class="table table-striped" id="empresas-table">
        <thead>
            <tr>
                <th>#</th>
                <th>RUC</th>
        <th>Razón social</th>
        <th>Representante legal</th>
        <th>Teléfono</th>
        <th>Dirección</th>
        <th>Correo</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
             <?php $c=1?>
        @foreach($empresas as $empresa)
            <tr>
                 <td>{{$c++}}</td>
                <td>{{ $empresa->emp_ruc }}</td>
            <td>{{ $empresa->emp_razon_social }}</td>
            <td>{{ $empresa->emp_rep_legal }}</td>
            <td>{{ $empresa->emp_telefono }}</td>
            <td>{{ $empresa->emp_direccion }}</td>
            <td>{{ $empresa->emp_correo }}</td>
                <td>
                    {!! Form::open(['route' => ['empresas.destroy', $empresa->emp_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('empresas.show', [$empresa->emp_id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('empresas.edit', [$empresa->emp_id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Está seguro de eliminar?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>