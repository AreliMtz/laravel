<h1>{{$modo}} Empleado</h1>

<form action="{{ url('/empleado')}}" method="post" enctype="multipart/form-data">
<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" value="{{isset($empleado) ? $empleado->Nombre : '' }}" id="Nombre">
<br>
<label for="Email">Email</label>
<input type="text" name="Email" value="{{isset($empleado) ? $empleado->Email : '' }}" id="Email"> 
<br>
<label for="Nivel">Nivel</label>
<input type="number" name="Nivel" value="{{isset($empleado) ? $empleado->Nivel : '' }}"  id="Nivel"> 
<br>
<label for="Foto">Foto</label>
@if(isset($empleado->Foto))
<img src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" alt="">
@endif
<input type="file" name="Foto" id="Foto"> 
<br>
<input type="submit" value="{{$modo}} datos">
<br>

<a href="{{url('empleado/')}}">Regresar</a>
</form>