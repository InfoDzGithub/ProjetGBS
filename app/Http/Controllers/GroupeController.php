<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Promot;
use App\Groupe;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use App\EnseignantMatiere;
use App\Grp_ens_mod;
use App\User;
use Illuminate\Support\Facades\Auth;

class groupeController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

  public function create()
    {    
       if( Auth::user()->type == 'AD'){
        
       $userr = DB::table('users')
       ->join('enseignants','enseignants.id','=','id_user')
       ->where('enseignants.id',Auth::user()->id_user)
       ->first();
        }
        $ps=Promot::all();
        $gs=Groupe::all();
        return view('admin.groupe.create')->with([
            'gs' => $gs,
            'userr' => $userr,
            'ps' => $ps
        ]);
        else{
             $ps=Promot::all();
            return view('page.4042')->with([
            
            'ps' => $ps]);
        }
        
    }
    
    public function index($idPromot)
    {
      if( Auth::user()->type == 'AD'){
        
       $userr = DB::table('users')
       ->join('enseignants','enseignants.id','=','id_user')
       ->where('enseignants.id',Auth::user()->id_user)
       ->first();
       $groupes = Groupe::where('promots_id', $idPromot)
        ->get();
        $ps=Promot::all();
        $nbr = DB::table('etudiants')
             ->select( DB::raw('count(*) as total,groupes_id'))
             ->groupBy('groupes_id')
             ->get();

            return view('admin.groupe.index')->with([
            'groupes' => $groupes,
            'ps' => $ps,
            'userr' => $userr,
            'nbr' => $nbr

        ]);
        }
        else{
             $ps=Promot::all();
            return view('page.4042')->with([
            
            'ps' => $ps]);
        }

    }



 public function store(Request $request,$idM,$idG)
    {
        if( Auth::user()->type == 'AD'){
        
       $userr = DB::table('users')
       ->join('enseignants','enseignants.id','=','id_user')
       ->where('enseignants.id',Auth::user()->id_user)
       ->first();
        if($request->input('cour')!=null)
        {
         
            $enseignant_matier=DB::table('enseignant_matieres')
             ->where([
                ['enseignants_id', '=',$request->input('cour')],
                ['Matieres_id','=',$idM]
            ])->first();

            $existe=DB::table('grp_ens_mods')
             ->where([
                ['group_id','=',$idG],
                ['type',"=","cour"]
            ])->exists();
             if(!$existe){
              $enseignant_matier_group = new Grp_ens_mod();
              $enseignant_matier_group->group_id = $idG;
              $enseignant_matier_group->Ens_mod_id = $enseignant_matier->id;
              $enseignant_matier_group->type = "cour";
              $enseignant_matier_group->save();
            }else{
               $tmp=DB::table('grp_ens_mods')
                     ->where([
                        ['group_id','=',$idG],
                        ['type',"=","cour"]])
                     ->first();
                     $tmp=Grp_ens_mod::find($tmp->id);
               $tmp->group_id = $idG;
               $tmp->Ens_mod_id = $enseignant_matier->id;
               $tmp->type = "cour";
               $tmp->save();
            }
        }
        if($request->input('TD')!=null)
        {
       $enseignant_matier_group = new Grp_ens_mod();
            $enseignant_matier=DB::table('enseignant_matieres')
             ->where([
                ['enseignants_id', '=',$request->input('TD')],
                ['Matieres_id','=',$idM]
            ])->first();
              $existe=DB::table('grp_ens_mods')
             ->where([
                ['ens_mod_id', '=', $enseignant_matier->id],
                ['group_id','=',$idG],
                ['type',"=","TD"]
            ])->count();
             if($existe==0){
            $enseignant_matier_group->group_id = $idG;
            $enseignant_matier_group->Ens_mod_id = $enseignant_matier->id;
            $enseignant_matier_group->type = "TD";
            $enseignant_matier_group->save();
        }
        }
        if($request->input('TP')!=null)
        {
        $enseignant_matier_group = new Grp_ens_mod();
            $enseignant_matier=DB::table('enseignant_matieres')
             ->where([
                ['enseignants_id', '=',$request->input('TP')],
                ['Matieres_id','=',$idM]
            ])->first();
              $existe=DB::table('grp_ens_mods')
             ->where([
                ['ens_mod_id', '=', $enseignant_matier->id],
                ['group_id','=',$idG],
                ['type',"=","TP"]
            ])->count();
             if($existe==0){
            $enseignant_matier_group->group_id = $idG;
            $enseignant_matier_group->Ens_mod_id = $enseignant_matier->id;
            $enseignant_matier_group->type = "TP";
            $enseignant_matier_group->save();
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

 public function destroy($id)
    {
    if( Auth::user()->type == 'AD'){
        
       $userr = DB::table('users')
       ->join('enseignants','enseignants.id','=','id_user')
       ->where('enseignants.id',Auth::user()->id_user)
       ->first();
        $groupes = Groupe::find($id);
      
        $groupes->delete();
         return back(); 
        
        }
        else{
             $ps=Promot::all();
            return view('page.4042')->with([
            
            'ps' => $ps]);
        }
       
    }









}
