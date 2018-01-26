<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>Prise de contact sur YodaSite</h2>
    <p>Réception d'une prise de contact avec les éléments suivants :</p>
    <ul>
      <li><strong>Nom</strong> : <?php echo e($contact['nomContact']); ?></li>
      <li><strong>Email</strong> : <?php echo e($contact['emailContact']); ?></li>
      <li><strong>Message</strong> : <?php echo e($contact['textContact']); ?></li>
    </ul>
  </body>
</html>
