<?= $this->include('admin/layout/header') ?>
<style>
  .custom-file-input.selected:lang(en)::after {
    content: "" !important;
  }

  .custom-file {
    overflow: hidden;
  }

  .custom-file-input {
    white-space: nowrap;
  }

  #myProgress {
    width: 100%;
    background-color: #ddd;
  }

  #myBar {
    width: 1%;
    height: 10px;
    background-color: #04AA6D;
  }

</style>

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
              <h1 class="m-0">MASTER CLASS</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
                <li class="breadcrumb-item active">MASTER CLASS</li>
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

            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
              <i class="fas fa-regular fa-folder-plus"></i>
            </button>
            Tambah Master Class
          </div>

          </row>
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
            </div>
            <!-- /.card -->


            <div class="card">
              <div class="card-body">
                <table id="masterClassTable" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID</th>
                      <!-- <th>userID</th> -->
                      <th>Nama Kelas</th>
                      <th>Kode Kelas</th>
                      <th>Create At</th>
                      <th>Update At</th>
                      <th>Aksi</th>
                      <!-- <th>Create By</th>
                    <th>Update By</th> -->
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>ID</th>
                      <!-- <th>userID</th> -->
                      <th>Nama Kelas</th>
                      <th>Kode Kelas</th>
                      <th>Create At</th>
                      <th>Update At</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

          </div>


          <div class="col-md-12">

            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default-materi">
              <i class="fas fa-regular fa-folder-plus"></i>
            </button>
            Tambah Materi Master Class
          </div>

          </row>
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
            </div>
            <!-- /.card -->


            <div class="card">
              <div class="card-body">
                <table id="materiClassTable" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID</th>
                      <th>Materi Kelas</th>
                      <th>Kode paket</th>
                      <th>Status</th>
                      <th>IDClass</th>
                      <th>Kode Kelas</th>
                      <th>Nama Kelas</th>
                      <th>Create At</th>
                      <th>Update At</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>ID</th>
                      <th>Materi Kelas</th>
                      <th>Kode paket</th>
                      <th>Status</th>
                      <th>IDClass</th>
                      <th>Kode Kelas</th>
                      <th>Nama Kelas</th>
                      <th>Create At</th>
                      <th>Update At</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

          </div>


          <!-- Main row -->
        </div>

        <!--/. container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <div class="modal fade" id="modal-default">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <form name="masterClass" id="masterClass">
              <div class="card-body">
                <div class="form-group">
                  <input type="text" class="form-control" name="id" id="id" data-field="id">
                  <!-- <input type="text" class="form-control" name="user" id="user" data-field="user"> -->
                  <label for="nama_soal">Nama Soal</label>
                  <input type="text" class="form-control" name="nama_soal" id="nama_soal" data-field="nama_soal" placeholder="nama soal">
                </div>
                <div class="form-group">
                  <label for="kode_paket">Kode Paket</label>
                  <input type="text" class="form-control" name="kode_paket" id="kode_paket" data-field="kode_paket" placeholder="kode paket">
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->



    <div class="modal fade" id="modal-default-materi">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <form name="materiClass" id="materiClass">
              <div class="card-body">
                <div class="form-group">
                  <input hidden type="text" class="form-control" name="idmateri" id="idmateri" data-field="idmateri">
                  <label for="status">Status</label>
                  <input type="text" class="form-control" name="status" id="status" data-field="status" placeholder="Status">
                </div>
                <!-- <input type="text" class="form-control" name="status" id="status" data-field="status" placeholder="Status"> -->
                <div class="form-group">
                  <label for="kode_paket1">Kode Paket</label>
                  <input type="text" class="form-control" name="kode_paket1" id="kode_paket1" data-field="kode_paket1" placeholder="kode paket">
                </div>
                <div class="form-group">
                  <label for="materi_kelas"> Materi Kelas</label>
                  <input type="text" class="form-control" name="materi_kelas" id="materi_kelas" data-field="materi_kelas" placeholder="Materi Kelas">
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-4">
                      <label for="kode_kelas">Kode Kelas</label>
                    </div>
                    <div class="col-8">
                      <select id="select_kode_kelas" class="form-control" name="select_kode_kelas">
                        <option class="form-control"></option>
                      </select>
                    </div>
                  </div>
                  <!-- <input type="hidden" class="form-control" name="kode_kelas" id="kode_kelas" data-field="kode_kelas" placeholder="Kode Kelas"> -->
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    <div class="modal fade" id="modal-tambah-soal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <form name="modalTambahSoal" id="modalTambahSoal">
              <div class="card-body">
                <div class="form-group">
                  <div id="myProgress">
                    <div id="myBar"></div>
                  </div>
                  <input type="text" name="materiSoalId" id="materiSoalId" hidden />
                  <input type="text" name="idsoal" id="idsoal" hidden />
                  <label for="exampleInputFile">File input</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFileInput" aria-describedby="customFileInput">
                      <label class="custom-file-label" for="customFileInput">Select file</label>
                      <input type="text" name="file" id="file" hidden />
                    </div>
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button" id="customFileInput"><i class="fas fa-upload"></i></button>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <audio controls id="audioPreview"></audio>
                </div>
                <div class="form-group">
                  <label for="text">Text</label>
                  <input type="text" class="form-control" name="text" id="text" placeholder="Text" required />
                </div>
                <div class="form-group">
                  <label for="section">Section</label>
                  <input type="text" class="form-control" name="section" id="section" placeholder="Section" required />
                </div>
                <!-- <div class="form-group">
                  <label for="exampleSelectBorderWidth2">Kode Paket</label>
                  <select id="select_kode_paket" class="form-control" name="select_kode_paket">
                    <option class="form-control"></option>
                  </select>
                </div> -->
              </div>
              <!-- /.card-body -->
              <div class="modal-footer justify-content-between">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>

    <script language="JavaScript" type="text/javascript" src="<?= base_url("assets/admin/js") ?>/masterClass.js"></script>
    <script language="JavaScript" type="text/javascript" src="<?= base_url("assets/admin") ?>/app.js"></script>
    <script language="JavaScript" type="text/javascript" src="<?= base_url("assets/admin") ?>/LZString.js"></script>

    <?= $this->include('admin/layout/footer') ?>