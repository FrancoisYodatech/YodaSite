@extends ('template1')

@section ('titre')
  Factures
@endsection

@section ('h1')
  Ceci est la facture numéro {{ $numero }}
@endsection

@section ('body')
<table border="1" cellpadding="15">
 <tr>
    <th>Nom produit</th>
    <th>Référence</th>
    <th>Description</th>
    <th>prix</th>
 </tr>
 <tr>
    <td>Figurine de Yoda</td>
    <td>Fi__Y0°d855</td>
    <td>Magnifique figurine de Yoda dans la fleur de l'age.
      </br>Article en résine de cèdre peinte à la main.
      </br>Dimensions : 15" x 5" x 6" (cm)
    </td>
    <td>95,99€</td>
 </tr>
 <tr>
    <td>Sabre de Luke Skywalker</td>
    <td>Sb-_-lK&sith°13567</td>
    <td>Authentique sabre laser du légendaire Luke Skywalker
      </br>Existe en diférentes couleurs.
      </br>Possibilité de payer 150 fois sans frais.
      </br>Possibilité de crédit du 200 ans si vous métrisez la force.
    </td>
    <td>157 235 456 852 841 569,0000001€</td>
 </tr>
 <tr>
    <td>Stagiaire</td>
    <td>st_arnak-6mois</td>
    <td>Un stagiaire qui pourra faire toutes les tâches les plus ingrates.
      </br>Vous en avez marre de travaillez?
      </br>Achetez un stagiaire pour faire votre travail à votre place.
      </br>possibilté de traitez comme un sous-fifre pour votre égaux.
      </td>
    <td>580,84€/mois
      </br>(possibillité de gratuité en dessous de 9 semaines!!!)
    </td>
 </tr>
</table>
@endsection

@section ('redirect')
  <a class="btn btn-primary" href="https://yodasite.app/article/{{$numero}}">L'article du meme Numéro</a>
@endsection
