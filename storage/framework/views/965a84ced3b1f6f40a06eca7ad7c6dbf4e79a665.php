<?php $__env->startSection('title'); ?>
  Formulaire validé
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenu'); ?>
  <br>
  <div class="col-sm-offset-3 col-sm-6">
      <div class="panel panel-primary">
          <div class="panel-heading">Contactez-moi</div>
          <div class="panel-body">
              Merci. Votre message a été transmis à l'administrateur du site. Vous recevrez une réponse rapidement.
          </div>
      </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templateContact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>