<!DOCTYPE html>
<html lang="en">
<!-- START: Head-->

<!-- Mirrored from html.designstream.co.in/pick/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jul 2020 01:57:17 GMT -->

<head>
    <meta charset="UTF-8">
    <title>Detail Barang Hilang - Lost N Found Tel-U</title>
    <link rel="shortcut icon" href="" />
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- START: Template CSS-->
    <link rel="stylesheet" href="dist/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/vendors/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="dist/vendors/jquery-ui/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="dist/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="dist/vendors/flags-icon/css/flag-icon.min.css">
    <!-- END Template CSS-->

    <!-- START: Page CSS-->
    <link rel="stylesheet" href="dist/vendors/chartjs/Chart.min.css">
    <!-- END: Page CSS-->

    <!-- START: Page CSS-->
    <link rel="stylesheet" href="dist/vendors/morris/morris.css">
    <link rel="stylesheet" href="dist/vendors/weather-icons/css/pe-icon-set-weather.min.css">
    <link rel="stylesheet" href="dist/vendors/chartjs/Chart.min.css">
    <link rel="stylesheet" href="dist/vendors/starrr/starrr.css">
    <link rel="stylesheet" href="dist/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="dist/vendors/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="dist/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- END: Page CSS-->

    <!-- START: Custom CSS-->
    <link rel="stylesheet" href="dist/css/main.css">
    <!-- END: Custom CSS-->

    <!-- css buatan sendiri -->
    <link rel="stylesheet" href="dist/css/styles.css">
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
    <div id="header-fix" class="header fixed-top">
        <div class="site-width">
            <nav class="navbar navbar-expand-lg  p-0" style="background-color: #a12520;">
                <div class="navbar-header  h-100 h4 mb-0 align-self-center logo-bar text-left"
                    style="background-color: #a12520;">
                    <a href="home" class="horizontal-logo">
                        <div class="media">
                            <!-- <img src="img/tes4.png" alt="" class="d-flex img-fluid" width="200"> -->
                            <span class="h6 font-weight-bold align-self-center mb-0 ml-auto" style="color: black;">Lost
                                N Found Tel-U</span>
                        </div>
                    </a>
                </div>
                <div class="navbar-header h4 mb-0 text-center h-100 collapse-menu-bar"
                    style="background-color: #a12520;">
                    <a href="#" class="sidebarCollapse" id="collapse"><i class="icon-menu"></i></a>
                </div>

                <form class="float-left d-none d-lg-block search-form">
                    <div class="form-group mb-0 position-relative" style="background-color: antiquewhite;">
                        <input type="text" class="form-control border-0 rounded bg-search pl-5"
                            placeholder="Cari barang...">
                        <div class="btn-search position-absolute top-0">
                            <a href="#"><i class="h6 icon-magnifier"></i></a>
                        </div>
                        <a href="#" class="position-absolute close-button mobilesearch d-lg-none" data-toggle="dropdown"
                            aria-expanded="false"><i class="icon-close h5"></i>
                        </a>

                    </div>
                </form>
                <div class="navbar-right ml-auto h-150">
                    <ul class="ml-auto p-0 m-0 list-unstyled d-flex top-icon h-100">
                        <li class="d-inline-block align-self-center  d-block d-lg-none">
                            <a href="#" class="nav-link mobilesearch" data-toggle="dropdown" aria-expanded="false"><i
                                    class="icon-magnifier h4"></i>
                            </a>
                        </li>

                        <li class="dropdown align-self-center d-inline-block">
                            <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false"><i
                                    class="icon-bell h4"></i>
                                <span class="badge badge-default"> <span class="ring">
                                    </span><span class="ring-point">
                                    </span> </span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right border   py-0">
                                <li>
                                    <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0"
                                        href="#">
                                        <div class="media">
                                            <img src="dist/images/author.jpg" alt=""
                                                class="d-flex mr-3 img-fluid rounded-circle w-50">
                                            <div class="media-body">
                                                <p class="mb-0 text-success">john send a message</p>
                                                12 min ago
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0"
                                        href="#">
                                        <div class="media">
                                            <img src="dist/images/author2.jpg" alt=""
                                                class="d-flex mr-3 img-fluid rounded-circle">
                                            <div class="media-body">
                                                <p class="mb-0 text-danger">Peter send a message</p>
                                                15 min ago
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0"
                                        href="#">
                                        <div class="media">
                                            <img src="dist/images/author3.jpg" alt=""
                                                class="d-flex mr-3 img-fluid rounded-circle">
                                            <div class="media-body">
                                                <p class="mb-0 text-warning">Bill send a message</p>
                                                5 min ago
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li><a class="dropdown-item text-center py-2" href="#"> Read All Message <i
                                            class="icon-arrow-right pl-2 small"></i></a></li>
                            </ul>
                        </li>
                        <li class="dropdown user-profile align-self-center d-inline-block">
                            <a href="#" class="nav-link py-0" data-toggle="dropdown" aria-expanded="false">
                                <div class="media">
                                    <img src="dist/images/author.jpg" alt="" class="d-flex img-fluid rounded-circle"
                                        width="29">
                                </div>
                            </a>

                            <div class="dropdown-menu border dropdown-menu-right p-0">
                                <a href="profile" class="dropdown-item px-2 align-self-center d-flex">
                                    <span class="icon-user mr-2 h6 mb-0"></span> Lihat Profil</a>
                
                                <div class="dropdown-divider"></div>
                                <a href="tentang_kami" class="dropdown-item px-2 align-self-center d-flex">
                                    <span class="icon-info mr-2 h6 mb-0"></span> Tentang Kami</a>
                                <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                    <span class="icon-support mr-2 h6  mb-0"></span> Bantuan</a>
                                <a href="kirim_masukan" class="dropdown-item px-2 align-self-center d-flex">
                                    <span class="icon-envelope mr-2 h6 mb-0"></span> Kirim Masukan</a>

                                <div class="dropdown-divider"></div>
                                <a href="login" class="dropdown-item px-2 text-danger align-self-center d-flex">
                                    <span class="icon-logout mr-2 h6  mb-0"></span> Keluar</a>
                            </div>

                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- END: Header-->

    <!-- START: Main Menu-->
    <div class="sidebar">
        <div class="site-width">
            <!-- START: Menu-->
            <br>
            <div style="text-align: center;">
                <img src="dist/images/contact-3.jpg" width="100" alt="" class="img-fluid rounded-circle"><br><br>
                <h5>Nama User</h5>
                <a href="Profile.html"><i class="icon-user"></i> Lihat Profile</a>
            </div>
            <ul id="side-menu" class="sidebar-menu">
                <li class="dropdown active"><a href="#"><i class="icon-home mr-1"></i> Beranda</a>
                    <ul>
                        <li><a href="home"><i class="icon-home"></i> Beranda</a></li>
                        <li><a href="barang_ditemukan"><i class="icon-magnifier"></i> Barang Ditemukan</a>
                        </li>
                        <li class="active"><a href="barang_hilang"><i class="icon-magnifier"></i> Barang Hilang</a>
                        </li>


                    </ul>
                </li>
                <li class="dropdown "><a href="#"><i class="icon-menu mr-1"></i> Buat Laporan</a>
                    <ul>
                        <li><a href="lapor_kehilangan"><i class="icon-pencil"></i> Lapor Kehilangan</a>
                        </li>
                        <li><a href="lapor_menemukan"><i class="icon-pencil"></i> Lapor Menemukan</a>
                        </li>


                    </ul>
                </li>
                <li class="dropdown "><a href="#"><i class="icon-menu mr-1"></i> Lainnya</a>
                    <ul>
                        <li><a href="tentang_kami"><i class="icon-info"></i> Tentang Kami</a>
                        </li>
                        <li><a href=""><i class="icon-directions"></i> Bantuan</a>
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
                            <h1>Detail Barang Hilang</h1>
                        </div>

                        <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                            <li class="breadcrumb-item"><a href="home">Home</a></li>
                            <li class="breadcrumb-item"><a href="barang_hilang">Barang Hilang</a></li>
                            <li class="breadcrumb-item active">Detail Barang Hilang</li>
                        </ol>

                    </div>

                </div>
            </div>
            <!-- END: Breadcrumbs-->

            <!-- START: Card Data-->
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="card">
                        <!-- <div class="card-header  justify-content-between align-items-center">
                            <a type="button" class="btn btn-primary"
                                href="#">Kembali</a>
                        </div> -->
                        <div class="card-body">
                            <div class="row col-12">
                                <div class="col-12 col-sm-4">
                                    <div class="card">

                                        <div id="carouselExampleIndicators" class="carousel slide pointer-event"
                                            data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="">
                                                </li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"
                                                    class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="">
                                                </li>
                                            </ol>
                                            <div class="carousel-inner">

                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="dist/images/cap3.jpg"
                                                        alt="First slide">
                                                </div>
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="dist/images/cap2.jpg"
                                                        alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="dist/images/cap1.jpg"
                                                        alt="Third slide">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators"
                                                role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators"
                                                role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12 col-sm-8">
                                    <form>
                                        <div class="form-group row">
                                            <label for="nama_produk" class="col-sm-2 col-form-label">Nama Barang</label>
                                            <div class="col-sm-10">
                                                <input disabled type="text" class="form-control" id="nama_barang"
                                                    placeholder="Nama Barang">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                                            <div class="col-sm-10">
                                                <select disabled id="lokasi" class="form-control">
                                                    <option selected="">Lokasi...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tanggal" class="col-sm-2 col-form-label">Tgl Kehilangan</label>
                                            <div class="col-sm-10">
                                                <input disabled type="date" class="form-control datepicker hasDatepicker"
                                                    id="tanggal">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                                            <div class="col-sm-10">
                                                <select disabled id="kategori" class="form-control">
                                                    <option selected="">Kategori...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kontak" class="col-sm-2 col-form-label">Kontak</label>
                                            <div class="col-sm-10">
                                                <input disabled type="number" class="form-control" id="kontak"
                                                    placeholder="081234567890">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                            <div class="col-sm-10">
                                                <textarea disabled name="deskripsi" id="deskripsi" cols="80" rows="5"
                                                    class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <!-- <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary btn-lg">Upload
                                                    Laporan</button>
                                            </div>
                                        </div> -->
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div><br>

            <div class="col-12 col-xl-9 mb-5 mb-x">
                <div class="card mb-4">
                    <div class="card-body pb-0">
                        <h5 class="header-title  text-uppercase mb-0">3 Komentar</h5>
                    </div>
                    <div class="media d-block d-sm-flex text-center text-sm-left p-4">
                        <img class="img-fluid d-md-flex mr-sm-4 rounded-circle" src="dist/images/author10.jpg" alt="">
                        <div class="media-body align-self-center">
                            <div class="float-sm-right float-none mb-0 my-3 my-sm-0"> <a href="#" class="text-primary"></a>
                                    <i class="icofont icofont-bubble-left pr-1"></i> 03/05/2021 14.50</a>
                            </div>
                            <h6 class="mb-1 font-weight-bold">Sandy Jane</h6>
                            Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Sed lectus.
                            Donec mollis hendrerit risus. Phasellus nec sem in justo pellentesque facilisis.
                        </div>
                    </div>
                    <div class="media d-block d-sm-flex text-center text-sm-left p-4 border-top theme-border">
                        <img class="img-fluid d-md-flex mr-sm-4 rounded-circle" src="dist/images/author9.jpg" alt="">
                        <div class="media-body align-self-center">
                            <div class="float-sm-right float-none mb-0 my-3 my-sm-0"> <a href="#" class="text-primary">
                                    <i class="icofont icofont-bubble-left pr-1"></i> 03/05/2021 14.50</a>
                            </div>
                            <h6 class="mb-1 font-weight-bold">John Smith</h6>
                            Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Sed lectus.
                            Donec mollis hendrerit risus. Phasellus nec sem in justo pellentesque facilisis.
                        </div>
                    </div>

                    <div class="media d-block d-sm-flex text-center text-sm-left p-4 border-top them-border">
                        <img class="img-fluid d-md-flex mr-sm-4 rounded-circle" src="dist/images/author1.jpg" alt="">
                        <div class="media-body align-self-center">
                            <div class="float-sm-right float-none mb-0 my-3 my-sm-0"> <a href="#" class="text-primary">
                                    <i class="icofont icofont-bubble-left pr-1"></i> 03/05/2021 14.50</a>
                            </div>
                            <h6 class="mb-1 font-weight-bold">Roma Ellisa</h6>
                            Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Sed lectus.
                            Donec mollis hendrerit risus. Phasellus nec sem in justo pellentesque facilisis.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="header-title mb-3 text-uppercase">Buat Komentar</h5>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control height-200" placeholder="Komentar :"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <a href="#" class="btn btn-primary btn-md">Kirim Komentar</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <!-- END: Card DATA-->
        </div>
        <br><br><br>
        <!-- START: Footer-->
        <div class="footer">
            <div class="footer2">
                <a class="" href="#">
                    <img src="" width="240" alt="" loading="lazy">
                </a>
            </div>
            <div class="">
                <p><a href="tentang_kami" title="" class="putih">About Us</a></p>
                <p><a href="" title="" class="putih">Contact</a></p>
                <p><a href="" title="" class="putih">Terms & conditions</a></p>
            </div>
            <div class="">
                <p><a href="" title="" class="putih">Facebook</a></p>
                <p><a href="" title="" class="putih">Website</a></p>
                <p><a href="" title="" class="putih">Instagram</a></p>
            </div>
            <div class="">
                <p>Subscribe to our newsletter</p>
                <form class="w-75 my-2 my-lg-0">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Email" aria-label="search"
                            aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">OK</button>
                        </div>
                    </div>


                </form>
            </div>
            <div class="footer2">
                <p>Jl. Telekomunikasi Terusan Buah Batu, Bandung - 40257, Indonesia</p>

            </div>
        </div>
        <!-- END: Footer-->


    </main>
    <!-- END: Content-->



    <!-- START: Back to top-->
    <a href="#" class="scrollup text-center">
        <i class="icon-arrow-up"></i>
    </a>
    <!-- END: Back to top-->


    <!-- START: Template JS-->
    <script src="dist/vendors/jquery/jquery-3.3.1.min.js"></script>
    <script src="dist/vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="dist/vendors/moment/moment.js"></script>
    <script src="dist/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/vendors/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- END: Template JS-->

    <!-- START: APP JS-->
    <script src="dist/js/app.js"></script>
    <!-- END: APP JS-->

    <!-- START: Page Vendor JS-->
    <script src="dist/vendors/raphael/raphael.min.js"></script>
    <script src="dist/vendors/morris/morris.min.js"></script>
    <script src="dist/vendors/chartjs/Chart.min.js"></script>
    <script src="dist/vendors/starrr/starrr.js"></script>
    <script src="dist/vendors/jquery-flot/jquery.canvaswrapper.js"></script>
    <script src="dist/vendors/jquery-flot/jquery.colorhelpers.js"></script>
    <script src="dist/vendors/jquery-flot/jquery.flot.js"></script>
    <script src="dist/vendors/jquery-flot/jquery.flot.saturated.js"></script>
    <script src="dist/vendors/jquery-flot/jquery.flot.browser.js"></script>
    <script src="dist/vendors/jquery-flot/jquery.flot.drawSeries.js"></script>
    <script src="dist/vendors/jquery-flot/jquery.flot.uiConstants.js"></script>
    <script src="dist/vendors/jquery-flot/jquery.flot.legend.js"></script>
    <script src="dist/vendors/jquery-flot/jquery.flot.pie.js"></script>
    <script src="dist/vendors/chartjs/Chart.min.js"></script>
    <script src="dist/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="dist/vendors/jquery-jvectormap/jquery-jvectormap-world-mill.js"></script>
    <script src="dist/vendors/jquery-jvectormap/jquery-jvectormap-de-merc.js"></script>
    <script src="dist/vendors/jquery-jvectormap/jquery-jvectormap-us-aea.js"></script>
    <script src="dist/vendors/apexcharts/apexcharts.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- START: Page JS-->
    <script src="dist/js/home.script.js"></script>
    <!-- END: Page JS-->
</body>
<!-- END: Body-->

<!-- Mirrored from html.designstream.co.in/pick/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jul 2020 01:59:17 GMT -->

</html>