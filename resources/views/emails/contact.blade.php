<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>Prise de contact sur YodaSite</h2>
    <p>Réception d'une prise de contact avec les éléments suivants :</p>
    <ul>
      <li><strong>Nom</strong> : {{ $contact['nomContact'] }}</li>
      <li><strong>Email</strong> : {{ $contact['emailContact'] }}</li>
      <li><strong>Message</strong> : {{ $contact['textContact'] }}</li>
    </ul>
  </body>
</html>
