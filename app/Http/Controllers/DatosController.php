<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DatosController extends Controller
{
    public function cargardatos(Request $request){

        //Datos Personales
        $name = $request->input('name');
        $direccion = $request->input('direccion');
        $telfijo = $request->input('telfijo');
        $telcel = $request->input('telcel');
        $email = $request->input('email');

        \DB::insert('insert into Paciente (Nombre, Direccion, Tel_Fijo, Tel_Cel, 
            E_mail) values (?, ?, ?, ?, ?)', 
        [$name, $direccion, $telfijo, $telcel, $email]);

         
    	//Registro Paciente
    	$fnat = $request->input('fecha');
    	$lnat = $request->input('lunat');
    	$estcivil = $request->input('estcivil');
        $edad = $request->input('edad');
        $escol = $request->input('escol');
        $ocup = $request->input('ocup');
        $convive = $request->input('convive');
        $vivienda = $request->input('vivienda');
        $ingmen = $request->input('ingmen');
        $conyuge = $request->input('conyuge');
        $nhijos = $request->input('nhijos');
        $nvisitas = $request->input('nvisitas');
        $ejeaero = $request->input('ejeaero');
        
        \DB::insert('insert into Registro (F_Nat, L_Nat, E_Civil, Edad, Escolaridad, Ocupacion, C_Vive, Vivienda, I_Mensual, N_Conyuge, 
            N_Hijos, N_V_Personal, E_Aerobicos) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', 
        [$fnat, $lnat, $estcivil, $edad, $escol, $ocup, $convive, 
        $vivienda, $ingmen, $conyuge, $nhijos, $nhijos, $nvisitas, $ejeaero]);
     

        //Historial Clinico
        $enferm = $request->input('enferm');
        $control = $request->input('control');
        $medicacion = $request->input('medicacion');
        $medicamento = $request->input('medicamento');
        $dieta = $request->input('dieta');
        $altsueno = $request->input('altsueno');
        $triste = $request->input('triste');
        $claustro = $request->input('claustro');
        
        \DB::insert('insert into Historial_Clinico (Enfermedades, Controladas, B_Medicacion, Medicamentos, D_Normal, A_Sueño, 
            E_Facil, Claustrofobia) values (?, ?, ?, ?, ?, ?, ?, ?)', 
        [$enferm, $control, $medicacion, $medicamento, $dieta, $altsueno, $triste, $claustro]);

        \DB::insert('insert into Historial_Clinico (Id_Pac) SELECT Id_Pac FROM Paciente');

        //Antecedentes familiares
        $anemia = $request->input('anemia');
        $diabetes = $request->input('diabetes');
        $hipercol = $request->input('hipercol');
        $hipertension = $request->input('hipertension');
        $hipertiro = $request->input('hipertiro');
        $depend = $request->input('depend');
        $demencia = $request->input('demencia');
        
        \DB::insert('insert into Antecedentes_Familiares (Anemia, Diabetes, H_colesterol, Hipertension, Hipertiroidismo, Sustancia, 
            DD_Cognitivo) values (?, ?, ?, ?, ?, ?, ?)', 
        [$anemia, $diabetes, $hipercol, $hipertension, $hipertiro, $depend, $demencia]);


        //Antecedentes familiares
        $entre = $request->input('entre');
        $lugar = $request->input('lugar');
        $fecha = $request->input('fecha');
        $firma = $request->input('firma');
        $obser = $request->input('obser');
        
        \DB::insert('insert into Antecedente_Entrevista (Entrevistador, Fecha_Act, Lugar, Firma, Observaciones) 
            values (?, ?, ?, ?, ?)', 
        [$entre, $fecha, $lugar, $firma, $obser]);



        return redirect()->route('entrevistaprevia');
    }

    public function mostrardatos(){

        $Mostrar = DB::table('pacientes')->get();
        return view('welcome', compact('Mostrar'));
    }


    
}
