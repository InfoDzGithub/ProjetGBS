
<h1>Liste des articles</h1>
<table border=1>
 @foreach($articles as $article)
   <tr>
      <td>{{$article->id}}</td>
       <td>{{$article->nom}}</td>
        <td>{{$article->prix}}</td>
         <td>{{$article->couleur}}</td>
         
   </tr>
   @endforeach
</table>

