<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\EditRequest;
use Illuminate\Http\UploadedFile;
use App\Examen;
use App\Matiere;
use App\Codage;
use App\Promot;
use App\User;
use App\Paquet;
use App\Examensetd;
use App\Etudiant;
use App\Exclusion;
use Illuminate\Support\Facades\Auth;

class CodageController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }
   
    public function index()
    {
    	 if( Auth::user()->type == 'AD'){
        
       $userr = DB::table('users')
       ->join('enseignants','enseignants.id','=','id_user')
       ->where('enseignants.id',Auth::user()->id_user)
       ->first();
        $codeurs = Codage::all(); 
         $ps=Promot::all();
       

        return view('admin.ResponsableCodage.listeResponsableCodage')->with([
           'codeurs' => $codeurs,
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


    public function codage()
    {
       if( Auth::user()->type == 'RC'){
        
       $userr = DB::table('users')
       ->join('enseignants','enseignants.id','=','id_user')
       ->where('enseignants.id',Auth::user()->id_user)
       ->first();
        $codeurs = Codage::all(); 
         $ps=Promot::all();
        $modules = Matiere::all();

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
    public function paquet($id)
    {
       if( Auth::user()->type == 'RC'){
        
       $userr = DB::table('users')
       ->join('enseignants','enseignants.id','=','id_user')
       ->where('enseignants.id',Auth::user()->id_user)
       ->first();
        $codeurs = Codage::all(); 
         $ps=Promot::all();
        $modules = Matiere::all();
        $examn = Examen::where('matieres_id','=',$id)->get();
        $paquet = DB::table('paquets')
               ->select('paquets.id as idP','idEx')
                ->join('examens','examens.id','=','idEx')
                ->where('Matieres_id',$id)
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
    public function Ipaquet($idP,$idE)
    {
       if( Auth::user()->type == 'RC'){
        
       $userr = DB::table('users')
       ->join('enseignants','enseignants.id','=','id_user')
       ->where('enseignants.id',Auth::user()->id_user)
       ->first();
        $codeurs = Codage::all(); 
         $ps=Promot::all();
        $modules = Matiere::all();
        $examn = Examen::where('matieres_id','=',$idE)->get();
        $paquet = DB::table('paquets')
               ->select('paquets.id as idP','nom','prenom','etudiants.id as idEt','code')
                ->join('examensetds','examensetds.id','=','idExEt')
                ->join('etudiants','etudiants.id','=','idE')
                ->where([['paquets.id',$idP],['paquets.idEx',$idE]])
                ->get();
        $etud = Exclusion::join('etudiants','etudiants.id','=','idE')->get();
        return view('codage.paquet')->with([
           'codeurs' => $codeurs,
           'userr' => $userr,
           'examn' => $examn,
           'modules' => $modules,
           'etd' => $paquet,
           'etud' => $etud,
           'ps' => $ps
           ]);
       
        }
        else{
             $ps=Promot::all();
            return view('page.4042')->with([
            
            'ps' => $ps]);
        }
       
    }
     public function Cpaquet(Request $request,$id)
    {

       if( Auth::user()->type == 'RC'){
        if(!(Paquet::where('idEx','=',$id)->exists())){
       $userr = DB::table('users')
       ->join('enseignants','enseignants.id','=','id_user')
       ->where('enseignants.id',Auth::user()->id_user)
       ->first();
        $codeurs = Codage::all(); 
         $ps=Promot::all();
        //$modules = Matiere::all();
        //$examn = Examen::where('matieres_id','=',$id)->get();
        $etd = Examensetd::where('idEx','=',$id)->get();
        foreach ($etd as $E) {
          # code...
          if($E->code==null){
          $E->code=mt_rand(10000000,99999999);
          $E->save();}
        }
        $etd = Examensetd::where('idEx','=',$id)->orderBy('code')->get();
        $i=1;
        $j=1;
        foreach ($etd as $E) {
          # code...
          if($i==$request->input('nbr')){
            $i=1;
            $j++;
          }

          $paquet = new Paquet();
          $paquet->idExEt = $E->id;
          $paquet->idex = $id;
          $paquet->id = $j;
          $paquet->save();
          $i++;
        }}

        return back();
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
        $ps=Promot::all();
      return view('admin.ResponsableCodage.createResponsableCodage')->with([
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


 public function store(Request $request)
    {
      if( Auth::user()->type == 'AD'){
        
       $userr = DB::table('users')
       ->join('enseignants','enseignants.id','=','id_user')
       ->where('enseignants.id',Auth::user()->id_user)
       ->first();
         $codage = new Codage();
        
        if($request->hasFile('img'))
            {
            $file = $request->file('img');
            $file_name = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('/uploads/photo'),$file_name);
         
            }
        else{
            $file_name="Enseignant.png";
            }
            
            $codage->nom = $request->input('nom');
            $codage->prenom = $request->input('prenom');
            $codage->email = $request->input('email');
            $codage->date_N = $request->input('dateN');
           
            $codage->password = Hash::make($request->input('password'));
            $codage->num_tel = $request->input('num_tel');
             $codage->photo = 'uploads/photo/'.$file_name;

             $fields = Input::get('sexe');
          if($fields == 'Femme'){
           $codage->sexe = $fields;
          }
          else {
            $filelds='Homme';
          $codage->sexe = $fields;
          }
      
        
           
            $codage->save();
            
        return User::create([
            'name' => $request->input('user'),
            'email' => $request->input('email'),
            'password' =>  Hash::make($request->input('password')),
            'type' => 'RC',
            'userr' => $userr,
            'id_user' => $codage->id,
        ]);
       
        }
        else{
             $ps=Promot::all();
            return view('page.4042')->with([
            
            'ps' => $ps]);
        }

       

    }


 public function destroy($id)
    {
        if( Auth::user()->type == 'AD'){
        
       $userr = DB::table('users')
       ->join('enseignants','enseignants.id','=','id_user')
       ->where('enseignants.id',Auth::user()->id_user)
       ->first();
        $codeur = Codage::find($id);

           
        $codeur->delete();
        return redirect('ResponsableCodage');
       
        }
        else{
             $ps=Promot::all();
            return view('page.4042')->with([
            
            'ps' => $ps]);
        }
        
            //}
    }

/***********detailts dun codeur*******/

 public function details($id)
    {

      if( Auth::user()->type == 'AD'){
        
       $userr = DB::table('users')
       ->join('enseignants','enseignants.id','=','id_user')
       ->where('enseignants.id',Auth::user()->id_user)
       ->first();
        $codeur = Codage::find($id);
        $ps=Promot::all();
       $age=28;
        
        
             $codeurs=Codage::all();
             
        return view('admin.ResponsableCodage.detailsResponsableCodage')->with([
            'codeur' => $codeur,
            'age'=>$age,
            'userr' => $userr,
            'codeurs' => $codeurs,
            'ps' => $ps
             
            
       ]);
       
        }
        else{
             $ps=Promot::all();
            return view('page.4042')->with([
            
            'ps' => $ps]);
        }
        
    } 



/************************ editer un codeur*****************************************/
public function edit($id)
    {
      if( Auth::user()->type == 'AD'){
        
       $userr = DB::table('users')
       ->join('enseignants','enseignants.id','=','id_user')
       ->where('enseignants.id',Auth::user()->id_user)
       ->first();
         $codeur = Codage::find($id);
      $ps=Promot::all();
       $age=28; 
        //***********calcul age******************
      
        $codeurs=Codage::all();
        /////////////////////////////////////////////
        return view('admin.ResponsableCodage.editResponsableCodage')->with([
            'codeur' => $codeur,
            'age'=>$age,
            'codeurs' => $codeurs,
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

public function update(Request $request , $id)
    {
      if( Auth::user()->type == 'AD'){
        
       $userr = DB::table('users')
       ->join('enseignants','enseignants.id','=','id_user')
       ->where('enseignants.id',Auth::user()->id_user)
       ->first();
        $codeur = Codage::find($id);
        
           $codeur->nom = $request->input('nom');
            $codeur->prenom = $request->input('prenom');
            $codeur->email = $request->input('email');
            $codeur->date_N = $request->input('date_naissance');
            
            $codeur->password = Hash::make($request->input('password'));
            $codeur->num_tel = $request->input('num_tel');
           
             $fields = Input::get('sexe');
                  if($fields == 'Femme'){
                   $codeur->sexe = $fields;
                  }
                  else {
                    $filelds='Homme';
                  $codeur->sexe = $fields;
                  }
           
                
                   
            $codeur->save();
          
            

        return redirect('ResponsableCodage/'.$id.'/details');
       
        }
        else{
             $ps=Promot::all();
            return view('page.4042')->with([
            
            'ps' => $ps]);
        }
       

    }

}




 











 