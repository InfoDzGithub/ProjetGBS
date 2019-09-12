<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\EditRequest;
use Illuminate\Http\UploadedFile;
use App\Enseignant;
use App\Examen;
use App\Examensetd;
use App\Matiere;
use App\Promot;
use App\Exclusion;
use App\User;
use Illuminate\Support\Facades\Auth;
class ExamenController extends Controller
{
 public function __construct()
    {
        $this->middleware('auth');
    }
	 
/**********************************************************/
    public function create($id)
    {
         if( Auth::user()->type == 'AD'){
        
       $userr = DB::table('users')
       ->join('enseignants','enseignants.id','=','id_user')
       ->where('enseignants.id',Auth::user()->id_user)
       ->first();
         $matieres = Matiere::all();
        $idMatiere=$id;
        $ps=Promot::all();
        $exclus=DB::table('etudiants')
                ->select( DB::raw('etudiants.id,nom,prenom,dateN,address,email,password,groupes_id,grp_ens_mods.type,etat,photo,etudiants.created_at,etudiants.updated_at'))
              ->join('exclusions','etudiants.id','=','idE')
              ->join('grp_ens_mods','grp_ens_mods.id','=','gem_id')
              ->join('enseignant_matieres','enseignant_matieres.id','=','Ens_mod_id')
              ->where('Matieres_id',$id)
                ->orderby('nom','asc')
                ->get();
         return view('admin.examen.create')->with([
            'matieres' => $matieres,
            'idMatiere'=>$idMatiere,
            'exclus'=>$exclus,
            'userr' => $userr,
            'ps' => $ps
            
        ]);
       
        }
        else{
             $ps=Promot::all();
            return view('page.4042')->with([
            
            'ps' => $ps]);
        }
       
    	
    }
   /**********************************************/
    public function store(Request $request,$id)
    {
        
       if( Auth::user()->type == 'AD'){
        
       $userr = DB::table('users')
       ->join('enseignants','enseignants.id','=','id_user')
       ->where('enseignants.id',Auth::user()->id_user)
       ->first();
         $etd=DB::table('etudiants')
                ->select( DB::raw('etudiants.id'))
                ->get();
                $examen = new Examen();
                        if($request->hasFile('sujet')){

                            $file = $request->file('sujet');

                            $file_name = time().'.'.$file->getClientOriginalExtension();
                            $file->move(public_path('/download'),$file_name);
                            $examen->sujet = $file_name;

                        }
                        else  $examen->sujet = 'cpc.pdf';

                            $examen->titre = $request->input('titre');
                            $examen->date_examen = $request->input('date_examen');
                            $examen->type = $request->input('type');
                            $examen->matieres_id = $id;
                            

                            $examen->save(); 
                    
                foreach ($etd as $T ) {
                    # code...
                    if(!(Exclusion::where([['idE','=',$T->id],['Matieres_id','=',$id]])
              ->join('grp_ens_mods','grp_ens_mods.id','=','gem_id')
              ->join('enseignant_matieres','enseignant_matieres.id','=','Ens_mod_id')->exists()))
                    {
                         $ExEtd = new Examensetd();
                       
                            $ExEtd->idE = $T->id;
                            $ExEtd->idEx = $examen->id;

                            $ExEtd->save(); 
                    }
                  
                }
          
         
        return redirect('matiere/'.$id.'/details');
        
        }
        else{
             $ps=Promot::all();
            return view('page.4042')->with([
            
            'ps' => $ps]);
        }
       

    }
 /*****************************************************************/
 public function destroy($id)
    {
        if( Auth::user()->type == 'AD'){
        
       $userr = DB::table('users')
       ->join('enseignants','enseignants.id','=','id_user')
       ->where('enseignants.id',Auth::user()->id_user)
       ->first();
        $examen = Examen::find($id);
       $idMatiere=$examen->matieres_id;
       
        $examen->delete();
        return redirect('matiere/'.$idMatiere.'/details');
        
        }
        else{
             $ps=Promot::all();
            return view('page.4042')->with([
            
            'ps' => $ps]);
        }
        
            //}
    }
  /**********************************************************/
public function edit($id)
    {
        if( Auth::user()->type == 'AD'){
        
       $userr = DB::table('users')
       ->join('enseignants','enseignants.id','=','id_user')
       ->where('enseignants.id',Auth::user()->id_user)
       ->first();
         $examen = Examen::find($id);
    $matieres=Matiere::all();
    $matInfo = DB::table('examens')
                   ->join('matieres', 'matieres.id', '=', 'examens.matieres_id')
                ->select('nomMat')
                ->where('examens.id', '=',$id)
                ->get();
    $ps=Promot::all();
         return view('admin.examen.edit')->with([
            'examen' => $examen,
            'matInfo'=>$matInfo,
            'matieres'=>$matieres,
            'userr' => $userr,
           'ps' => $ps

            
        ]);
        
        }
        else{
             $ps=Promot::all();
            return view('page.4042')->with([
            
            'ps' => $ps]);
        }
   
       
            
        
    
    }
    /******************************************************/
public function update(Request $request , $id)
    {
        if( Auth::user()->type == 'AD'){
        
       $userr = DB::table('users')
       ->join('enseignants','enseignants.id','=','id_user')
       ->where('enseignants.id',Auth::user()->id_user)
       ->first();
        
         $examen = Examen::find($id);

             if($request->hasFile('sujet')){

            $file = $request->file('sujet');

            $file_name = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('/download'),$file_name);
            $examen->sujet = $file_name;

        }
        else  $examen->sujet = 'cpc.pdf';

            $examen->titre = $request->input('titre');
            $examen->date_examen = $request->input('date_examen');
            $examen->type = $request->input('type');
            $examen->matieres_id = $request->input('matiere');;

            $examen->save();

        return redirect('matiere/'.$examen->matieres_id.'/details');
        }
        else{
             $ps=Promot::all();
            return view('page.4042')->with([
            
            'ps' => $ps]);
        }
      

    }

     public function details($id)
    {
        if( Auth::user()->type == 'AD'){
        
       $userr = DB::table('users')
       ->join('enseignants','enseignants.id','=','id_user')
       ->where('enseignants.id',Auth::user()->id_user)
       ->first();
        $examen = Examen::where('examens.id','=',$id)->join('matieres','matieres.id','=','matieres_id')->first();
        $liste = Examensetd::where('idEx','=',$id)
                 ->join('etudiants','etudiants.id','=','idE')
                 ->get();
          $ps=Promot::all();
        return view('admin.examen.detial')->with([
            'examen' => $examen,
            'lists' => $liste,
            'userr' => $userr,
            'ps' => $ps
       ]);
        
        }
        else{
             $ps=Promot::all();
            return view('page.4042')->with([
            
            'ps' => $ps]);
        }
        
    } 
}
