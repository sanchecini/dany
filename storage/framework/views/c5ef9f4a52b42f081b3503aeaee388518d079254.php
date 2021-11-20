
<?php $__env->startSection('title','Editar producto'); ?>
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
            Edición de producto
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('productos.index')); ?>">productoes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edición de productoe</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Edición de productoe</h4>
                    </div>

                    <?php echo Form::model($producto,['route'=>['productos.update',$producto], 'method'=>'PUT','files' => true]); ?>



                    <div class="form-group">
                      <label for="name">Nombre</label>
                      <input type="text"
                        class="form-control" name="producto" id="producto" value="<?php echo e($producto->producto); ?>" aria-describedby="helpId" required>
                    </div>

                    <div class="form-group">
                      <label for="name">Kilos</label>
                      <input type="text"
                        class="form-control" name="kilos" id="kilos" value="<?php echo e($producto->kilos); ?>" aria-describedby="helpId" >
                    </div>
                    
                   

                     <button type="submit" class="btn btn-primary mr-2">Editar</button>
                     <a href="<?php echo e(route('productos.index')); ?>" class="btn btn-light">
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\danis\resources\views/admin/producto/edit.blade.php ENDPATH**/ ?>