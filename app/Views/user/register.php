<?= $this->include('user/layout/header') ?>

<body>

    <?= $this->include('user/layout/navbar') ?>

    <!-- End Hero Section -->
    <br />
    <br />
    <br />
    <br />

    <!-- ======= Contact Section ======= -->
    <div class="container login">
        <div class="row lg-5">

            <!-- <div class="col-lg-8"> -->
            <div class="info-container d-flex flex-column align-items-center justify-content-center">

                <h2 style="color: black;">Register</h2>
                <br />
                <div class="info-item d-flex">
                    <i class="bi bi-person-circle flex-shrink-0"></i>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Email / Hp" required>
                </div><!-- End Info Item -->
                <a href="#" class="info-item d-flex align-items-center justify-content-center">
                    Register
                </a>
            </div>

            <!-- </div> -->

        </div>
        Sudah punya akun ? <a href="<?= base_url('user/login') ?>">login</a> disini
    </div>
    <br />
    <br />
    <br />
    <br />

    <?= $this->include('user/layout/footer') ?>
    <!-- user/home -->