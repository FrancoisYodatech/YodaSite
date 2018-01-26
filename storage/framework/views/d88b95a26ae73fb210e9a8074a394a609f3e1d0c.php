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
                <div style="margin-top:10px;">
                  <a href="https://yodasite.app/photo" type="button "class="btn btn-primary col-lg-offset-4 col-lg-4">Re-Uploader une photo</a>
                </div>
            </div>
        </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templateContact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>