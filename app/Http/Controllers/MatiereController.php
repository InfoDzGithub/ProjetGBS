<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\EditRequest;
use Illuminate\Http\UploadedFile;
use App\Enseignant;
use App\EnseignantMatiere;
use App\Responsable;
use App\Matiere;
use App\Examen;
use App\Promot;
use App\Seances;
use App\Absence;
use App\Groupe;
use App\Grp_ens_mod;
use App\Etudiant;
use App\Exclusion;
use App\User;
use Illuminate\Support\Facades\Auth;
class MatiereController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }
     public function index()
    {
    	 if( Auth::user()->type == 'Ad'){
    
           
           $userr = DB::table('users')
           ->join('enseignants','enseignants.id','=','id_user')
           ->where('enseignants.id',Auth::user()->id_user)
           ->first();
           $matieres = Matiere::all(); 
        $ps=Promot::all();
         return view('admin.matiere.index' )
         ->with([
          'userr' => $userr,
          'matieres' => $matieres,
         'ps' => $ps]);
        }
        else{
             $ps=Promot::all();
            return view('page.4042')->with([
            
            'ps' => $ps]);
        }
    	 
    }
     public function create()
    {
      if( Auth::user()->type == 'AD'){
    
           
           $userr = DB::table('users')
           ->join('enseignants','enseignants.id','=','id_user')
           ->where('enseignants.id',Auth::user()->id_user)
           ->first();
           $membres = Enseignant::all();
        $responsables = Responsable::all();
        $ps=Promot::all();
         return view('admin.matiere.create')->with([
            'membres' => $membres,
            'userr' => $userr,
            'responsables' => $responsables,
            'ps' => $ps
            
        ]);
        }
        else{
             $ps=Promot::all();
            return view('page.4042')->with([
            
            'ps' => $ps]);
        }
        
    	
    }
    /*******************************************/
    public function store(Request $request)
    {
       if( Auth::user()->type == 'AD'){
    
           
           $userr = DB::table('users')
           ->join('enseignants','enseignants.id','=','id_user')
           ->where('enseignants.id',Auth::user()->id_user)
           ->first();
           $matiere = new Matiere();
          if($request->hasFile('img')){
            $file = $request->file('img');
            $file_name = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('/uploads/photo'),$file_name);

        }
        else{
            $file_name="admin.png";
        }

            $matiere->nomMat = $request->input('nom');
            $matiere->heurCour = $request->input('cour');
            $matiere->heurTD = $request->input('td');
            $matiere->heurTP = $request->input('tp');
            $matiere->cofficient = $request->input('coefficient');
            $matiere->responsables_id = $request->input('responsable');
            
           $matiere->photo = 'uploads/photo/'.$file_name;
           $matiere->color = Input::get('color');
      $matiere->save();
            $members =  $request->input('membre');
        foreach ($members as $key => $value) {
            $enseignant_matier = new EnseignantMatiere();
            $enseignant_matier->matieres_id = $matiere->id;
            $enseignant_matier->enseignants_id = $value;
            $enseignant_matier->save();

         } 
        return redirect('promot');
        }
        else{
             $ps=Promot::all();
            return view('page.4042')->with([
            
            'ps' => $ps]);
        }
        

    }
/**********************************************************/
public function edit($id)
    {
       if( Auth::user()->type == 'AD'){
    
           
           $userr = DB::table('users')
           ->join('enseignants','enseignants.id','=','id_user')
           ->where('enseignants.id',Auth::user()->id_user)
           ->first();
           $matiere = Matiere::find($id);
      $membres=Enseignant::all();
       $ps=Promot::all();
      $responsables = Responsable::all();
       $listEns = DB::table('enseignant_matieres')
                   ->join('enseignants', 'enseignants.id', '=', 'enseignant_matieres.enseignants_id')
                ->where('enseignant_matieres.matieres_id', '=',$id)
                ->get();
         return view('admin.matiere.edit')->with([
            'membres' => $membres,
            'responsables' => $responsables,
            'matiere'=>$matiere,
            'listEns'=>$listEns,
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
           $matiere = Matiere::find($id);

            $matiere->nomMat = $request->input('nom');
            $matiere->heurCour = $request->input('cour');
            $matiere->heurTD = $request->input('td');
            $matiere->heurTP = $request->input('tp');
            $matiere->cofficient = $request->input('coefficient');
            $matiere->responsables_id =$request->input('responsable');
                   
            $matiere->save();
            $members =  $request->input('membre');
        $enseignant_matiere = EnseignantMatiere::where('matieres_id',$id);
        $enseignant_matiere->delete();
        
        foreach ($members as $key => $value) {
            $enseignant_matiere = new EnseignantMatiere();
           $enseignant_matiere->enseignants_id = $value;
            $enseignant_matiere->matieres_id = $matiere->id;
            $enseignant_matiere->save();

         } 
            

        return redirect('matiere');//faut changer la direction en page details

        }
        else{
             $ps=Promot::all();
            return view('page.4042')->with([
            
            'ps' => $ps]);
        }
       
    }
/****************************************************************/
public function destroy($id)
    {
         if( Auth::user()->type == 'AD'){
    
           
           $userr = DB::table('users')
           ->join('enseignants','enseignants.id','=','id_user')
           ->where('enseignants.id',Auth::user()->id_user)
           ->first();
            $matiere = Matiere::find($id);

        $enseignant_matiere = DB::table('enseignant_matieres')
          ->where('matieres_id', '=',$id);
          $enseignant_matiere->delete();
            
        $matiere->delete();
        return redirect('matiere');
        }
        else{
             $ps=Promot::all();
            return view('page.4042')->with([
            
            'ps' => $ps]);
        }
       
            //}
    }

/****************************************************************/
 public function details($id)
    {
       if( Auth::user()->type == 'AD'){
    
           
           $userr = DB::table('users')
           ->join('enseignants','enseignants.id','=','id_user')
           ->where('enseignants.id',Auth::user()->id_user)
           ->first();
            $matiere = Matiere::find($id);
         $ps=Promot::all();
         $Groupes = Groupe::All();
         $ens = DB::table('enseignants')
                ->select( DB::raw('enseignants.id,nom,prenom,email,grp_ens_mods.id as f,group_id,grp_ens_mods.type'))
                ->join('enseignant_matieres','enseignants_id','=','enseignants.id')
                ->join('grp_ens_mods','Ens_mod_id','=','enseignant_matieres.id')
                ->join('groupes','group_id','=','groupes.id')
                ->where('Matieres_id',$id)
                ->get();
         $listEns = DB::table('enseignant_matieres')
                   ->join('enseignants', 'enseignants.id', '=', 'enseignant_matieres.enseignants_id')
                ->where('enseignant_matieres.matieres_id', '=',$id)
                ->get();
          $examens = DB::table('examens')
                ->select('id','titre','type','sujet','date_examen')

                ->where('examens.matieres_id', '=',$id)
               ->groupBy('date_examen')->get();
        $exclusTD=DB::table('etudiants')
                ->select( DB::raw('etudiants.id,nom,prenom,dateN,address,email,password,groupes_id,etat,photo,etudiants.created_at,etudiants.updated_at'))
              ->join('exclusions','etudiants.id','=','idE')
              ->join('grp_ens_mods','grp_ens_mods.id','=','gem_id')
              ->join('enseignant_matieres','enseignant_matieres.id','=','Ens_mod_id')
              ->where([['Matieres_id',$id],['grp_ens_mods.type',"TD"]])
                ->orderby('nom','asc')
                ->get();
        $exclusTP=DB::table('etudiants')
                ->select( DB::raw('etudiants.id,nom,prenom,dateN,address,email,password,groupes_id,photo,etat,etudiants.created_at,etudiants.updated_at'))
              ->join('exclusions','etudiants.id','=','idE')
              ->join('grp_ens_mods','grp_ens_mods.id','=','gem_id')
              ->join('enseignant_matieres','enseignant_matieres.id','=','Ens_mod_id')
              ->where([['Matieres_id',$id],['grp_ens_mods.type',"TP"]])
                ->orderby('nom','asc')
                ->get();
        return view('admin.matiere.details')->with([
            'matiere' => $matiere,
            'listEns'=>$listEns,
            'examens'=>$examens,
            'exclusTD'=>$exclusTD,
            'exclusTP'=>$exclusTP,
            'Groupes' => $Groupes,
            'EnsG' => $ens,
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
