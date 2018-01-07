
<form action="{{url('contactos')}} " method="POST" role="form">
    {{csrf_field()}}

    <div class="form-group">
        <label for="">nombre</label>
        <input type="text" name="nombre" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="">paterno</label>
        <input type="text" name="paterno" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="">materno</label>
        <input type="text" name="materno" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="">cargo</label>
        <input type="text" name="cargo" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="">correo</label>
        <input type="text" name="correo" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="">oficina</label>
        <input type="text" name="oficina" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="">telefono</label>
        <input type="number" name="telefono" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="">celular</label>
        <input type="number" name="celular" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="">ip</label>
        <input type="number" name="ip" class="form-control" required>
    </div>
    <!-- ip -->

    <button type="submit" class="btn btn-primary">Crear</button>
</form>
