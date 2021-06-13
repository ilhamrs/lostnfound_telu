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

<!-- START: Header-->
<div id="header-fix" class="header fixed-top">
    <div class="site-width">
        <nav class="navbar navbar-expand-lg  p-0" style="background-color: #a12520;">
            <div class="navbar-header  h-100 h4 mb-0 align-self-center logo-bar text-left" style="background-color: #a12520;">
                <a href="home" class="horizontal-logo">
                    <div class="media">
                        <img src="dist/images/Logo.png" alt="" class="d-flex img-fluid" width="200">
                        <!-- <span class="h6 font-weight-bold align-self-center mb-0 ml-auto" style="color: black;">Lost
                            N Found Tel-U</span> -->
                    </div>
                </a>
            </div>
            <div class="navbar-header h4 mb-0 text-center h-100 collapse-menu-bar" style="background-color: #a12520;">
                <a href="#" class="sidebarCollapse" id="collapse"><i class="icon-menu"></i></a>
            </div>


            <div class="navbar-right ml-auto h-150">
                <ul class="ml-auto p-0 m-0 list-unstyled d-flex top-icon h-100">

                    <li class="d-inline-block align-self-center  d-block d-lg-none">
                        <a href="#" class="nav-link mobilesearch" data-toggle="dropdown" aria-expanded="false"><i class="icon-magnifier h4"></i>
                        </a>
                    </li>

                    <li class="dropdown align-self-center d-inline-block">
                        <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false"><i class="icon-bell h4"></i>
                            <span class="badge badge-default"> <span class="ring">
                                </span><span class="ring-point">
                                </span> </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right border   py-0">
                            <?php foreach ($notif as $n) : ?>
                                <li>
                                    <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                        <div class="media">

                                            <div class="media-body">
                                                <?php if ($n['tipe_posting'] == "Barang Ditemukan") { ?>
                                                    <p class="mb-0 text-dark">Ditemukan <span class="font-weight-bold"><?php echo $n['nama_barang']; ?> </span> disekitaran <span class="font-weight-bold"><?php echo $n['lokasi']; ?> </span></p>

                                                <?php } else { ?>
                                                    <p class="mb-0 text-dark">Hilang <span class="font-weight-bold"><?php echo $n['nama_barang']; ?></span> disekitaran <span class="font-weight-bold"><?php echo $n['lokasi']; ?></span></p>

                                                <?php } ?>
                                                <p class=" text-primary"><?php
                                                                            $waktuawal  = date_create($n['tgl_posting']); //waktu di setting
                                                                            $waktuakhir = date_create(); //2019-02-21 09:35 waktu sekarang
                                                                            $diff  = date_diff($waktuawal, $waktuakhir);
                                                                            if ($diff->d  > 1) {
                                                                                echo $diff->d . ' hari lalu ';
                                                                            } else {
                                                                                echo $diff->h . ' jam ' . $diff->i . ' menit yang lalu ';
                                                                            }
                                                                            ?> </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            <?php endforeach ?>


                        </ul>
                    </li>
                    <li class="dropdown user-profile align-self-center d-inline-block">
                        <a href="#" class="nav-link py-0" data-toggle="dropdown" aria-expanded="false">
                            <div class="media">
                                <img src="<?php echo base_url(); ?>dist/images/author.jpg" alt="" class="d-flex img-fluid rounded-circle" width="29">
                            </div>
                        </a>

                        <div class="dropdown-menu border dropdown-menu-right p-0">
                            <a href="<?php echo base_url(); ?>Profile/index"" class=" dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-user mr-2 h6 mb-0"></span> Lihat Profil</a>

                            <div class="dropdown-divider"></div>
                            <a href="<?php echo base_url(); ?>Tentang_Kami/index" class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-info mr-2 h6 mb-0"></span> Tentang Kami</a>
                            <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-support mr-2 h6  mb-0"></span> Bantuan</a>
                            <a href="<?php echo base_url(); ?>Kirim_Masukan/index"" class=" dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-envelope mr-2 h6 mb-0"></span> Kirim Masukan</a>

                            <div class="dropdown-divider"></div>
                            <a href="<?php echo site_url('Login/logout'); ?>" class="dropdown-item px-2 text-danger align-self-center d-flex">
                                <span class="icon-logout mr-2 h6  mb-0"></span> Keluar</a>
                        </div>

                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- END: Header-->