
<?php $__env->startSection('title','Editar cliente'); ?>
<?php $__env->startSection('styles'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('options'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('preference'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Edición de cliente
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('clientes.index')); ?>">clientees</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edición de clientee</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Edición de clientee</h4>
                    </div>

                    <?php echo Form::model($cliente,['route'=>['clientes.update',$cliente], 'method'=>'PUT','files' => true]); ?>



                    <div class="form-group">
                      <label for="name">Nombre</label>
                      <input type="text"
                        class="form-control" name="name" id="name" value="<?php echo e($cliente->name); ?>" aria-describedby="helpId" required>
                    </div>
                    
                   

                     <button type="submit" class="btn btn-primary mr-2">Editar</button>
                     <a href="<?php echo e(route('clientes.index')); ?>" class="btn btn-light">
                        Cancelar
                     </a>
                     <?php echo Form::close(); ?>

                </div>
                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php echo Html::script('panel/js/dropify.js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\danis\resources\views/admin/cliente/edit.blade.php ENDPATH**/ ?>