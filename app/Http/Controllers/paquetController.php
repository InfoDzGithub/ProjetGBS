<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Promot;
use App\Paquet;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\EditRequest;
use Illuminate\Http\UploadedFile;
use App\Examen;
use App\Matiere;
use App\Codage;
use App\User;
use App\Examensetd;
use App\Etudiant;
use App\Exclusion;
use Illuminate\Support\Facades\Auth;
use App\Affectation;

class paquetController extends Controller
{
    

  public function index()
    {
        $ps=Promot::all();
        
            return view('enseignant.correction')->with([
            
            'ps' => $ps
            
        ]); 
    }

 public function note(Request $request,$idP,$idE)
    {
        
if( Auth::user()->type == 'EN' || Auth::user()->type == 'ER'){
        $paquet = DB::table('examensetds')
               ->select('examensetds.id','note','noteC1','noteC2','noteC3')
               ->join('paquets','idExEt','=','examensetds.id')
                ->where([['paquets.id',$idP],['paquets.idEx',$idE]])
                ->get();
                $exm = Examen::find($idE);
                     foreach ($paquet as $P ) {
                      $etd = Examensetd::find($P->id);
                      if($exm->affectation==1){
                            $etd->noteC1=$request->input($P->id);
                            $etd->note=$etd->noteC1;
                            $etd->save();
                          }
                      if($exm->affectation==3){
                            $etd->noteC2=$request->input($P->id);
                            $etd->save();
                            if($etd->noteC2>$etd->noteC1){
                              $note=$etd->noteC2-$etd->noteC1;
                              
                            }else{
                              $note=$etd->noteC1-$etd->noteC2;
                            }
                            if($note<=1){
                                 $etd->noteC3=($etd->noteC1+$etd->noteC2)/2;
                                 $etd->note=($etd->noteC1+$etd->noteC2)/2;
                                  
                              }
                              else
                              {
                                $etd->note=0;

                              }
                              $etd->save();
                          }
                      if($exm->affectation==5){
                            $etd->noteC3=$request->input($P->id);
                            $etd->note=$etd->noteC3;
                            $etd->save();
                          }

                           }
                     
           
        return back();}
        else{
                 $ps=Promot::all();
                return view('page.4042')->with([
                
                'ps' => $ps]);
            }

    }

     public function correction($idP,$idE)
    {
        if( Auth::user()->type == 'ER' || Auth::user()->type == 'EN'){
        
       $userr = DB::table('users')
       ->join('enseignants','enseignants.id','=','id_user')
       ->where('enseignants.id',Auth::user()->id_user)
       ->first();
        $codeurs = Codage::all(); 
         $ps=Promot::all();
        $modules = DB::table('matieres')
                //->select( DB::raw('seances.id,nomMat,grp_ens_mods.type,nomGroup,GEM_id,date,time'))
              ->join('enseignant_matieres','enseignant_matieres.id','=','matieres.id')
              ->where('enseignants_id',Auth::user()->id_user)
                ->get();
         $paquet = DB::table('examensetds')
               ->select('examensetds.code','examensetds.id','noteC1','noteC2','noteC3')
                ->join('paquets','idExEt','=','examensetds.id')
                ->where([['paquets.id',$idP],['paquets.idEx',$idE]])
                ->orderBy('code')
                ->get();   
          $ex=Examen::find($idE);



        return view('enseignant.paquet')->with([
           'codeurs' => $codeurs,
           'userr' => $userr,
           'modules' => $modules,
           'paquet' => $paquet,
           'idP' => $idP,
           'idE' =>$idE,
           'Aff' => $ex->affectation,
           'ps' => $ps
           ]);
       
        }
        else{
             $ps=Promot::all();
            return view('page.4042')->with([
            
            'ps' => $ps]);
        }
    }






     public function Mcorrection()
    {
        if( Auth::user()->type == 'ER' || Auth::user()->type == 'EN'){
        
       $userr = DB::table('users')
       ->join('enseignants','enseignants.id','=','id_user')
       ->where('enseignants.id',Auth::user()->id_user)
       ->first();
        $codeurs = Codage::all(); 
         $ps=Promot::all();
        $modules = DB::table('matieres')
                //->select( DB::raw('seances.id,nomMat,grp_ens_mods.type,nomGroup,GEM_id,date,time'))
             	->join('enseignant_matieres','enseignant_matieres.id','=','matieres.id')
             	->where('enseignants_id',Auth::user()->id_user)
                ->get();
       

        return view('codage.Mcoder')->with([
           'codeurs' => $codeurs,
           'userr' => $userr,
           'modules' => $modules,
           
           'ps' => $ps
           ]);
       
        }
        else{
             $ps=Promot::all();
            return view('page.4042')->with([
            
            'ps' => $ps]);
        }
    }

    public function Pcorrection($id)
    {
      if( Auth::user()->type == 'ER' || Auth::user()->type == 'EN'){
        
       $userr = DB::table('users')
       ->join('enseignants','enseignants.id','=','id_user')
       ->where('enseignants.id',Auth::user()->id_user)
       ->first();
        $codeurs = Codage::all(); 
         $ps=Promot::all();
        $modules = Matiere::all();
        $examn = Examen::where('matieres_id','=',$id)->get();
        $paquet = DB::table('affectations')
               ->select('affectations.idP as idP','paquets.idEx')
                
                ->join('paquets','paquets.id','=','idP')
                ->join('examens','examens.id','=','paquets.idEx')
                ->where([['Matieres_id',$id],['finAff',"false"],['affectations.Aff1',Auth::user()->id_user]])
                ->groupBy('paquets.id','idEx')
                ->get();
        return view('codage.Pcoder')->with([
           'codeurs' => $codeurs,
           'userr' => $userr,
           'examn' => $examn,
           'modules' => $modules,
           'paquet' => $paquet,
           'ps' => $ps
           ]);
       
        }
        else{
             $ps=Promot::all();
            return view('page.4042')->with([
            
            'ps' => $ps]);
        }
    }

     public function affectation($idE)
    {
       if( Auth::user()->type == 'EN' || Auth::user()->type == 'ER'){
        
       $userr = DB::table('users')
       ->join('enseignants','enseignants.id','=','id_user')
       ->where('enseignants.id',Auth::user()->id_user)
       ->first(); 
         $ps=Promot::all();
         $p = Paquet::where('idEx','=',$idE)->groupBy('id')->get();
         $ens = DB::table('enseignants')
                ->select('enseignants.id as idE','nom','prenom')
                ->join('enseignant_matieres','enseignants_id','=','enseignants.id')
                ->join('examens','examens.matieres_id','=','enseignant_matieres.Matieres_id')
                ->where('examens.id',$idE)
                ->get();
        $paquet = DB::table('examensetds')
               //->select('paquets.id as idP','nom','prenom','etudiants.id as idEt','code')
                ->where('idEx',$idE)
                ->orderBy('code')
                ->get();
                
         $tmp = Affectation::where([['idEx','=',$idE],['finAff','=','false']])->first();
        $exm = Examen::find($idE);
         if(Affectation::where([['idEx','=',$idE],['finAff','=','false']])->exists()){
         	  $date = explode('-', $tmp->date);
	          $dateD = explode('/', $date[0]);
	          $dateF = explode('/', $date[1]);
			  $an = explode('/', date('d/m/Y'));
$dejaffecter=$tmp->dejaAff;
			  if($exm->affectation==0){
			  	$dejaffecter=0;
			  }
			  
			  if((($dateD[2] < $an[2]) || (($dateD[2] == $an[2]) && ($dateD[0] < $an[1])) || (($dateD[2] == $an[2]) && ($dateD[0] == $an[1])&&($dateD[1] <= $an[0]))) && $dejaffecter==0){
			  
			  	$exm = Examen::find($idE);
			  	$exm->affectation=$exm->affectation+1;
			  	$exm->save();
          $tmp = Affectation::where([['idEx','=',$idE],['finAff','=','false']])->get();
          foreach ($tmp as $T) {
            # code...
            $T->dejaAff=1;
            $T->save();
          }

			  	$dejaffecter =1;
			  } 
			  if((($dateF[2] < $an[2]) || (($dateF[2] == $an[2]) && ($dateF[0] < $an[1])) || (($dateF[2] == $an[2]) && ($dateF[0] == $an[1])&&($dateF[1] <= $an[0]))) && $dejaffecter==1){
			  	$exm = Examen::find($idE);
			  	$exm->affectation=$exm->affectation+1;
			  	$exm->save();
			  	$dejaffecter =0;
			  	$tmp = Affectation::where([['idEx','=',$idE],['finAff','=','false']])->get();
			  	foreach ($tmp as $T) {
			  		# code...
			  		$T->finAff="true";
            $T->dejaAff=0;
			  		$T->save();
			  	}
			  } 
         }
          $exm = Examen::find($idE);
        return view('enseignant.correction')->with([
           
           'userr' => $userr,
           'etd' => $paquet,
           'paquet' => $p,
           'ens' => $ens,
           'idEx' => $idE,
           'aff' => $exm->affectation,
           'ps' => $ps
           ]);
       
        }
        else{
             $ps=Promot::all();
            return view('page.4042')->with([
            
            'ps' => $ps]);
        }
       
    }
    public function store(Request $request,$idE)
    {
      if( Auth::user()->type == 'ER'){
        
       $userr = DB::table('users')
       ->join('enseignants','enseignants.id','=','id_user')
       ->where('enseignants.id',Auth::user()->id_user)
       ->first();
       $ens = DB::table('enseignants')
                ->select('enseignants.id as idE','nom','prenom')
                ->join('enseignant_matieres','enseignants_id','=','enseignants.id')
                ->join('examens','examens.matieres_id','=','enseignant_matieres.Matieres_id')
                ->where('examens.id',$idE)
                ->get();
                foreach ($ens as $E) {
                	# code...
                	$paquet = $request->input('paquet'.$E->idE);
                	foreach ($paquet as $key => $value) {
                		# code...
                	$affectation = new Affectation();
                	$affectation->aff1 = $request->input($E->idE);
                	$affectation->date = $request->input("date-range-picker");
                	$affectation->idEx = $idE;
                	$affectation->idP = $value;
                	$affectation->finAff = "false";
                	$affectation->save();
                	}
                }
            
         return back();
       
        }
        else{
             $ps=Promot::all();
            return view('page.4042')->with([
            
            'ps' => $ps]);
        }

       

    }



}