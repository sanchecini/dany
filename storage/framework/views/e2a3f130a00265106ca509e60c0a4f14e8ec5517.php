<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
            <div class="profile-name">
                    <p class="name">
                        <?php echo e(Auth::user()->name); ?>

                    </p>
                    <p class="designation">
                        <?php echo e(Auth::user()->username); ?>

                    </p>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('home')); ?>">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
       
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('clientes.index')); ?>">
                <i class="fas fa-cart-plus menu-icon"></i>
                <span class="menu-title">Clientes</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('productos.index')); ?>">
                <i class="fas fa-shopping-cart menu-icon"></i>
                <span class="menu-title">Productos</span>
            </a>
        </li>
       
        
    </ul>
</nav>
<?php /**PATH C:\xampp\htdocs\danis\resources\views/layouts/_nav.blade.php ENDPATH**/ ?>