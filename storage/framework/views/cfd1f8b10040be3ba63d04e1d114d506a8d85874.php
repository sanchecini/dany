
<?php $__env->startSection('title','Gestión de clientes'); ?>
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
            Clientes
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Clientes</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Clientes</h4>
                        
                        <div class="btn-group">
                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="<?php echo e(route('clientes.create')); ?>" class="dropdown-item">Agregar</a>
                              
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
                                    <th>Dirección</th>
                                    <th>Municipio</th>
                                    <th>Telefono</th>
                                    <th>Whatsapp</th>

                                   
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e($cliente->id); ?></th>
                                    <td>
                                        <a href="<?php echo e(route('clientes.show',$cliente)); ?>"><?php echo e($cliente->cliente); ?></a>
                                    </td>
                                    <td><?php echo e($cliente->direccion); ?></td>
                                    <td><?php echo e($cliente->municipio); ?></td>
                                    <td><?php echo e($cliente->telefono); ?></td>
                                    <td><?php echo e($cliente->whatsapp); ?></td>

                                    <td style="width: 50px;">
                                        <?php echo Form::open(['route'=>['clientes.destroy',$cliente], 'method'=>'DELETE']); ?>


                                        <a class="jsgrid-button jsgrid-edit-button" href="<?php echo e(route('clientes.edit', $cliente)); ?>" title="Editar">
                                            <i class="far fa-edit"></i>
                                        </a>

                                        <a class="jsgrid-button jsgrid-edit-button" href="<?php echo e(route('precios.agregar', $cliente)); ?>" title="Precios">
                                        <i class="fas fa-address-book"></i>
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

            
                <?php $__currentLoopData = $array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($usuario); ?></p>
                <a href="<?php echo e(asset('panel/images/logo/.$usuario')); ?>" data-lightbox="imagen_8">
<img src="<?php echo e(asset('panel/images/logo/'.$usuario)); ?>" alt="Icono producto">
</a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
            
           

                </div>
                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php echo Html::script('panel/js/data-table.js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\danis\resources\views/admin/cliente/index.blade.php ENDPATH**/ ?>