<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promot;

use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class PromotController extends Controller
{
     public function create()
    {
    	$ps=Promot::all();
    	//$ps = DB::table('promots')->orderBy('annee','DESC');
    	//$ps = Promot::orderBy('annee', 'ASC')->all();
    	return view('admin.promot.create')->with([
            'ps' => $ps
        ]);
    }
    
    public function index($id)
    {
        $etudiants = DB::table('etudiants')
                ->join('groupes', 'groupes.idGroup', '=', 'etudiants.groupes_id')
                 ->join('promots', 'groupes.promots_id', '=', 'promots.idPromot')
                  ->select('*', DB::raw('etudiants.id as code'))
                ->where('groupes.promots_id', '=',$id)
                /*->where('users.id', '=',$id_user)
                ->orderBy('annee', 'desc')*/
                ->get();
                $ps=Promot::all();

         return view('admin.etudiant.index')->with([
            'etudiants' => $etudiants,
            'ps' => $ps

        ]); 
    }
     public function store(Request $request)
    {
        $promot = new Promot();
         
          

            $promot->filiere = $request->input('f');
            $promot->annee = $request->input('an');
            
			$promot->save();
         
        return back();

    }
}
