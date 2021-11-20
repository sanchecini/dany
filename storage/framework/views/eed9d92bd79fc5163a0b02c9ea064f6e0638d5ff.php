<?php $__env->startSection('title','Panel administrador'); ?>
<?php $__env->startSection('styles'); ?>
<style type="text/css">
    .unstyled-button {
        border: none;
        padding: 0;
        background: none;
    }

</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('options'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('preference'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Panel administrador
        </h3>
    </div>

    

    
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php echo Html::script('panel/js/data-table.js'); ?>

!! Html::script('panel/js/chart.js') !!}


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\danis\resources\views/home.blade.php ENDPATH**/ ?>