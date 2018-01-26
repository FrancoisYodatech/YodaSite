@extends('templateContact')

@section('title')
  Image Uploadée
@endsection

@section('contenu')
    <br>
    <div class="col-sm-offset-3 col-sm-6">
        <div class="panel panel-primary">
            <div class="panel-heading">Envoi d'une photo</div>
            <div class="panel-body">
                Merci. Votre photo a bien été reçue et enregistrée.
                <div style="margin-top:10px;">
                  <a href="https://yodasite.app/photo" type="button "class="btn btn-primary col-lg-offset-4 col-lg-4">Re-Uploader une photo</a>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
