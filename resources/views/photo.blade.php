@extends('templateContact')

@section('title')
  Upload d'images
@endsection

@section('contenu')
    <br>
    <div class="col-sm-offset-3 col-sm-6">
        <div class="panel panel-primary">
            <div class="panel-heading">Envoi d'une photo</div>
            <div class="panel-body">
                <form method="POST" action="{!! url('photo') !!}" files="true" enctype="multipart/form-data">
                  {{ csrf_field() }}
                    <div class="form-group {!! $errors->has('imagePost') ? 'has-error' : '' !!}">
                        <input type="file" id="imagePost" name="imagePost" class="form-control" required role="img"></input>
                        {!! $errors->first('image', '<small class="help-block">:message</small>') !!}
                    </div>
                    <input type="submit" value="Envoyer" class="btn btn-primary pull-right"></input>
                </form>
            </div>
        </div>
    </div>
@endsection
