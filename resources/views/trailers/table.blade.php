<div class="table-responsive-sm">
    <table class="table table-striped" id="trailers-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Placa</th>
        <th>Modelo</th>
        <th>Color</th>
        <th>Año</th>
        <th>Estado</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $c=1?>
        @foreach($trailers as $trailers)
            <tr>
                <td>{{$c++}}</td>
                <td>{{ $trailers->tra_placa }}</td>
            <td>{{ $trailers->tra_modelo }}</td>
            <td>{{ $trailers->tra_color }}</td>
            <td>{{ $trailers->tra_año }}</td>
             @if($trailers->tra_estado==1)
        <td>Activo</td>
        @else
        <td>Inactivo</td>
        @endif
        <td>
                <td>
                    {!! Form::open(['route' => ['trailers.destroy', $trailers->tra_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('trailers.show', [$trailers->tra_id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('trailers.edit', [$trailers->tra_id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Está seguro de eliminar?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>