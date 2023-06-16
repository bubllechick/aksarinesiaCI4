
<?= $this->include('admin/layout/header') ?>


<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center h1">
      Aksarinesia
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form id="login" name="login">
        <div class="input-group mb-3">
          <input type="email" class="form-control" id="email" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <!-- <div class="input-group mb-3">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div> -->
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>

<script language="JavaScript" type="text/javascript" src="<?= base_url("assets/admin/js") ?>/login.js"></script>
<script language="JavaScript" type="text/javascript" src="<?= base_url("assets/admin") ?>/app.js"></script>

<?= $this->include('admin/layout/footer') ?>