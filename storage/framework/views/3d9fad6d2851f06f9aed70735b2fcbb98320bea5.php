<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- plugins:css -->
    <?php echo Html::style('panel/vendors/iconfonts/font-awesome/css/all.min.css'); ?>

    <?php echo Html::style('panel/vendors/css/vendor.bundle.base.css'); ?>

    <?php echo Html::style('panel/vendors/css/vendor.bundle.addons.css'); ?>

    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <?php echo Html::style('panel/css/style.css'); ?>

    <?php echo $__env->yieldContent('styles'); ?>
    <!-- endinject -->
   
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo"><img src="<?php echo e(asset('panel/images/logo/danny.png')); ?>"
                        alt="logo" /></a>
               
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="fas fa-bars"></span>
                </button>
                <ul class="navbar-nav">
                    <li class="nav-item nav-search d-none d-md-flex">
                        <div class="nav-link">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-search"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <?php echo $__env->yieldContent('create'); ?>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                                <i class="fas fa-sign-out-alt"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout"
                            onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                <i class="fas fa-power-off text-primary"></i>
                               Cerrar Sesión
                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>
                    <?php echo $__env->yieldContent('options'); ?>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="fas fa-bars"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close fa fa-times"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles primary"></div>
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>
            <?php echo $__env->yieldContent('preference'); ?>
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <?php echo $__env->make('layouts._nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- partial -->
            <div class="main-panel">
                <?php echo $__env->yieldContent('content'); ?>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                   
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <?php echo Html::script('panel/vendors/js/vendor.bundle.base.js'); ?>

    <?php echo Html::script('panel/vendors/js/vendor.bundle.addons.js'); ?>

    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <?php echo Html::script('panel/js/off-canvas.js'); ?>

    <?php echo Html::script('panel/js/hoverable-collapse.js'); ?>

    <?php echo Html::script('panel/js/misc.js'); ?>

    <?php echo Html::script('panel/js/settings.js'); ?>

    <?php echo Html::script('panel/js/todolist.js'); ?>

    <!-- endinject -->
    <!-- Custom js for this page-->
    <?php echo Html::script('panel/js/dashboard.js'); ?>

    <!-- End custom js for this page-->
    

</body>


</html>
<?php /**PATH C:\xampp\htdocs\danis\resources\views/layouts/admin.blade.php ENDPATH**/ ?>