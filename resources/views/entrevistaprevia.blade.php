@extends('logreg')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><h1 class="panel-title">Registro de Paciente</h1></div>

                <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/mstr') }}">
                        {{ csrf_field() }}

                <div class="form-group{{ $errors->has('entre') ? ' has-error' : '' }}">
                            <label for="entre" class="col-md-4 control-label">Entrevistador</label>

                            <div class="col-md-6">
                                <input id="entre" type="text" class="form-control" name="entre" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('entre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('entre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  

                <div class="form-group{{ $errors->has('lugar') ? ' has-error' : '' }}">
                            <label for="lugar" class="col-md-4 control-label">Lugar</label>

                            <div class="col-md-6">
                                <input id="lugar" type="text" class="form-control" name="lugar" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('lugar'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lugar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  

                <div class="form-group{{ $errors->has('fecha') ? ' has-error' : '' }}">
                            <label for="fechaa" class="col-md-4 control-label">Fecha</label>

                            <div class="col-md-6">
                                <input id="fechaa" type="date" class="form-control" name="fechaa" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('fechaa'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fechaa') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                
                <div class="form-group{{ $errors->has('firma') ? ' has-error' : '' }}">
                            <label for="firma" class="col-md-4 control-label">Firma </label>

                            <div class="col-md-6">
                                <input id="firma" type="checkbox" class="form-control" name="firma" value="1" required autofocus>

                                @if ($errors->has('firma'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firma') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                <div class="form-group{{ $errors->has('obser') ? ' has-error' : '' }}">
                            <label for="obser" class="col-md-4 control-label">Observaciones </label>

                            <div class="col-md-6">
                                <textarea id="obser"  rows="5" class="form-control" name="obser" value="{{ old('name') }}" required autofocus></textarea>

                                @if ($errors->has('obser'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('obser') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                <div class="clickable panel-heading" data-toggle="collapse" id="5" data-target=".5collapsed"><h4>Datos Personales</h4></div>
                    

                        <div class="collapse out budgets 5collapsed form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="collapse out budgets 5collapsed form-group{{ $errors->has('fecha') ? ' has-error' : '' }}">
                            <label for="fecha" class="col-md-4 control-label">Fecha de Nacimiento</label>

                            <div class="col-md-6">
                                <input id="fecha" type="date" class="form-control" name="fecha" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('fecha'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fecha') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="collapse out budgets 5collapsed form-group{{ $errors->has('lunat') ? ' has-error' : '' }}">
                            <label for="lunat" class="col-md-4 control-label">Lugar de Nacimiento</label>

                            <div class="col-md-6">
                                <input id="lunat" type="text" class="form-control" name="lunat" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('lunat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lunat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="collapse out budgets 5collapsed form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                            <label for="direccion" class="col-md-4 control-label">Dirección</label>

                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control" name="direccion" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="collapse out budgets 5collapsed form-group{{ $errors->has('telfijo') ? ' has-error' : '' }}">
                            <label for="telfijo" class="col-md-4 control-label">Teléfono Fijo</label>

                            <div class="col-md-6">
                                <input id="telfijo" type="text" class="form-control" name="telfijo" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('telfijo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telfijo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="collapse out budgets 5collapsed form-group{{ $errors->has('telcel') ? ' has-error' : '' }}">
                            <label for="telcel" class="col-md-4 control-label">Teléfono Celular</label>

                            <div class="col-md-6">
                                <input id="telcel" type="text" class="form-control" name="telcel" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('telcel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telcel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="collapse out budgets 5collapsed form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo Electrónico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="collapse out budgets 5collapsed form-group{{ $errors->has('estcivil') ? ' has-error' : '' }}">
                            <label for="estcivil" class="col-md-4 control-label">Estado Civil</label>

                            <div class="col-md-6">
                            <input  type="radio" name="estcivil" value="soltero">Soltero/a</label>
                            <br>
                            <input  type="radio" name="estcivil" value="casado">Casado/a</label>
                            <br>
                            <input  type="radio" name="estcivil" value="Divorciado">Divorciado/a</label>
                            <br>
                            <input  type="radio" name="estcivil" value="Viudo">Viudo/a</label>
                            

                                @if ($errors->has('estcivil'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('estcivil') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="collapse out budgets 5collapsed form-group{{ $errors->has('edad') ? ' has-error' : '' }}">
                            <label for="edad" class="col-md-4 control-label">Edad</label>

                            <div class="col-md-6">
                                <input id="edad" type="number" class="form-control" name="edad" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('edad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('edad') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="collapse out budgets 5collapsed form-group{{ $errors->has('escol') ? ' has-error' : '' }}">
                            <label for="escol" class="col-md-4 control-label">Escolaridad</label>

                            <div class="col-md-6">
                                <input id="escol" type="text" class="form-control" name="escol" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('escol'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('escol') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="collapse out budgets 5collapsed form-group{{ $errors->has('ocup') ? ' has-error' : '' }}">
                            <label for="ocup" class="col-md-4 control-label">Ocupación</label>

                            <div class="col-md-6">
                                <input id="ocup" type="textarea" class="form-control" name="ocup" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('ocup'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ocup') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="collapse out budgets 5collapsed form-group{{ $errors->has('convive') ? ' has-error' : '' }}">
                            <label for="convive" class="col-md-4 control-label">¿Con quien vive?</label>

                            <div class="col-md-6">
                                <input id="convive" type="text" class="form-control" name="convive" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('convive'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('convive') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="collapse out budgets 5collapsed form-group{{ $errors->has('vivienda') ? ' has-error' : '' }}">
                            <label for="vivienda" class="col-md-4 control-label">Vivienda</label>

                            <div class="col-md-6">
                                <input id="vivienda" type="text" class="form-control" name="vivienda" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('vivienda'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('vivienda') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="collapse out budgets 5collapsed form-group{{ $errors->has('ingmen') ? ' has-error' : '' }}">
                            <label for="ingmen" class="col-md-4 control-label">Ingreso Mensual</label>

                            <div class="col-md-6">
                                <input id="ingmen" type="text" class="form-control" name="ingmen" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('ingmen'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ingmen') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="collapse out budgets 5collapsed form-group{{ $errors->has('conyuge') ? ' has-error' : '' }}">
                            <label for="conyuge" class="col-md-4 control-label">Nombre del Conyuge</label>

                            <div class="col-md-6">
                                <input id="conyuge" type="text" class="form-control" name="conyuge" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('conyuge'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('conyuge') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="collapse out budgets 5collapsed form-group{{ $errors->has('nhijos') ? ' has-error' : '' }}">
                            <label for="nhijos" class="col-md-4 control-label">Nombre de los Hijos</label>

                            <div class="col-md-6">
                                <input id="nhijos" type="textarea" class="form-control" name="nhijos" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('nhijos'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nhijos') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 

                        <div class="collapse out budgets 5collapsed form-group{{ $errors->has('nvisitas') ? ' has-error' : '' }}">
                            <label for="nvisitas" class="col-md-4 control-label">Nombre de Visitas Personales y Frecuencia</label>

                            <div class="col-md-6">
                                <input id="nvisitas" type="text" class="form-control" name="nvisitas" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('nvisitas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nvisitas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="collapse out budgets 5collapsed form-group{{ $errors->has('ejaero') ? ' has-error' : '' }}">
                            <label for="ejaero" class="col-md-4 control-label">Ejercicios Aeróbicos</label>

                            <div class="col-md-6">
                                <input id="ejaero" type="text" class="form-control" name="ejaero" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('ejaero'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ejaero') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                   


                <div class="clickable panel-heading" data-toggle="collapse" id="6" data-target=".6collapsed"><h4>Historia Clínica</h4></div>
                
                    

                        <div class="collapse out budgets 6collapsed form-group{{ $errors->has('enferm') ? ' has-error' : '' }}">
                            <label for="enferm" class="col-md-4 control-label">Enfermedades</label>

                            <div class="col-md-6">
                                <input id="enferm" type="text" class="form-control" name="enferm" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('enferm'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('enferm') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="collapse out budgets 6collapsed form-group{{ $errors->has('control') ? ' has-error' : '' }}">
                            <label for="control" class="col-md-4 control-label">¿Estan Controladas?</label>

                            <div class="col-md-6">
                            <input  type="radio" name="control" value="Si">Si</label>
                            <br>
                            <input  type="radio" name="control" value="No">No</label>
                            
                                @if ($errors->has('control'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('control') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                       

                        <div class="collapse out budgets 6collapsed form-group{{ $errors->has('medicacion') ? ' has-error' : '' }}">
                            <label for="medicacion" class="col-md-4 control-label">¿Esta Bajo Medicación?</label>

                            <div class="col-md-6">
                               

                                <input  type="radio" name="medicacion" value="Si">Si</label>
                            <br>
                            <input  type="radio" name="medicacion" value="No">No</label>

                                @if ($errors->has('medicacion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('medicacion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="collapse out budgets 6collapsed form-group{{ $errors->has('medicamento') ? ' has-error' : '' }}">
                            <label for="medicamento" class="col-md-4 control-label">Medicamentos</label>

                            <div class="col-md-6">
                                <input id="medicamento" type="text" class="form-control" name="medicamento" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('medicamento'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('medicamento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="collapse out budgets 6collapsed form-group{{ $errors->has('dieta') ? ' has-error' : '' }}">
                            <label for="dieta" class="col-md-4 control-label">Dieta Normal</label>

                            <div class="col-md-6">
                                <input id="dieta" type="text" class="form-control" name="dieta" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('dieta'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dieta') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="collapse out budgets 6collapsed form-group{{ $errors->has('altsueno') ? ' has-error' : '' }}">
                            <label for="altsueno" class="col-md-4 control-label">Alteraciones en el Sueño</label>

                            <div class="col-md-6">
                                <input id="altsueno" type="text" class="form-control" name="altsueno" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('altsueno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('altsueno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="collapse out budgets 6collapsed form-group{{ $errors->has('triste') ? ' has-error' : '' }}">
                            <label for="triste" class="col-md-4 control-label">¿Entristece con Facilidad?</label>

                            <div class="col-md-6">
                                <input  type="radio" name="triste" value="Si">Si</label>
                            <br>
                            <input  type="radio" name="triste" value="No">No</label>
                                @if ($errors->has('triste'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('triste') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="collapse out budgets 6collapsed form-group{{ $errors->has('claustro') ? ' has-error' : '' }}">
                            <label for="claustro" class="col-md-4 control-label">¿Miedo o Ansiedad a Lugares Cerrados?</label>

                            <div class="col-md-6">
                              <input  type="radio" name="claustro" value="Si">Si</label>
                            <br>
                            <input  type="radio" name="claustro" value="No">No</label>

                                @if ($errors->has('claustro'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('claustro') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="clickable panel-heading" data-toggle="collapse" id="7" data-target=".7collapsed"><h4>Antecedentes Familiares</h4></div>


                        <div class="collapse out budgets 7collapsed form-group{{ $errors->has('anemia') ? ' has-error' : '' }}">
                            <label for="anemia" class="col-md-4 control-label">Anemia</label>

                            <div class="col-md-6">
                                <input id="anemia" type="text" class="form-control" name="anemia" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('anemia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('anemia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="collapse out budgets 7collapsed form-group{{ $errors->has('diabetes') ? ' has-error' : '' }}">
                            <label for="diabetes" class="col-md-4 control-label">Diabetes</label>

                            <div class="col-md-6">
                                <input id="diabetes" type="text" class="form-control" name="diabetes" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('diabetes'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('diabetes') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="collapse out budgets 7collapsed form-group{{ $errors->has('hipercol') ? ' has-error' : '' }}">
                            <label for="hipercol" class="col-md-4 control-label">Hipercolesterolemia</label>

                            <div class="col-md-6">
                                <input id="hipercol" type="text" class="form-control" name="hipercol" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('hipercol'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hipercol') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="collapse out budgets 7collapsed form-group{{ $errors->has('hipertension') ? ' has-error' : '' }}">
                            <label for="hipertension" class="col-md-4 control-label">Hipertensión</label>

                            <div class="col-md-6">
                                <input id="hipertension" type="text" class="form-control" name="hipertension" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('hipertension'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hipertension') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="collapse out budgets 7collapsed form-group{{ $errors->has('hipertiro') ? ' has-error' : '' }}">
                            <label for="hipertiro" class="col-md-4 control-label">Hipertiroidismo</label>

                            <div class="col-md-6">
                                <input id="hipertiro" type="text" class="form-control" name="hipertiro" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('hipertiro'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hipertiro') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="collapse out budgets 7collapsed form-group{{ $errors->has('depend') ? ' has-error' : '' }}">
                            <label for="depend" class="col-md-4 control-label">¿Dependencia a alguna Sustancia?</label>

                            <div class="col-md-6">
                                <input id="depend" type="text" class="form-control" name="depend" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('depend'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dependS') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="collapse out budgets 7collapsed form-group{{ $errors->has('demencia') ? ' has-error' : '' }}">
                            <label for="demencia" class="col-md-4 control-label">¿Demencia o Deterioro Cognitivo?</label>

                            <div class="col-md-6">
                                <input id="demencia" type="text" class="form-control" name="demencia" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('demencia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('demencia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-primary">
                                    Enviar
                                </button>
                                
                                
                               
                            
                            
                            <div class="col-sm-8 col-md-8">
                    <a class="btn btn-success" href="{{ url('/menuinicio') }}">Regresar</a>
                    </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
