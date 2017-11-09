<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use View;




class SelectDatosController extends Controller
{

    

    public function mostrardatos(){

    	
        $Paciente = DB::table('Paciente')->simplepaginate(10);

        
        return view('MostrarPacientes', compact('Paciente'));
    }

    
}