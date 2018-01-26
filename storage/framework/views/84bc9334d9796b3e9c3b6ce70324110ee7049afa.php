<?php $__env->startSection('title'); ?>
  Upload d'images
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenu'); ?>
    <br>
    <div class="col-sm-offset-3 col-sm-6">
        <div class="panel panel-primary">
            <div class="panel-heading">Envoi d'une photo</div>
            <div class="panel-body">
                <form method="POST" action="<?php echo url('photo'); ?>" files="true" enctype="multipart/form-data">
                  <?php echo e(csrf_field()); ?>

                    <div class="form-group <?php echo $errors->has('imagePost') ? 'has-error' : ''; ?>">
                        <input type="file" id="imagePost" name="imagePost" class="form-control" required role="img"></input>
                        <?php echo $errors->first('image', '<small class="help-block">:message</small>'); ?>

                    </div>
                    <input type="submit" value="Envoyer" class="btn btn-primary pull-right"></input>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templateContact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>