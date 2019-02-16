@extends('layouts.app')
@section('content')
<form action= "{{url('articles/'. $cc->id)}}" method="POST">
	<input type="hidden" name="_method" value="PUT">
	{{ csrf_field()}}
	<table>
		<tr><td>nom</td><td><input type="text" name="nom" value="{{$cc->nom}}"></td></tr>
		<tr><td>couleur</td><td><input type="text" name="couleur"
        value="{{$cc->couleur}}"></td></tr>
        <tr><td>prix</td><td><input type="text" name="prix" value="{{$cc->prix}}"></td></tr>
	</table>
	<input type="submit" name="" value="Modifier">
</form>
@endsection
