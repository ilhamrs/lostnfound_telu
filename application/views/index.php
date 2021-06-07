<!DOCTYPE html>
<html lang="en">
<!-- START: Head-->

<!-- Mirrored from html.designstream.co.in/pick/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jul 2020 01:57:17 GMT -->

<head>
    <meta charset="UTF-8">
    <title>Lost N Found Tel-U</title>
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
    <link rel="stylesheet" href="<?php echo base_url('dist/css/styles.css') ?>">
    <!-- css buatan sendiri -->


</head>
<!-- END Head-->

<?php
$plugin = base_url('dist/vendors');
$css = base_url('dist/css');
// $this->load->view('template/header');
?>
<?= isset($css) ? $css : '' ?>



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
                <h5> <?php echo $this->session->userdata('username')  ?></h5>
                <a href="profile"><i class="icon-user"></i>Lihat Profile</a>
            </div>
            <ul id="side-menu" class="sidebar-menu">
                <li class="dropdown active"><a href="#"><i class="icon-home mr-1"></i> Beranda</a>
                    <ul>
                        <li class="active"><a href="home"><i class="icon-home"></i> Beranda</a></li>
                        <li><a href="barang_ditemukan"><i class="icon-magnifier"></i> Barang Ditemukan</a>
                        </li>
                        <li><a href="barang_hilang"><i class="icon-magnifier"></i> Barang Hilang</a>
                        </li>


                    </ul>
                </li>
                <li class="dropdown"><a href="#"><i class="icon-menu mr-1"></i> Buat Laporan</a>
                    <ul>
                        <li><a href="lapor_kehilangan"><i class="icon-pencil"></i> Lapor Kehilangan</a>
                        </li>
                        <li><a href="lapor_menemukan"><i class="icon-pencil"></i> Lapor Menemukan</a>
                        </li>


                    </ul>
                </li>
                <li class="dropdown"><a href="#"><i class="icon-menu mr-1"></i> Lainnya</a>
                    <ul>
                        <li><a href="tentang_kami"><i class="icon-info"></i> Tentang Kami</a>
                        </li>
                        <li><a href="#"><i class="icon-support"></i> Bantuan</a>
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
                            <h5 class="mb-0">Selamat Datang di,</h5>
                            <h1>Lost N Found Tel-U</h1>
                        </div>

                        <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                            <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
                            <li class="breadcrumb-item active">Home</li>
                        </ol>

                    </div>
                    <div>
                        <h4>Laporan Terbaru</h4>
                    </div>
                </div>
            </div>
            <!-- END: Breadcrumbs-->

            <!-- START: Card Data-->
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="col-12">

                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="">
                                <form action="">
                                    <div class="form-row">
                                        <div class="form-group col-4 mb-3">
                                            <select id="urutkan" class="form-control">
                                                <option selected="">Urutkan</option>
                                                <option>Terlama</option>
                                                <option>Terbaru</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-4 mb-3">
                                            <select id="kategori" class="form-control">
                                                <option selected="">Kategori</option>
                                                <option>Dokumen</option>
                                                <option>Elektronik</option>
                                                <option>Alat Tulis</option>
                                                <option>Dokumen</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-4 mb-3">
                                            <button type="submit" class="btn btn-primary">Filter</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="row row-cols-2">
                                <div class="col-md-6 col-lg-3 mb-4">
                                    <div class="position-relative">
                                        <img src="dist/images/portfolio1.jpg" alt="" class="img-fluid">
                                        <div class="caption-bg bg-transparent text-right">
                                            <div class="d-table w-100 h-100 ">
                                                <div class="d-table-cell align-bottom">
                                                    <div class="mb-3">
                                                        <a href="#" class="rounded-left bg-white px-3 py-2 shadow2">Barang
                                                            Ditemukan</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-3">
                                        <div class="clearfix">
                                            <div class="">Nama Barang: </div>
                                            <div class="">Lokasi: </div>
                                            <div class="">Tanggal: </div>

                                        </div>
                                        <p class="mb-2" style="text-align: center;"><a href="detail_barang_ditemukan" class="font-weight-bold text-primary">Lihat Selengkapnya</a></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 mb-4">
                                    <div class="position-relative">
                                        <img src="dist/images/portfolio2.jpg" alt="" class="img-fluid">
                                        <div class="caption-bg bg-transparent text-right">
                                            <div class="d-table w-100 h-100 ">
                                                <div class="d-table-cell align-bottom">
                                                    <div class="mb-3">
                                                        <a href="#" class="rounded-left bg-white px-3 py-2 shadow2">Barang
                                                            Hilang</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-3">
                                        <div class="clearfix">
                                            <div class="">Nama Barang: </div>
                                            <div class="">Lokasi: </div>
                                            <div class="">Tanggal: </div>

                                        </div>
                                        <p class="mb-2" style="text-align: center;"><a href="detail_barang_hilang" class="font-weight-bold text-primary">Lihat Selengkapnya</a></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 mb-4">
                                    <div class="position-relative">
                                        <img src="dist/images/portfolio3.jpg" alt="" class="img-fluid">
                                        <div class="caption-bg bg-transparent text-right">
                                            <div class="d-table w-100 h-100 ">
                                                <div class="d-table-cell align-bottom">
                                                    <div class="mb-3">
                                                        <a href="#" class="rounded-left bg-white px-3 py-2 shadow2">Barang
                                                            Ditemukan</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-3">
                                        <div class="clearfix">
                                            <div class="">Nama Barang: </div>
                                            <div class="">Lokasi: </div>
                                            <div class="">Tanggal: </div>

                                        </div>
                                        <p class="mb-2" style="text-align: center;"><a href="detail_barang_ditemukan" class="font-weight-bold text-primary">Lihat Selengkapnya</a></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 mb-4">
                                    <div class="position-relative">
                                        <img src="dist/images/shoes.jpg" alt="" class="img-fluid">
                                        <div class="caption-bg bg-transparent text-right">
                                            <div class="d-table w-100 h-100 ">
                                                <div class="d-table-cell align-bottom">
                                                    <div class="mb-3">
                                                        <a href="#" class="rounded-left bg-white px-3 py-2 shadow2">Barang
                                                            Hilang</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-3">
                                        <div class="clearfix">
                                            <div class="">Nama Barang: </div>
                                            <div class="">Lokasi: </div>
                                            <div class="">Tanggal: </div>

                                        </div>
                                        <p class="mb-2" style="text-align: center;"><a href="detail_barang_hilang" class="font-weight-bold text-primary">Lihat Selengkapnya</a></p>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <nav>
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
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