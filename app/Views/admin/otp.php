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

                <form id="otp" name="otp">
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" id="otp" name="otp" placeholder="otp">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="icheck-primary">
                                <label for="remember">
                                    Validation Otp
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-block">Send</button>
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

    <script language="JavaScript" type="text/javascript" src="<?= base_url("assets/admin/js") ?>/otp.js"></script>
    <script language="JavaScript" type="text/javascript" src="<?= base_url("assets/admin") ?>/app.js"></script>

    <?= $this->include('admin/layout/footer') ?>