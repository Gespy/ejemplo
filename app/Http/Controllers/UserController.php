<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Paciente;
use App\Models\Registro;
use App\Models\AntecedentesFamiliare;
use App\Models\AntecedenteEntrevistum;
use App\Models\HistorialClinico;
use Exception;
use DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $path = 'views';

    public function index()
    {

        
        //Traer registros
        $data = Paciente::paginate(5);
        //Mostrar Registros
        return view('MostrarPacientes', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //formulario de registro
        return view('entrevistaprevia');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Almacenar datos
        try{
            $pac = new Paciente();
            
            $pac->Nombre    = $request->name;
            $pac->Direccion = $request->direccion;
            $pac->Tel_Fijo  = $request->telfijo;
            $pac->Tel_Cel   = $request->telcel;
            $pac->E_mail    = $request->email;

            
            $pac->save();

            $id = $pac->Id_Pac;
            

            $reg = new Registro();

            $reg['paciente_Id_Pac']     = $id;
                  
            $reg->F_Nat                 = $request->fecha;
            $reg->L_Nat                 = $request->lunat;
            $reg->E_Civil               = $request->estcivil;
            $reg->Edad                  = $request->edad;
            $reg->Escolaridad           = $request->escol;
            $reg->Ocupacion             = $request->ocup;
            $reg->C_Vive                = $request->convive;
            $reg->Vivienda              = $request->vivienda;
            $reg->I_Mensual             = $request->ingmen;
            $reg->N_Conyuge             = $request->conyuge;
            $reg->N_Hijos               = $request->nhijos;
            $reg->N_V_Personal          = $request->nvisitas;
            $reg->E_Aerobicos           = $request->ejaero;

            $reg->save();

            

            $antf = new AntecedentesFamiliare();

            $antf['paciente_Id_Pac']    = $id;
                  
            $antf->Anemia               = $request->anemia;
            $antf->Diabetes             = $request->diabetes;
            $antf->H_colesterol         = $request->hipercol;
            $antf->Hipertension         = $request->hipertension;
            $antf->Hipertiroidismo      = $request->hipertiro;
            $antf->Sustancia            = $request->depend;
            $antf->DD_Cognitivo         = $request->demencia;

            $antf->save();

            $h = new HistorialClinico();

            $h['paciente_Id_Pac']    = $id;
                  
            $h->Enfermedades         = $request->enferm;
            $h->Controladas          = $request->control;
            $h->B_Medicacion         = $request->medicacion;
            $h->Medicamentos         = $request->medicamento;
            $h->D_Normal             = $request->dieta;
            $h->A_Sueño              = $request->altsueno;
            $h->E_Facil              = $request->triste;
            $h->Claustrofobia        = $request->claustro;

            $h->save();

            $ante = new AntecedenteEntrevistum();

            $ante['paciente_Id_Pac']    = $id;

            $ante->Entrevistador            = $request->entre;
            $ante->Fecha_Act                = $request->fechaa;
            $ante->lugar                    = $request->lugar;
            $ante->firma                    = $request->firma;
            $ante->Observaciones            = $request->obser;

            $ante->save();
            
            return redirect()->route('menuinicio');
        }
        catch(Exception $e){
            return "Fatal error - ".$e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //mostrar
        $pac= Paciente::findOrFail($id);
        $reg = Registro::where('paciente_Id_Pac', $id)->get()->first();
        $ant = AntecedentesFamiliare::where('paciente_Id_Pac', $id)->get()->first();
        $hic = HistorialClinico::where('paciente_Id_Pac', $id)->get()->first();
        $ante = AntecedenteEntrevistum::where('paciente_Id_Pac', $id)->get()->first();

        return view('vista', compact('pac', 'reg', 'ant', 'hic', 'ante'));

       
        
            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
       $pac= Paciente::with('registros')->findOrFail($id);
       $reg = Registro::where('paciente_Id_Pac', $id)->get()->first();
       $ant = AntecedentesFamiliare::where('paciente_Id_Pac', $id)->get()->first();
       $hic = HistorialClinico::where('paciente_Id_Pac', $id)->get()->first();
       $ante = AntecedenteEntrevistum::where('paciente_Id_Pac', $id)->get()->first();

       return view('edicion', compact('pac', 'reg', 'ant', 'hic'));

            
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_Pac)
    {
        //
               
            $pac= Paciente::with('registros')->findOrFail($Id_Pac);
            $pac->Nombre    = $request->name;
            $pac->Direccion = $request->direccion;
            $pac->Tel_Fijo  = $request->telfijo;
            $pac->Tel_Cel   = $request->telcel;
            $pac->E_mail    = $request->email;
            
            $pac->save();

            //$ids = $pac->Id_Pac;
            
            Registro::where('paciente_Id_Pac', '=', $Id_Pac)->update(['F_Nat'=>$request->fecha]);
            Registro::where('paciente_Id_Pac', '=', $Id_Pac)->update(['L_Nat'=>$request->lunat]);
            Registro::where('paciente_Id_Pac', '=', $Id_Pac)->update(['E_Civil'=>$request->estcivil]);
            Registro::where('paciente_Id_Pac', '=', $Id_Pac)->update(['Edad'=>$request->edad]);
            Registro::where('paciente_Id_Pac', '=', $Id_Pac)->update(['Escolaridad'=>$request->escol]);
            Registro::where('paciente_Id_Pac', '=', $Id_Pac)->update(['Ocupacion'=>$request->ocup]);
            Registro::where('paciente_Id_Pac', '=', $Id_Pac)->update(['C_Vive'=>$request->convive]);
            Registro::where('paciente_Id_Pac', '=', $Id_Pac)->update(['Vivienda'=>$request->vivienda]);
            Registro::where('paciente_Id_Pac', '=', $Id_Pac)->update(['I_Mensual'=>$request->ingmen]);
            Registro::where('paciente_Id_Pac', '=', $Id_Pac)->update(['N_Conyuge'=>$request->conyuge]);
            Registro::where('paciente_Id_Pac', '=', $Id_Pac)->update(['N_Hijos'=>$request->nhijos]);
            Registro::where('paciente_Id_Pac', '=', $Id_Pac)->update(['N_V_Personal'=>$request->nvisitas]);
            Registro::where('paciente_Id_Pac', '=', $Id_Pac)->update(['E_Aerobicos'=>$request->ejaero]);


            AntecedentesFamiliare::where('paciente_Id_Pac', '=', $Id_Pac)->update(['Anemia'=>$request->anemia]);
            AntecedentesFamiliare::where('paciente_Id_Pac', '=', $Id_Pac)->update(['Diabetes'=>$request->diabetes]);
            AntecedentesFamiliare::where('paciente_Id_Pac', '=', $Id_Pac)->update(['H_colesterol'=>$request->hipercol]);
            AntecedentesFamiliare::where('paciente_Id_Pac', '=', $Id_Pac)->update(['Hipertension'=>$request->hipertension]);
            AntecedentesFamiliare::where('paciente_Id_Pac', '=', $Id_Pac)->update(['Hipertiroidismo'=>$request->hipertiro]);
            AntecedentesFamiliare::where('paciente_Id_Pac', '=', $Id_Pac)->update(['Sustancia'=>$request->depend]);
            AntecedentesFamiliare::where('paciente_Id_Pac', '=', $Id_Pac)->update(['DD_Cognitivo'=>$request->demencia]);
           

            HistorialClinico::where('paciente_Id_Pac', '=', $Id_Pac)->update(['Enfermedades'=>$request->enferm]);
            HistorialClinico::where('paciente_Id_Pac', '=', $Id_Pac)->update(['Controladas'=>$request->control]);
            HistorialClinico::where('paciente_Id_Pac', '=', $Id_Pac)->update(['B_Medicacion'=>$request->medicacion]);
            HistorialClinico::where('paciente_Id_Pac', '=', $Id_Pac)->update(['Medicamentos'=>$request->medicamento]);
            HistorialClinico::where('paciente_Id_Pac', '=', $Id_Pac)->update(['D_Normal'=>$request->dieta]);
            HistorialClinico::where('paciente_Id_Pac', '=', $Id_Pac)->update(['A_Sueño'=>$request->altsueno]);
            HistorialClinico::where('paciente_Id_Pac', '=', $Id_Pac)->update(['E_Facil'=>$request->triste]);
            HistorialClinico::where('paciente_Id_Pac', '=', $Id_Pac)->update(['Claustrofobia'=>$request->claustro]);

            
            
            return redirect()->route('mstr.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try{
            $pac = Paciente::findOrFail($id);
            $pac->delete();
            return redirect()->route('mstr.index');

        }catch(Exception $e){
            return "Fatal error - ".$e->getMessage();
        }
    }
}
