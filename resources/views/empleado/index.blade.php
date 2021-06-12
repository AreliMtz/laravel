<h1>Hola</h1>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Nivel</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($empleados as $empleado)
        <tr>
            <td>{{$empleado->id}}</td>
            <td>{{$empleado->Foto}}
            <img src="{{ asset('storage').'/'.$empleado->Foto }}" alt="">
            </td>
            <td>{{$empleado->Nombre}}</td>
            <td>{{$empleado->Email}}</td>
            <td>{{$empleado->Nivel}}</td>
            <td>
            <a href="{{url('/empleado/'.$empleado->id.'/edit')}}">
            Editar
            </a>
             |
            <form action="{{url('/empleado/'.$empleado->id)}}" method="post">
            @csrf
            {{method_field('DELETE')}}
                <input type="submit" onclick="return confirm('¿Realmente quieres borrar?')" value="Borrar">
            </form>
             Borrar</td>
        </tr>
    @endforeach
    </tbody>
</table>