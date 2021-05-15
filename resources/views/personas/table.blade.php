<div class="table-responsive-sm">
    <table class="table table-striped" id="personas-table">
        <thead>
            <tr>
                <th>Per Id</th>
        <th>Per Apellidos</th>
        <th>Per Nombre</th>
        <th>Per Telefono</th>
        <th>Per Direccion</th>
        <th>Per Correo</th>
        <th>Per Tipo</th>
        <th>Per Estado</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($personas as $personas)
            <tr>
                <td>{{ $personas->per_id }}</td>
            <td>{{ $personas->per_apellidos }}</td>
            <td>{{ $personas->per_nombre }}</td>
            <td>{{ $personas->per_telefono }}</td>
            <td>{{ $personas->per_direccion }}</td>
            <td>{{ $personas->per_correo }}</td>
            <td>{{ $personas->per_tipo }}</td>
            <td>{{ $personas->per_estado }}</td>
                <td>
                    {!! Form::open(['route' => ['personas.destroy', $personas->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('personas.show', [$personas->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('personas.edit', [$personas->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>