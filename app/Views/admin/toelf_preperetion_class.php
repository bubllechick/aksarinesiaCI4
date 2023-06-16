
<?= $this->include('admin/layout/header') ?>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="<?= base_url('assets/admin') ?>/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <?= $this->include('admin/layout/navbar') ?>

  <!-- Main Sidebar Container -->
  <?= $this->include('admin/layout/sidebar') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">TOEFL PREPERETION CLASS</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
              <li class="breadcrumb-item active">TOEFL PREPERETION CLASS</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
      <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">TOEFL FORM SOAL</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_soal">Nama Soal</label>
                    <input type="text" class="form-control" id="nama_soal" placeholder="nama soal">
                  </div>
                  <div class="form-group">
                    <label for="kode_paket">Kode Soal</label>
                    <input type="text" class="form-control" id="kode_paket" placeholder="kode paket">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>


        <!-- Main row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>

  <script language="JavaScript" type="text/javascript" src="<?= base_url("assets/admin/js") ?>/toelfPreperetionClass.js"></script>
  <script language="JavaScript" type="text/javascript" src="<?= base_url("assets/admin") ?>/app.js"></script>


  <?= $this->include('admin/layout/footer') ?>