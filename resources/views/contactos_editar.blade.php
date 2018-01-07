@extends('container')

@section('content')
<h1>EDITAR CONTACTO</h1>

<form action="{{url('contactos/'.$contacto->id)}} " method="POST" role="form">
    {{csrf_field()}}
    {{method_field('PUT')}}

    <div class="form-group">
        <label for="">nombre</label>
        <input type="text" name="nombre" class="form-control" required value="{{$contacto->nombre}}">
    </div>
    <div class="form-group">
        <label for="">paterno</label>
        <input type="text" name="paterno" class="form-control" required value="{{$contacto->paterno}}">
    </div>
    <div class="form-group">
        <label for="">materno</label>
        <input type="text" name="materno" class="form-control" required value="{{$contacto->materno}}">
    </div>
    <div class="form-group">
        <label for="">cargo</label>
        <input type="text" name="cargo" class="form-control" required value="{{$contacto->cargo}}">
    </div>
    <div class="form-group">
        <label for="">correo</label>
        <input type="text" name="correo" class="form-control" required value="{{$contacto->correo}}">
    </div>
    <div class="form-group">
        <label for="">oficina</label>
        <input type="text" name="oficina" class="form-control" required value="{{$contacto->oficina}}">
    </div>
    <div class="form-group">
        <label for="">telefono</label>
        <input type="number" name="telefono" class="form-control" required value="{{$contacto->telefono}}">
    </div>
    <div class="form-group">
        <label for="">celular</label>
        <input type="number" name="celular" class="form-control" required value="{{$contacto->celular}}">
    </div>
    <div class="form-group">
        <label for="">ip</label>
        <input type="number" name="ip" class="form-control" required value="{{$contacto->ip}}">
    </div>
    <!-- ip -->

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection