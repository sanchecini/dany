
<?php $__env->startSection('title','Gestión de productos'); ?>
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
            Productos
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Productos</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Productos</h4>
                        
                        <div class="btn-group">
                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="<?php echo e(route('productos.create')); ?>" class="dropdown-item">Agregar</a>
                              
                            </div>
                          </div>
                    </div>
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Kilos</th>
                                   
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e($producto->id); ?></th>
                                    <td>
                                        <a href="<?php echo e(route('productos.show',$producto)); ?>"><?php echo e($producto->producto); ?></a>
                                    </td>
                                    <td>
                                        <?php echo e($producto->kilos); ?>

                                    </td>
                                   
                                    <td style="width: 50px;">
                                        <?php echo Form::open(['route'=>['productos.destroy',$producto], 'method'=>'DELETE']); ?>


                                        <a class="jsgrid-button jsgrid-edit-button" href="<?php echo e(route('productos.edit', $producto)); ?>" title="Editar">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        
                                        <button class="jsgrid-button jsgrid-delete-button unstyled-button" type="submit" title="Eliminar">
                                            <i class="far fa-trash-alt"></i>
                                        </button>

                                        <?php echo Form::close(); ?>

                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php echo Html::script('panel/js/data-table.js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\danis\resources\views/admin/producto/index.blade.php ENDPATH**/ ?>