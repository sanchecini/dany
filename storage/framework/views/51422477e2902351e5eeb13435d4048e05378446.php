
<?php $__env->startSection('title','Registrar cliente'); ?>
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
            Registro de clientes
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('clientes.index')); ?>">Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro de clientes</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de clientes</h4>
                    </div>
                    <?php echo Form::open(['route'=>'clientes.store', 'method'=>'POST','files' => true]); ?>

                    
                   
                    <?php echo $__env->make('admin.cliente._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                   

                     <button type="submit" class="btn btn-primary mr-2">Registrar</button>
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
<?php echo Html::script('panel/js/data-table.js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\danis\resources\views/admin/cliente/create.blade.php ENDPATH**/ ?>