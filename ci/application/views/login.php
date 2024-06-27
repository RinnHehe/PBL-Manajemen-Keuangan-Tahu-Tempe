<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CUAN | Log in</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/lte')?>/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets/lte')?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/lte')?>/dist/css/adminlte.min.css">
  <style>
    /* CSS untuk video latar belakang */
    
    
    .login-box {
      background: rgba(0, 0, 0, 0.5); /* Untuk membuat area login terlihat lebih jelas */
      margin: 0 auto; /* Center the login box */
    }
    /* Media query untuk menyesuaikan ukuran login box saat zoom 50% */
    @media (max-width: 800px) {
      .login-box {
        width: 80%; /* Lebar login box saat zoom 50% */
        max-width: 400px; /* Lebar maksimum login box */
      }
    }
  </style>

</head>
<body class="hold-transition login-page">
  <?php if(!empty($output)): ?>
    <?php echo $output ?>
  <?php endif ?>
  
  <div class="login-box">
    <div class="login-logo">
      <b>CUAN</b>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="<?= base_url('auth/process_login') ?>" method="post">

    <div class="input-group mb-3">
        <input type="text" name="username" class="form-control" placeholder="Username" required>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            
        </div>
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
    </div>
</form>


<?php if(isset($_SESSION['error'])): ?>
            <?= $_SESSION['error']; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="<?= base_url('assets/lte')?>/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets/lte')?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/lte')?>/dist/js/adminlte.min.js"></script>
  <script src="<?= base_url('js/main.js')?>"></script>
</body>
</html>