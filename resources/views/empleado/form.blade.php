<h1>{{$modo}} Empleado</h1>

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

@endif

<div class="form-group">

<form action="{{ url('/empleado')}}" method="post" enctype="multipart/form-data">
<label for="Nombre">Nombre</label>
<input type="text" class="form-control" name="Nombre" value="{{isset($empleado) ? $empleado->Nombre : old('Nombre') }}" id="Nombre">
</div>

<div class="form-group">
<label for="Email">Email</label>
<input type="text" class="form-control" name="Email" value="{{isset($empleado) ? $empleado->Email : old('Email') }}" id="Email"> 
</div>

<div class="form-group">
<label for="Nivel">Nivel</label>
<input type="number" class="form-control" name="Nivel" value="{{isset($empleado) ? $empleado->Nivel : old('Nivel') }}"  id="Nivel"> 
</div>

<div class="form-group">
<label for="Foto"></label>
@if(isset($empleado->Foto))
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" alt="">
@endif
<input type="file" class="form-control" name="Foto" id="Foto"> 
</div>

<input type="submit" class="btn btn-success" value="{{$modo}} datos">
<a class="btn btn-primary" href="{{url('empleado/')}}">Regresar</a>
<br>

</form>
