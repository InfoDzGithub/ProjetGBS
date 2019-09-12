<?php

namespace App\Http\Controllers;

use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;
use App\Etudiant;
use App\Promot;
use App\Groupe;
use Excel;
use App\Http\Controllers\Input;


class EtudiantController extends Controller
{
     public function create()
    { 
      $ps=Promot::all();

        
         return view('admin.etudiant.create')->with([

         'ps' => $ps]);
        
    }
    public function edit($id)
    {
       $etudiant=Etudiant::find($id);
       $promots=Promot::all();
       $groupes=Groupe::all();
        $ps=Promot::all();
        
        return view('admin.etudiant.edit')->with([
            'etudiant' => $etudiant,
            'promots' =>$promots,
            'groupes'=>$groupes,
            'ps' => $ps
       ]);
    }
    /*********************************************/
        public function details($id)
    {
       $etudiant=Etudiant::find($id);
       $promots=Promot::all();
       $groupes=Groupe::all();
        
        $ps=Promot::all();
        
        return view('admin.etudiant.details')->with([
            'etudiant' => $etudiant,
            'promots' =>$promots,
            'groupes'=>$groupes,
            'ps' => $ps
       ]);
    }
/************************************************/
     public function update(Request $request , $id)
    {
       $etudiant = Etudiant::find($id);
        
         $ps=Promot::all();
             
           if($request->hasFile('img')){
            $file = $request->file('img');
            $file_name = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('/uploads/photo'),$file_name);

        }
        else{
            $file_name="admin.png";
        }

            $etudiant->nom = $request->input('nom');
            $etudiant->prenom = $request->input('prenom');
            $etudiant->email = $request->input('email');
            $etudiant->dateN = $request->input('date_naissance');
            $etudiant->address = $request->input('address');
            $etudiant->groupes_id = $request->input('groupe');
            $etudiant->photo = 'uploads/photo/'.$file_name;
           
            $etudiant->save();
            
            
            

        return redirect('etudiant/'.$id.'/details')->with([

         'ps' => $ps]);

    }
  /*************************************************/
   public function destroy($id)
    {
        
        $etudiant = Etudiant::find($id);
             
        $etudiant->delete();
        return back();
            //}
    }
   
 
/****************************************************/
 public function store(Request $request)
    {
        /*$this->validate($request,
            ['select_file' => 'required|mimes:xls,xlsx']);*/
        $path=$request->file('select_file')->getRealPath();
        $data= Excel::load($path)->get();
        if($data->count() > 0)
        {
            foreach($data->toArray() as $key =>$value)
            {
                foreach($value as $row)
                {
                    $insert_data[]=array(
                        'nom' => $row['nom'],
                        'prenom' => $row['prenom'],
                        'dateN' => $row['date_naissance'],
                        'address' => $row['address'],
                        'email' => $row['email'],
                        'password' => $row['password'],
                        'groupes_id' => $row['grp_id'],
                        'photo' => $row['photo']
                        );
                }
            }
            if(!empty($insert_data))
            {
                DB::table('etudiants')->insert($insert_data);
            }
        }
           
        return back()->with('success','Excel Data Imported successufuly');

    }
}
