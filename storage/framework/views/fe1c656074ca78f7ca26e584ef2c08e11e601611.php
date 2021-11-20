
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
                <li class="breadcrumb-item"><a href="<?php echo e(route('clientes.index')); ?>">Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edición de clientee</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Edición de precios</h4>
                    </div>

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title"> <strong> Cliente:</strong> <?php echo e($cliente->cliente); ?></h4>
                    </div>

                   
                    
                    <form method="POST" action="<?php echo e(route('precios.update', $cliente->id)); ?>"  role="form" enctype="multipart/form-data">
                            <?php echo e(method_field('PATCH')); ?>

                            <?php echo csrf_field(); ?>

                            <div class="form-group">
                                
                                <?php echo e(Form::hidden('cliente_id', $cliente->id, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre'])); ?>

                                
                            </div>
                            

                    <div class="form-group">
                        <?php echo e(Form::label('producto_id')); ?>

                        <?php echo e(Form::select('producto_id', $productos, $cliente->producto_id, ['class' => 'form-control' . ($errors->has('producto_id') ? ' is-invalid' : '')])); ?>

                        <?php echo $errors->first('producto_id', '<div class="invalid-feedback">:message</p>'); ?>

                    </div>  

                    <div class="form-group col-md-6">
                        <div class="form-group">
                            <label for="name">Precio</label>
                            <input type="text" class="form-control" name="precio" id="precio" aria-describedby="helpId" required>
                        </div>
                    </div>


                   

                     <button type="submit" class="btn btn-primary mr-2">Editar</button>
                     <a href="<?php echo e(route('clientes.index')); ?>" class="btn btn-light">
                        Cancelar
                     </a>
                     </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php echo Html::script('panel/js/dropify.js'); ?>

 
<script>
    datosProducto = document.getElementById('product_id').value.split('_');
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\danis\resources\views/admin/precio/edit.blade.php ENDPATH**/ ?>