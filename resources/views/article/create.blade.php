@extends('layouts.master');
@Section('content');
<form action="{{url('articles')}}" method="POST">
	 {{ csrf_field()}}
	 <table>
	 	<tr>
	 		<td>nom</td><td><input type="text" name="nom"></td>
	 	</tr>
	 	<tr>
	 		<td>couleur</td><td><input type="text" name="couleur"></td>
	 	</tr>
	 	<tr>
	 		<td>prix</td><td><input type="text" name="prix"></td>
	 	</tr>
	 </table>
	 <input type="submit" name="" value="save">
</form>
@endsection