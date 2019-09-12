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
use App\Matiere;
use App\Promot;
use App\Paquet;
class ExamenController extends Controller
{

	 
/**********************************************************/
    public function create($id)
    {
        $matieres = Matiere::all();
        $idMatiere=$id;
        $ps=Promot::all();
         return view('admin.examen.create')->with([
            'matieres' => $matieres,
            'idMatiere'=>$idMatiere,
            'ps' => $ps
            
        ]);
    	
    }
   /**********************************************/
    public function store(Request $request,$id)
    {
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
            $paquet=new Paquet();
            $paquet->examens_id=$examen->id;
            $paquet->save();
			

         
        return redirect('matiere/'.$id.'/details');

    }
 /*****************************************************************/
 public function destroy($id)
    {
        
        $examen = Examen::find($id);
       $idMatiere=$examen->matieres_id;
       $paquet=Paquet::where('examens_id','=',$id);
       $paquet->delete();
        $examen->delete();
        return redirect('matiere/'.$idMatiere.'/details');
            //}
    }
  /**********************************************************/
public function edit($id)
    {
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
           'ps' => $ps

            
        ]);
       
            
        
    
    }
    /******************************************************/
public function update(Request $request , $id)
    {
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
/*******************************************************************
public function getDownload($id)
{

    //PDF file is stored under project/public/download/info.pdf

    $file= public_path(). "/download/cpc.pdf";

 

    $headers = array(

              'Content-Type: application/pdf',

            );
//Response::download($file, 'filename.pdf', $headers);
 
$download = response()->download($file, 'filename.pdf', $headers);
          return redirect('matiere/'.$id.'/details');

}*/

}
