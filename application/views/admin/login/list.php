
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="<?php echo base_url() ?>admin/Login"><b><?php echo $title ?></b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <!-- <form> -->
          <p class="login-box-msg">Silahkan Login</p>
            <div class="mb-3">
              <?php 
                // Motifikasi eror
                echo validation_errors('<div class="alert alert-warning alert-dismissible">','</div>');

                // Notifikasi gagal login
                if ($this->session->flashdata('warning')) {
                  echo '<div class="alert alert-danger alert-dismissible">';
                  echo $this->session->flashdata('warning');
                  echo '</div';
                }

                // Notifikasi logout
                if ($this->session->flashdata('sukses')) {
                  echo '<div class="alert alert-success">';
                  echo $this->session->flashdata('sukses');
                  echo '</div';
                }

                // form open login
                echo form_open(base_url('admin/Login'));
              ?>
            </div>
            <div class="input-group mb-3">
              <input type="text" name="username" class="form-control" placeholder="Username">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" name="password" class="form-control" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <!-- /.col -->
            <div class="input-group">
              <div class="col-md-6 py-1">
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
              </div>
              <div class="col-md-6 py-1">
                <a href="<?php base_url() ?>register" class="btn btn-secondary btn-block">Register</a>
              </div>
            </div>
            <!-- /.col -->
          </div>
        <!-- </form> -->
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?php echo base_url() ?>assets/admin/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url() ?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() ?>assets/admin/dist/js/adminlte.min.js"></script>

</body>
</html>
