 <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;
class ArticleContoller extends Controller
{
    //
    public function articles(){
    	echo "affichage des articles";
    }
    public function article($id){
    	echo "affichage des article".$id;
    }
    public function newArticle(){
    	$newArticle= new Article();
    	$newArticle->nom="style";
    	$newArticle->prix=10;
    	$newArticle->couleur="rouge";
    	$newArticle->save();
    }
    public function listArticle(){
    	$articles=Article::all();
    	//print_r($articles);
    	return view('articles',['articles'=>$articles]);
    }

    public function create(){
       
        return view('article.create');
    }

    public function store(Request $request){
        $article= new Article();
        $article->nom=$request->input("nom");
         $article->prix=$request->input("prix");
          $article->couleur=$request->input("couleur");
       
        $article->save();
        return redirect('articles');

    }
    public function index(){
        $listArticle = Article::all();
        return view('article.index', ['articles' => $listArticle]);
    }

     public function edit($id){
        $article = Article::find($id);
        return view('article.edit', ['cc'=>$article]);
        //m la table article on a retirer un enregistrement de ligne $id 
        //puis stokénah f la case 'cc'  ($article)-->un enregistrement
    }
    public function update(Request $request, $id){
        $article = Article::find($id);
        $article->nom = $request->input('nom');
        $article->couleur = $request->input('couleur');
        $article->prix = $request->input('prix');
        $article->save();
        return redirect('articles');        
    }
      public function destroy($id){
        $article = Article::find($id);
        $article->delete();
        return redirect('articles');
    } 


}
