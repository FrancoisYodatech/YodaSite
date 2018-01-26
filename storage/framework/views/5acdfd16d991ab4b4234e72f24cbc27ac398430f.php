<?php $__env->startSection('title'); ?>
  Image Uploadée
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenu'); ?>
    <br>
    <div class="col-sm-offset-3 col-sm-6">
        <div class="panel panel-primary">
            <div class="panel-heading">Envoi d'une photo</div>
            <div class="panel-body">
                Merci. Votre photo a bien été reçue et enregistrée.
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>