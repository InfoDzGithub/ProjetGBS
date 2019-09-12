<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\EditRequest;
use Illuminate\Http\UploadedFile;


use App\Enseignant;
use App\Responsable;
use App\Promot;
use App\Matiere;
 
class EnseignantController extends Controller
{
    //
    public function index()
    {
    	//return view('admin.listeEnseignant');
    	 $membres = Enseignant::all(); 
       $ps=Promot::all();
       

        return view('admin.listeEnseignant')->with([
           'membres' => $membres,
           'ps' => $ps
           ]);
    }
    /*******************************************/
     public function create()
    {
      $ps=Promot::all();
    	return view('admin.createEnseignant')->with([
           'ps' => $ps
           ]);
    }
    /*******************************************/
    public function store(Request $request)
    {

        $membre = new Enseignant();
        
        if($request->hasFile('img'))
            {
            $file = $request->file('img');
            $file_name = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('/uploads/photo'),$file_name);
         
            }
        else{
            $file_name="Enseignant.png";
            }
            
            $membre->nom = $request->input('nom');
            $membre->prenom = $request->input('prenom');
            $membre->email = $request->input('email');
            $membre->date_N = $request->input('dateN');
            $membre->grade = $request->input('grade');
            $membre->password = Hash::make($request->input('password'));
            $membre->num_tel = $request->input('num_tel');
             $membre->photo = 'uploads/photo/'.$file_name;

             $fields = Input::get('sexe');
				  if($fields == 'Femme'){
				   $membre->sexe = $fields;
				  }
				  else {
				  	$filelds='Homme';
				  $membre->sexe = $fields;
				  }
			$role = Input::get('role');
				  if($role == 'responsable'){
				   $membre->role = $role;
				  }
				  else {
				  	$role='enseignant';
				  $membre->role = $role;
				  }
				
				   
            $membre->save();
            if($membre->role== 'responsable')
				{
			      $responsable=new Responsable();
				 $responsable->enseignants_id = $membre->id;
				 $responsable->save();
				}
        return redirect('enseignant');

    }



     public function destroy($id)
    {
        //if( Auth::user()->role->nom == 'admin')
           // {
        $membre = Enseignant::find($id);

             if($membre->role== 'responsable')
            {
                
                
                $user = DB::table('responsables')
                 ->where('enseignants_id', '=',$id);
                $user->delete();
            }
        $membre->delete();
        return redirect('enseignant');
            //}
    }
   public function details($id)
    {
        $membre = Enseignant::find($id);
        $ps=Promot::all();
        
        //***********calcul age******************
        $am = explode('/', $membre->date_N);
		$an = explode('/', date('d/m/Y'));
		if(($am[1] < $an[1]) || (($am[1] == $an[1]) && ($am[0] <= $an[0]))) 
			 
		  
	     { $age=$an[2] - $am[2];}
		else {$age=$an[2] - $am[2] - 1;}
        /************************************/ 
        if($membre->role=='responsable')  
        {
        $matieres = DB::table('matieres')
                ->join('responsables', 'responsables.idResp', '=', 'matieres.responsables_id')
                 ->select('*', DB::raw('matieres.id as idMat'))
                  ->where('responsables.enseignants_id', '=',$id)
                  ->get();         
        }  
        else{
        
         $matieres = DB::table('matieres')
                ->join('enseignant_matieres', 'enseignant_matieres.matieres_id', '=', 'matieres.id')
                ->select('*', DB::raw('matieres.id as idMat'))
                  ->where('enseignant_matieres.enseignants_id', '=',$id)
                  ->get();
        } 
        
             $membres=Enseignant::all();
             
        return view('admin.detailsEnseignant')->with([
            'membre' => $membre,
            'age'=>$age,
            'matieres' => $matieres,
            'membres' => $membres,
            'ps' => $ps
             
            
       ]);
    } 

/*****************************************************************/
public function edit($id)
    {
      $membre = Enseignant::find($id);
      $ps=Promot::all();
        
        //***********calcul age******************
        $am = explode('/', $membre->date_N);
        $an = explode('/', date('d/m/Y'));
        if(($am[1] < $an[1]) || (($am[1] == $an[1]) && ($am[0] <= $an[0]))) 
             
          
         { $age=$an[2] - $am[2];}
        else {$age=$an[2] - $am[2] - 1;}
        /************************************/ 
        if($membre->role=='responsable')  
        {
        $matieres = DB::table('matieres')
                ->join('responsables', 'responsables.idResp', '=', 'matieres.responsables_id')
                 ->select('*', DB::raw('matieres.id as idMat'))
                  ->where('responsables.enseignants_id', '=',$id)
                  ->get();         
        }  
        else{
        
         $matieres = DB::table('matieres')
                ->join('enseignant_matieres', 'enseignant_matieres.matieres_id', '=', 'matieres.id')
                ->select('*', DB::raw('matieres.id as idMat'))
                  ->where('enseignant_matieres.enseignants_id', '=',$id)
                  ->get();
        } 
        $membres=Enseignant::all();
        /////////////////////////////////////////////
        return view('admin.editEnseignant')->with([
            'membre' => $membre,
            'age'=>$age,
            'matieres' => $matieres,
            'membres' => $membres,
            'ps' => $ps

             
            
       ]);
            
        
    
    }

    public function update(Request $request , $id)
    {
       $membre = Enseignant::find($id);
        
        /*if($request->hasFile('img')){
            $file = $request->file('img');
            $file_name = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('/uploads/photo'),$file_name);

                       }*/
             

            $membre->nom = $request->input('nom');
            $membre->prenom = $request->input('prenom');
            $membre->email = $request->input('email');
            $membre->date_N = $request->input('date_naissance');
            $membre->grade = $request->input('grade');
            $membre->password = Hash::make($request->input('password'));
            $membre->num_tel = $request->input('num_tel');
           // $membre->photo = 'uploads/photo/'.$file_name;
            if($membre->role== 'responsable')
            {
                
                
                $user = DB::table('responsables')
                 ->where('enseignants_id', '=',$id);
                $user->delete();
            }

//sexe
             $fields = Input::get('sexe');
                  if($fields == 'Femme'){
                   $membre->sexe = $fields;
                  }
                  else {
                    $filelds='Homme';
                  $membre->sexe = $fields;
                  }
            $role = Input::get('role');
                  if($role == 'responsable'){
                   $membre->role = $role;
                  }
                  else {
                    $role='enseignant';
                  $membre->role = $role;
                  }
                
                   
            $membre->save();
            ////modif de table responsables
            
             if($membre->role== 'responsable')
                {
                  
                  $nbre = DB::table('responsables')->distinct('idResp')
                  ->where('enseignants_id', '=',$id)->count();
                  if($nbre==0)
                  {
                 $responsable=new Responsable();
                 $responsable->enseignants_id = $membre->id;
                 $responsable->save();
                  }
                }
            

        return redirect('enseignant/'.$id.'/details');

    }

}
