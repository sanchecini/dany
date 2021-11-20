<!DOCTYPE html>
<html lang="en">



<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sistema de inventario</title>
  <!-- plugins:css -->
  <?php echo Html::style('panel/vendors/iconfonts/font-awesome/css/all.min.css'); ?>

  <?php echo Html::style('panel/vendors/css/vendor.bundle.base.css'); ?>

  <?php echo Html::style('panel/vendors/css/vendor.bundle.addons.css'); ?>

  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <?php echo Html::style('panel/css/style.css'); ?>

  <!-- endinject -->
  <link rel="shortcut icon" href="panel/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="<?php echo e(asset('panel/images/logo/danny.png')); ?>" alt="logo">
              </div>
              <h4>Recicladora Dannys</h4>
              

              <?php echo $__env->yieldContent('content'); ?>


            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
           
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <?php echo Html::script('panel/vendors/js/vendor.bundle.base.js'); ?>

  <?php echo Html::script('panel/vendors/js/vendor.bundle.addons.js'); ?>

  <!-- endinject -->
  <!-- inject:js -->
  <?php echo Html::script('panel/js/off-canvas.js'); ?>

  <?php echo Html::script('panel/js/hoverable-collapse.js'); ?>

  <?php echo Html::script('panel/js/misc.js'); ?>

  <?php echo Html::script('panel/js/settings.js'); ?>

  <?php echo Html::script('panel/js/todolist.js'); ?>

  <!-- endinject -->
</body>
</html>
<?php /**PATH C:\xampp\htdocs\danis\resources\views/layouts/login.blade.php ENDPATH**/ ?>