@extends('logreg')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-primary">
                <div class="panel-heading"><h1 class="panel-title">Pacientes Registrados</h1></div>

                <div class="panel-body">
        
            
                @if($data) 
                <table id="" class="table-striped" cellspacing="0" width="100%">
                    
                    <thead >
                        <tr class="">
                               <th>Id</th>
                               <th>Nombre</th>
                               <th>Dirección</th>
                               <th>Teléfono fijo</th>
                               <th>Teléfono celular</th>
                               <th>Correo Electrónico</th>
                               <th>Opciones</th>
                        </tr>
                    </thead>
                      <tbody>
                    
                    @foreach($data as $row)
                        <tr>
                            <td>{{ $row->Id_Pac}}</td>
                            <td>{{ $row->Nombre}}</td>
                            <td>{{ $row->Direccion}}</td>
                            <td>{{ $row->Tel_Fijo}}</td>
                            <td>{{ $row->Tel_Cel}}</td>
                            <td>{{ $row->E_mail}}</td>
                            <td>
                    <div class="col-md-10">
                    <a class="btn btn-primary" href="{{route('mstr.show', $row->Id_Pac)}}" method="post">Mostrar</a>
                    </div>

                    <form action="{{route('mstr.destroy', $row->Id_Pac)}}" method="POST">

                        <input name="_method" type="hidden" value="DELETE">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </td>
        </tr>
                    </tbody>
                    @endforeach
                </table>
                @endif
                <br>
                
                <div class="pagination"> {{ $data->links() }} </div>
               
                <div class="col-md-10">
                    <a class="btn btn-success" href="{{ url('/menuinicio') }}">Regresar</a>
                    </div>
                        </div>
        
                
    </div>
            </div>
        </div>
    </div>
</div>
@endsection       