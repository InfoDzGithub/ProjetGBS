<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enseignant;
use App\Responsable;
use App\Promot;
use App\Matiere;
use App\User;

use App\Codage;
use App\Etudiant;
use App\Admin;
use Illuminate\Support\Facades\Auth;

use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class PromotController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function promo()
    {
       $ps=Promot::all();
      $id = auth::user();
       $etudiants = Etudiant::All();
      if ($id->type == 'EN' || $id->type == 'ER')
        $user = Enseignant::find($id->id_user); 
    else if ($id->type == 'RC')
        $user = codage::find($id->id_user);
    else 
        $user = admin::find($id->id_user);
    
                $modules = Matiere::all();
         if( Auth::user()->type == 'AD'){
    
           
           $userr = DB::table('users')
           ->join('enseignants','enseignants.id','=','id_user')
           ->where('enseignants.id',Auth::user()->id_user)
           ->first();
           return view('admin.promot.index')->with([
           'user' => $user,
           'ps' => $ps,
            'modules' => $modules,
            'etudiants' => $etudiants,
            'userr' =>$userr
           ]);
           
            }
            else{
                 $ps=Promot::all();
                return view('page.4042')->with([
                
                'ps' => $ps]);
            }
      
        
    }
     public function create()
    {
      if( Auth::user()->type == 'EN' || Auth::user()->type == 'ER'){
    
           
           $userr = DB::table('users')
           ->join('enseignants','enseignants.id','=','id_user')
           ->where('enseignants.id',Auth::user()->id_user)
           ->first();
           $ps=Promot::all();
      //$ps = DB::table('promots')->orderBy('annee','DESC');
      //$ps = Promot::orderBy('annee', 'ASC')->all();
      return view('admin.promot.create')->with([
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
    
    public function index($id)
    {
      if( Auth::user()->type == 'EN' || Auth::user()->type == 'ER'){
    
           
           $userr = DB::table('users')
           ->join('enseignants','enseignants.id','=','id_user')
           ->where('enseignants.id',Auth::user()->id_user)
           ->first();
           $etudiants = DB::table('etudiants')
                ->join('groupes', 'groupes.id', '=', 'etudiants.groupes_id')
                 ->join('promots', 'groupes.promots_id', '=', 'promots.idPromot')
                  ->select('*', DB::raw('etudiants.id as code'))
                ->where('groupes.promots_id', '=',$id)
                /*->where('users.id', '=',$id_user)
                ->orderBy('annee', 'desc')*/
                ->get();
                $ps=Promot::all();
                
         return view('admin.etudiant.index')->with([
            'etudiants' => $etudiants,
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
      if( Auth::user()->type == 'EN' || Auth::user()->type == 'ER'){
    
           
           $userr = DB::table('users')
           ->join('enseignants','enseignants.id','=','id_user')
           ->where('enseignants.id',Auth::user()->id_user)
           ->first();
            $promot = new Promot();
         
          

            $promot->filiere = $request->input('f');
            $promot->annee = $request->input('an');
            
      $promot->save();
         
        return back();
        }
        else{
             $ps=Promot::all();
            return view('page.4042')->with([
            
            'ps' => $ps]);
        }
       

    }
}
