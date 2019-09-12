<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Matiere;
use App\Promot;
use App\Paquet;
use App\Examen;
use App\Groupe;
use App\Code;
use App\Etudiant;
use Excel;
//use  App\Http\Controllers\str_rand();
class PaquetController extends Controller
{
   public function create($id)
    {
        $matieres=Matiere::all();
        $ps=Promot::all();
        $promotId=$id;
         return view('gCodage.matieres')->with([
            'ps' => $ps,
            'matieres'=>$matieres,
            'promotId'=>$promotId
            
        ]);
    	
    }
     public function cr()
    {
        $matieres=Matiere::all();
        $ps=Promot::all();
       
         return view('gCodage.codage')->with([
            'ps' => $ps,
            'matieres'=>$matieres
            
        ]);
    	
    }
    public function create2($id,$idP)
    {
        $examens=Examen::all();
        //$examens = Examen::whereYear('created_at', '2019')->get();
        //j dois selectionner les examen qui ont date _examen=annee de promot 
        //et matieres_id=$id
        $ps=Promot::all();
         return view('gCodage.examens')->with([
            'ps' => $ps,
            'id'=>$id,
            'idP'=>$idP,
            'examens'=>$examens
            
        ]);
    	
    }
     public function codage($id)
    {
        
     /* $etudiants = DB::table('etudiants')
                ->join('groupes', 'groupes.idGroup', '=', 'etudiants.id')
                ->select('*', DB::raw('etudiants.id as code'))
                  ->where('groupes.promots_id', '=',$id)
                  ->get();*/
         
        $idP=$id;
        $ps=Promot::all();
         return view('gCodage.paquet')->with([
            'ps' => $ps,
            'idP'=>$idP
            //'etudiants'=>$etudiants,
            
            
        ]);
    	
    }
    public function affichage()
    {
    
        $ps=Promot::all();
         return view('gCodage.create')->with([
            'ps' => $ps
            
        ]);
    	
    }
   /***************************************************/
   public function store(Request $request)
    {
       /*$this->validate($request,
            ['select_file' => 'required|mimes:xls,xlsx']);*/
        $path=$request->file('file')->getRealPath();
        $data= Excel::load($path)->get();
        if($data->count() > 0)
        {
            foreach($data->toArray() as $key =>$value)
            {
                foreach($value as $rw)
                {
                    $insert_data[]=array(
                    	'etudiants_id' => $rw['ID'],
                        'code' => $rw['Code']
                        );
                }
            }
            if(!empty($insert_data))
            {
                DB::table('codes')->insert($insert_data);
            }

        }
           
        return back()->with('success','Excel Data Imported successufuly');

    }
}
