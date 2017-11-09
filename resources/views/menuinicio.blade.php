@extends('logreg')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Bienvenido</div>
                <div class="panel-body">
                    
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">

                                 <a class="btn btn-primary"  href="{{ url('/mstr') }}">Mostrar Pacientes</a>
                                
                                <a class="btn btn-primary"  href="{{ url('/entrevistaprevia') }}">Registrar Pacientes</a>
                                
                                
                                
                               
                            
                            </div>
                        </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection