formulario index
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Titulo</th>
            <th>Descripción</th>
            <th>Foto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($fotos as $foto)
        <tr>
            <td>{{ $foto->id }}</td>
            <td>{{ $foto->Foto }}</td>
            <td>{{ $foto->Titulo }}</td>
            <td>{{ $foto->Descripcion }}</td>
            <td>Editar | </td>

            <td action="{{ url( '/foto/'.$foto->id ) }}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" onclick="return = confirm('¿Seguro que dese eliminar el registro?')" value="Borrar">
            </td>

        </tr>
        @endforeach
    </tbody>
</table>