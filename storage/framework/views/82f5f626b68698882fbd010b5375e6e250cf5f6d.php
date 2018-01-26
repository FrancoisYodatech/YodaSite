<?php $__env->startSection('contenu'); ?>
  <h1>Hello World!!!</h1>
    <form method="POST" action="<?php echo url('users'); ?>" accept-charset="UTF-8">
        <!-- <input name="_token" type="hidden" value="pV1vWWdUqFDfYsBjKag43C3NvzbIC0lHtMnv9BpI"> -->
        <!-- <?php echo csrf_field(); ?> -->
         <?php echo e(csrf_field()); ?>

        <label for="nom">Entrez votre nom : </label>
        <input name="inputNom" type="text" id="inputNom" required>
        <input type="submit" value="Envoyer !">
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templateForm', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>