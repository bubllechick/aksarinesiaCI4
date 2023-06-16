
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
            <h1 class="m-0">TOEFL PREDICTION TEST</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
              <li class="breadcrumb-item active">TOEFL PREDICTION TEST</li>
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
                <h3 class="card-title">TOEFL PREDICTION TEST</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="text">Text</label>
                    <input type="text" class="form-control" id="text" placeholder="Text">
                  </div>
                    <div class="form-group">
                    <label for="section">Section</label>
                    <input type="text" class="form-control" id="section" placeholder="Section">
                  </div>
                   <div class="form-group">
                  <label for="exampleSelectBorderWidth2">Kode Soal</label>
                  <select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2">
                    <option>Value 1</option>
                    <option>Value 2</option>
                    <option>Value 3</option>
                  </select>
                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>File Soal</th>
                    <th>Text</th>
                    <th>Section</th>
                    <th>Kode Soal</th>
                    <th>Create At</th>
                    <th>Update At</th>
                    <th>Create By</th>
                    <th>Update By</th>
                  </tr>
                  </thead>
                  <tbody>              
                  <tr>
                    <td>
                      <i class="fa-regular fa-file-audio"></i>
                    </td>
                    <td>Voices</td>
                    <td>23</td>
                    <td>3099</td>
                    <td>03-11-2023</td>
                    <td>03-11-2023</td>
                    <td>Admin</td>
                    <td></td>
                  </tr>
                  <tr>
                  <td>
                    <i class="fa-regular fa-file-audio"></i>
                  </td>
                    <td>Voices</td>
                    <td>24</td>
                    <td>3099</td>
                    <td>03-11-2023</td>
                    <td>03-11-2023</td>
                    <td>Admin</td>
                    <td></td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>File Soal</th>
                    <th>Text</th>
                    <th>Section</th>
                    <th>Kode Soal</th>
                    <th>Create At</th>
                    <th>Update At</th>
                    <th>Create By</th>
                    <th>Update By</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

          </div>


        <!-- Main row -->
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

  <script language="JavaScript" type="text/javascript" src="<?= base_url("assets/admin/js") ?>/toeflPredictionTest.js"></script>
  <script language="JavaScript" type="text/javascript" src="<?= base_url("assets/admin") ?>/app.js"></script>


  <?= $this->include('admin/layout/footer') ?>