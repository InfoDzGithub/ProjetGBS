<?php

namespace App\Http\Controllers;

use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;
use App\Etudiant;
use App\Promot;
use App\Groupe;
use Excel;

use App\User;
use Illuminate\Support\Facades\Auth;


class EtudiantController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

     public function create()
    { 
      if( Auth::user()->type == 'AD'){
      $ps=Promot::all();
      $userr = DB::table('users')
           ->join('enseignants','enseignants.id','=','id_user')
           ->where('enseignants.id',Auth::user()->id_user)
           ->first();

        
         return view('admin.etudiant.create')->with([
          'userr'=> $userr,

         'ps' => $ps]);
         }
            else{
                 $ps=Promot::all();
                return view('page.4042')->with([
                
                'ps' => $ps]);
            }
        
    }
    public function edit($id)
    {
      if( Auth::user()->type == 'AD'){
       $etudiant=Etudiant::find($id);
       $promots=Promot::all();
       $groupes=Groupe::all();
       $ps=Promot::all();
       $userr = DB::table('users')
         ->join('enseignants','enseignants.id','=','id_user')
         ->where('enseignants.id',Auth::user()->id_user)
         ->first();
        //$idPro = $request->input('prm');
          //$idPro=$id2;
       //$idPro= Input::get ( 'prm' );
        
        return view('admin.etudiant.details')->with([
            'etudiant' => $etudiant,
            //'idPro' => $idPro,
            'promots' =>$promots,
            'groupes'=>$groupes,
            "userr" => $userr,
            'ps' => $ps
       ]);
        }
            else{
                 $ps=Promot::all();
                return view('page.4042')->with([
                
                'ps' => $ps]);
            }
    }
    /*********************************************/
        public function details($id)
    {
      if( Auth::user()->type == 'AD'){
       $etudiant=Etudiant::find($id);
        $userr = DB::table('users')
         ->join('enseignants','enseignants.id','=','id_user')
         ->where('enseignants.id',Auth::user()->id_user)
         ->first();
       if($etudiant==null){}
       $promots=Promot::all();
       $groupes=Groupe::all();

        //$idPro = $request->input('prm');
          //$idPro=$id2;
       //$idPro= Input::get ( 'prm' );
        $ps=Promot::all();
        
        return view('admin.etudiant.details')->with([
            'etudiant' => $etudiant,
           // 'idPro' => $idPro,
            'promots' =>$promots,
            'groupes'=>$groupes,
            'ps' => $ps
       ]);
      }
            else{
                 $ps=Promot::all();
                return view('page.4042')->with([
                
                'ps' => $ps]);
            }
    }
/************************************************/
     public function update(Request $request , $id)
    {
      if( Auth::user()->type == 'AD'){
       $etudiant = Etudiant::find($id);
        $userr = DB::table('users')
           ->join('enseignants','enseignants.id','=','id_user')
           ->where('enseignants.id',Auth::user()->id_user)
           ->first();
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
            $etudiant->etat = $request->input('etat');
            $etudiant->photo = 'uploads/photo/'.$file_name;
           
            $etudiant->save();
            
            
            

        return redirect('etudiant/'.$id.'/details')->with([
          "userr" => $userr,

         'ps' => $ps]);
        }
            else{
                 $ps=Promot::all();
                return view('page.4042')->with([
                
                'ps' => $ps]);
            }

    }
  /*************************************************/
   public function destroy($id)
    {
        if( Auth::user()->type == 'AD'){
        $etudiant = Etudiant::find($id);
           
        $etudiant->delete();
        return redirect('promot');
          }
            else{
                 $ps=Promot::all();
                return view('page.4042')->with([
                
                'ps' => $ps]);
            }

    }
   
 
/****************************************************/
 public function store(Request $request)
    {
if( Auth::user()->type == 'AD'){
        $this->validate($request,
            ['select_file' => 'required|mimes:xls,xlsx']);

        $imgname = $request->file('select_img')->getClientOriginalName();
        $request->file('select_img')->move(public_path('/uploads/photo'),$imgname);
        $path=$request->file('select_file')->getRealPath();
        $data= Excel::load($path)->get();
        if($data->count() > 0)
        {
            foreach($data->toArray() as $key =>$value)
            {
                //foreach($value as $row){
                    $insert_data[]=array(
                        'nom' => $value['nom'],
                        'prenom' => $value['prenom'],
                        'dateN' => $value['date_naissance'],
                        'address' => $value['address'],
                        'email' => $value['email'],
                        'password' => $value['password'],
                        'groupes_id' => $value['groupe'],
                        'photo' => 'uploads/photo/'.$value['photo']
                        );
                    $groupe=DB::table('groupes')
                    ->where('groupes.nomGroup', '=',$value['groupe'])
                    ->get();
                    if($groupe==null){
                      $Groupes = new Groupe();
                      $Groupes->nomGroup = $value['groupe'];
                      $Groupes->save();

                    }
                //}
            }
            if(!empty($insert_data))
            {
                DB::table('etudiants')->insert($insert_data);
            }
        }
           
        return redirect('promot')->with('success','Excel Data Imported successufuly');
}
            else{
                 $ps=Promot::all();
                return view('page.4042')->with([
                
                'ps' => $ps]);
            }

    }
}
