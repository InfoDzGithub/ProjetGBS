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
class MatiereController extends Controller
{
     public function index()
    {
    	
    	 $matieres = Matiere::all(); 
        $ps=Promot::all();
         return view('admin.matiere.index' )
         ->with([
          'matieres' => $matieres,
         'ps' => $ps]);
    }
     public function create()
    {
        $membres = Enseignant::all();
        $responsables = Responsable::all();
        $ps=Promot::all();
         return view('admin.matiere.create')->with([
            'membres' => $membres,
            'responsables' => $responsables,
            'ps' => $ps
            
        ]);
    	
    }
    /*******************************************/
    public function store(Request $request)
    {
        $matiere = new Matiere();
          

            $matiere->nomMat = $request->input('nom');
            $matiere->heurCour = $request->input('cour');
            $matiere->heurTD = $request->input('td');
            $matiere->heurTP = $request->input('tp');
            $matiere->cofficient = $request->input('coefficient');
            $matiere->responsables_id = $request->input('responsable');
			$matiere->save();
            $members =  $request->input('membre');
        foreach ($members as $key => $value) {
            $enseignant_matier = new EnseignantMatiere();
            $enseignant_matier->matieres_id = $matiere->id;
            $enseignant_matier->enseignants_id = $value;
            $enseignant_matier->save();

         } 
        return redirect('matiere');

    }
/**********************************************************/
public function edit($id)
    {
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
             'ps' => $ps

            
        ]);
       
            
        
    
    }
    /******************************************************/
    public function update(Request $request , $id)
    {
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
/****************************************************************/
public function destroy($id)
    {
        //if( Auth::user()->role->nom == 'admin')
           // {
        $matiere = Matiere::find($id);

        $enseignant_matiere = DB::table('enseignant_matieres')
          ->where('matieres_id', '=',$id);
          $enseignant_matiere->delete();
            
        $matiere->delete();
        return redirect('matiere');
            //}
    }

/****************************************************************/
 public function details($id)
    {
        $matiere = Matiere::find($id);
         $ps=Promot::all();
         $listEns = DB::table('enseignant_matieres')
                   ->join('enseignants', 'enseignants.id', '=', 'enseignant_matieres.enseignants_id')
                ->where('enseignant_matieres.matieres_id', '=',$id)
                ->get();
          $examens = DB::table('examens')
                ->where('examens.matieres_id', '=',$id)
                ->get();
        return view('admin.matiere.details')->with([
            'matiere' => $matiere,
            'listEns'=>$listEns,
            'examens'=>$examens,
             'ps' => $ps
       ]);
    } 
}
