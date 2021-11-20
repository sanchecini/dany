
<?php $__env->startSection('title','Registrar precios'); ?>
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
                <li class="breadcrumb-item"><a href="<?php echo e(route('clientes.index')); ?>">Precios</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro de precios</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de precios</h4>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title"> <strong> Cliente:</strong> <?php echo e($cliente->cliente); ?></h4>
                    </div>
                    <?php echo Form::open(['route'=>'precios.store', 'method'=>'POST','files' => true]); ?>


                            <div class="form-group">
                                
                                <?php echo e(Form::hidden('cliente_id', $cliente->id, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre'])); ?>

                                
                            </div>
                            

                    <div class="form-group">
                        <?php echo e(Form::label('Producto')); ?>

                        <?php echo e(Form::select('producto_id', $productos, $cliente->producto_id, ['class' => 'form-control' . ($errors->has('producto_id') ? ' is-invalid' : '')])); ?>

                        <?php echo $errors->first('producto_id', '<div class="invalid-feedback">:message</p>'); ?>

                    </div>  

                    <div class="form-group col-md-6">
                        <div class="form-group">
                            <label for="name">Precio</label>
                            <input type="text" class="form-control" name="precio" id="precio" aria-describedby="helpId" required>
                        </div>
                    </div>

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
    
<?php $__currentLoopData = $precios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $precio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(asset('panel/images/logo/.$usuario')); ?>" data-lightbox="imagen_8">
<img src="<?php echo e(asset('panel/images/logo/'.$usuario)); ?>" alt="Icono producto">
</a>
    <h1><?php echo e($precio->producto); ?></h1>
                                      
    <h2>$ <?php echo e($precio->precio); ?></h2>
    <h2><?php echo e($precio->cliente); ?></h2>
                                                 
                        


                                       
                                 
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                           
        
     
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php echo Html::script('panel/js/data-table.js'); ?>


<script>
    document.getElementById("select").value = "1";
</script>   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\danis\resources\views/admin/precio/create.blade.php ENDPATH**/ ?>