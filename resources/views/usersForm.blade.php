@extends('templateForm')

@section('contenu')
  <h1>Hello World!!!</h1>
    <form method="POST" action="{!! url('users') !!}" accept-charset="UTF-8">
        <!-- <input name="_token" type="hidden" value="pV1vWWdUqFDfYsBjKag43C3NvzbIC0lHtMnv9BpI"> -->
        <!-- {!! csrf_field() !!} -->
         {{ csrf_field() }}
        <label for="nom">Entrez votre nom : </label>
        <input name="inputNom" type="text" id="inputNom" required>
        <input type="submit" value="Envoyer !">
    </form>
@endsection
