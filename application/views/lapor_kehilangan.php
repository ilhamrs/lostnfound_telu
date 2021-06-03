<!DOCTYPE html>
<html lang="en">
<!-- START: Head-->

<!-- Mirrored from html.designstream.co.in/pick/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jul 2020 01:57:17 GMT -->

<head>
    <meta charset="UTF-8">
    <title>Lapor Kehilangan - Lost N Found Tel-U</title>
    <link rel="shortcut icon" href="" />
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- START: Template CSS-->
    <link rel="stylesheet" href="<?= base_url('dist/vendors/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('dist/vendors/simple-line-icons/css/simple-line-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('dist/vendors/toastr/toastr.min.css') ?>">

    <!-- START: Custom CSS-->
    <link rel="stylesheet" href="<?= base_url('dist/css/main.css') ?>">
    <!-- END: Custom CSS-->

    <!-- css buatan sendiri -->
    <link rel="stylesheet" href="<?= base_url('dist/css/styles.css') ?>">
    <!-- css buatan sendiri -->
</head>
<!-- END Head-->

<!-- START: Body-->

<body id="main-container" class="default">

    <!-- START: Pre Loader-->
    <div class="se-pre-con">
        <div class="loader"></div>
    </div>
    <!-- END: Pre Loader-->

    <!-- START: Header-->
    <?php $this->load->view('template/header'); ?>
    <!-- END: Header-->

    <!-- START: Main Menu-->
    <div class="sidebar">
        <div class="site-width">
            <!-- START: Menu-->
            <br>
            <div style="text-align: center;">
                <img src="dist/images/contact-3.jpg" width="100" alt="" class="img-fluid rounded-circle"><br><br>
                <h5>Nama User</h5>
                <a href="profile"><i class="icon-user"></i> Lihat Profile</a>
            </div>
            <ul id="side-menu" class="sidebar-menu">
                <li class="dropdown "><a href="#"><i class="icon-home mr-1"></i> Beranda</a>
                    <ul>
                        <li><a href="home"><i class="icon-home"></i> Beranda</a></li>
                        <li><a href="barang_ditemukan"><i class="icon-magnifier"></i> Barang Ditemukan</a>
                        </li>
                        <li><a href="barang_hilang"><i class="icon-magnifier"></i> Barang Hilang</a>
                        </li>


                    </ul>
                </li>
                <li class="dropdown active"><a href="#"><i class="icon-menu mr-1"></i> Buat Laporan</a>
                    <ul>
                        <li class="active"><a href="lapor_kehilangan"><i class="icon-pencil"></i> Lapor
                                Kehilangan</a>
                        </li>
                        <li><a href="lapor_menemukan"><i class="icon-pencil"></i> Lapor Menemukan</a>
                        </li>


                    </ul>
                </li>
                <li class="dropdown"><a href="#"><i class="icon-menu mr-1"></i> Lainnya</a>
                    <ul>
                        <li><a href="tentang_kami"><i class="icon-info"></i> Tentang Kami</a>
                        </li>
                        <li><a href="#"><i class="icon-directions"></i> Bantuan</a>
                        </li>
                        <li><a href="kirim_masukan"><i class="icon-envelope"></i> Kirim Masukan</a>
                        </li>


                    </ul>
                </li>

            </ul>
            <!-- END: Menu-->
            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0 ml-auto">
                <li class="breadcrumb-item"><a href="#">Application</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- START: Main Content-->
    <main>
        <div class="container-fluid site-width">
            <!-- START: Breadcrumbs-->
            <div class="row">
                <div class="col-12  align-self-center">
                    <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                        <div class="w-sm-100 mr-auto">
                            <!-- <h5 class="mb-0">Selamat Datang di,</h5> -->
                            <h1>Form Lapor Kehilangan</h1>
                        </div>

                        <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                            <li class="breadcrumb-item"><a href="home">Home</a></li>
                            <li class="breadcrumb-item active">Lapor Kehilangan</li>
                        </ol>

                    </div>

                </div>
            </div>
            <!-- END: Breadcrumbs-->

            <!-- START: Card Data-->
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="<?php echo base_url(); ?>lapor_kehilangan/add" method="POST" enctype="multipart/form-data">
                                <div class="row col-12">
                                    <div class="col-12 col-sm-4">
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-between align-items-center">
                                                <h4 class="card-title">Foto Barang</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="custom-file overflow-hidden rounded-pill mb-5">
                                                    <input id="customFile1" name="foto" type="file" class="custom-file-input rounded-pill">
                                                    <label for="customFile1" class="custom-file-label rounded-pill">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8">
                                        <div class="form-group row">
                                            <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                                            <div class="col-sm-10">
                                                <select id="lokasi" name="lokasi" class="form-control">
                                                    <option selected="">Lokasi...</option>
                                                    <option value="GKU">GKU</option>
                                                    <option value="MSU">MSU</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tgl_kehilangan" class="col-sm-2 col-form-label">Tgl Kehilangan</label>
                                            <div class="col-sm-10">
                                                <input type="date" name="tgl_kehilangan" class="form-control datepicker hasDatepicker" id="tgl_kehilangan">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                                            <div class="col-sm-10">
                                                <select id="kategori" name="kategori" class="form-control">
                                                    <option selected="">Kategori...</option>
                                                    <option value="Alat tulis">Alat tulis</option>
                                                    <option value="Surat berharga">Surat berharga</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="no_telp" class="col-sm-2 col-form-label">Kontak</label>
                                            <div class="col-sm-10">
                                                <input type="number" name="no_telp" class="form-control" id="no_telp" placeholder="081234567890">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                            <div class="col-sm-10">
                                                <textarea name="deskripsi" id="deskripsi" cols="80" rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" value="Save" class="btn btn-primary btn-lg">Upload
                                                    Laporan</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>

            <!-- END: Card DATA-->
        </div>
        <br><br><br>
        <!-- START: Footer-->
        <?php $this->load->view('template/footer'); ?>
        <!-- END: Footer-->



    </main>
    <!-- END: Content-->



    <!-- START: Back to top-->
    <a href="#" class="scrollup text-center">
        <i class="icon-arrow-up"></i>
    </a>
    <!-- END: Back to top-->


    <!-- START: Template JS-->
    <script src="<?php echo base_url('dist/vendors/jquery/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendors/jquery-ui/jquery-ui.min.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendors/moment/moment.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendors/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendors/slimscroll/jquery.slimscroll.min.js') ?>"></script>
    <!-- END: Template JS-->

    <!-- START: APP JS-->
    <script src="<?php echo base_url('dist/js/app.js') ?>"></script>
    <!-- END: APP JS-->

    <!-- START: Page Vendor JS-->
    <script src="<?php echo base_url('dist/vendors/raphael/raphael.min.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendors/morris/morris.min.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendors/chartjs/Chart.min.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendors/starrr/starrr.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendors/jquery-flot/jquery.canvaswrapper.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendors/jquery-flot/jquery.colorhelpers.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendors/jquery-flot/jquery.flot.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendors/jquery-flot/jquery.flot.saturated.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendors/jquery-flot/jquery.flot.browser.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendors/jquery-flot/jquery.flot.drawSeries.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendors/jquery-flot/jquery.flot.uiConstants.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendors/jquery-flot/jquery.flot.legend.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendors/jquery-flot/jquery.flot.pie.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendors/chartjs/Chart.min.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.min.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendors/jquery-jvectormap/jquery-jvectormap-world-mill.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendors/jquery-jvectormap/jquery-jvectormap-de-merc.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendors/jquery-jvectormap/jquery-jvectormap-us-aea.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendors/apexcharts/apexcharts.min.js') ?>"></script>
    <!-- END: Page Vendor JS-->

    <!-- START: Page JS-->
    <script src="<?php echo base_url('dist/js/home.script.js') ?>"></script>
    <!-- END: Page JS-->
</body>
<!-- END: Body-->

<!-- Mirrored from html.designstream.co.in/pick/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jul 2020 01:59:17 GMT -->

</html>