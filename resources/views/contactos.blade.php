@extends('container')

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h1 class="text-center">Contactos</h1>

        <div class="form-group">
            <a class="btn btn-primary" data-toggle="modal" href='#crear'>Crear Contacto</a>
        </div>

        <form action="">
            <input type="text" name="buscar" class="form-control">
        </form>
        
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre Completo</th>
                    <th>Contacto</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contactos as $contacto)
                <tr>
                    <td>{{$contacto->id}} </td>
                    <td>
                        <p>{{strtoupper($contacto->paterno)}} {{$contacto->materno}} </p>
                        <p>{{$contacto->nombre}} </p>
                    </td>
                    <td>
                        <p><b>Cargo:</b> {{$contacto->cargo}} </p>
                    </td>
                    <td>
                        <a class="btn btn-default" href="{{url('contactos/' . $contacto->id)}}">Ver mas detalles</a>
                        @guest
                        
                        @else
                        <a class="btn btn-default" href="{{url('contactos/'.$contacto->id.'/edit')}}">Editar</a>
                        <a href="" onclick="
                            event.preventDefault();
                            if(confirm('seguro?')){
                                document.getElementById('delete_{{$contacto->id}}').submit();
                            }
                        " class="btn btn-danger">Eliminar</a>
                        <form action="{{url('contactos/'.$contacto->id)}}" method="POST" id="delete_{{$contacto->id}}">
                            {{method_field('DELETE')}}
                            {{csrf_field()}}
                        </form>    
                        @endguest
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
         
    </div>
</div>
@endsection




<div class="modal fade" id="crear">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">CONTACTO</h4>
            </div>
            <div class="modal-body">
                @include('contactos_create')
            </div>
            {{--  <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>  --}}
        </div>
    </div>
</div>
