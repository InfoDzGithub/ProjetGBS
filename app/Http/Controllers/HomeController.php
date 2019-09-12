<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Enseignant;
use App\Responsable;
use App\Promot;
use App\Matiere;
use App\User;
use Illuminate\support\Facades\DB;
use App\Codage;
use App\Admin;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function profil()
    {
       
       $ps=Promot::all();
       $id = auth::user();
      if ($id->type == 'EN' || $id->type == 'ER')
        $user = Enseignant::find($id->id_user); 
    else if ($id->type == 'RC')
        $user = codage::find($id->id_user);
    else 
        $user = admin::find($id->id_user);

    if( Auth::user()->type == 'AD' || Auth::user()->type == 'EN' || Auth::user()->type == 'ER'){
        $userr = DB::table('users')
           ->join('enseignants','enseignants.id','=','id_user')
           ->where('enseignants.id',Auth::user()->id_user)
           ->first();

          
            return view('profil')->with([
                'userr'=> $userr,
               'user' => $user,
               'ps' => $ps
                
               ]);
        }
    else{
        $userr = DB::table('users')
           ->join('codages','codages.id','=','id_user')
           ->where('codages.id',Auth::user()->id_user)
           ->first();

          
            return view('profil')->with([
                'userr'=> $userr,
               'user' => $user,
               'ps' => $ps
                
               ]);
        }
    }
}
