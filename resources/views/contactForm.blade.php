@extends('templateContact')

@section('title')
  Formulaire de contact
@endsection

@section('contenu')
    <br>
    <div class="col-sm-offset-3 col-sm-6">
        <div class="panel panel-primary">
            <div class="panel-heading">Contactez-moi</div>
            <div class="panel-body">
              <form method="POST" action="{!! url('contactForm') !!}" accept-charset="UTF-8">
                  {{ csrf_field() }}
                    <div class="form-group {!! $errors->has('nomContact') ? 'has-error' : '' !!}">
                        <input type="text" id="nomContact" name="nomContact" class="form-control" placeholder="Votre nom" required></input>
                        {!! $errors->first('nomContact', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('emailContact') ? 'has-error' : '' !!}">
                        <input type="email" id="emailContact" name="emailContact" class="form-control" placeholder="votre email" required></input>
                        {!! $errors->first('emailContact', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('textContact') ? 'has-error' : '' !!}">
                        <textarea id="textContact" name="textContact" class="form-control" rows="5" placeholder="votre message" required></textarea>
                        {!! $errors->first('textContact', '<small class="help-block">:message</small>') !!}
                    </div>
                    <input type="submit" name="envoieContact" value="Envoyer" class="btn btn-primary pull-right">
              </form>
            </div>
        </div>
    </div>
@endsection
