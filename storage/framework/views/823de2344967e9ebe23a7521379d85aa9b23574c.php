<?php $__env->startSection('title'); ?>
  Formulaire de contact
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenu'); ?>
    <br>
    <div class="col-sm-offset-3 col-sm-6">
        <div class="panel panel-info">
            <div class="panel-heading">Contactez-moi</div>
            <div class="panel-body">
              <form method="POST" action="<?php echo url('contact'); ?>" accept-charset="UTF-8">
                  <?php echo e(csrf_field()); ?>

                    <div class="form-group <?php echo $errors->has('nomContact') ? 'has-error' : ''; ?>">
                        <input type="text" id="nomContact" name="nomContact" class="form-control" placeholder="Votre nom" required></input>
                        <?php echo $errors->first('nomContact', '<small class="help-block">:message</small>'); ?>

                    </div>
                    <div class="form-group <?php echo $errors->has('emailContact') ? 'has-error' : ''; ?>">
                        <input type="email" id="emailContact" name="emailContact" class="form-control" placeholder="votre email" required></input>
                        <?php echo $errors->first('emailContact', '<small class="help-block">:message</small>'); ?>

                    </div>
                    <div class="form-group <?php echo $errors->has('textContact') ? 'has-error' : ''; ?>">
                        <textarea id="textContact" name="textContact" class="form-control" rows="5" placeholder="votre message" required></textarea>
                        <?php echo $errors->first('textContact', '<small class="help-block">:message</small>'); ?>

                    </div>
                    <input type="submit" value="Envoyer" class="btn btn-info pull-right">
              </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templateContact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>