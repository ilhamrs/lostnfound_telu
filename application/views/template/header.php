<!-- START: Header-->
<div id="header-fix" class="header fixed-top">
    <div class="site-width">
        <nav class="navbar navbar-expand-lg  p-0" style="background-color: #a12520;">
            <div class="navbar-header  h-100 h4 mb-0 align-self-center logo-bar text-left" style="background-color: #a12520;">
                <a href="home" class="horizontal-logo">
                    <div class="media">
                        <!-- <img src="img/tes4.png" alt="" class="d-flex img-fluid" width="200"> -->
                        <span class="h6 font-weight-bold align-self-center mb-0 ml-auto" style="color: black;">Lost
                            N Found Tel-U</span>
                    </div>
                </a>
            </div>
            <div class="navbar-header h4 mb-0 text-center h-100 collapse-menu-bar" style="background-color: #a12520;">
                <a href="#" class="sidebarCollapse" id="collapse"><i class="icon-menu"></i></a>
            </div>

            <form class="float-left d-none d-lg-block search-form">
                <div class="form-group mb-0 position-relative" style="background-color: antiquewhite;">
                    <input type="text" class="form-control border-0 rounded bg-search pl-5" placeholder="Cari barang...">
                    <div class="btn-search position-absolute top-0">
                        <a href="#"><i class="h6 icon-magnifier"></i></a>
                    </div>
                    <a href="#" class="position-absolute close-button mobilesearch d-lg-none" data-toggle="dropdown" aria-expanded="false"><i class="icon-close h5"></i>
                    </a>

                </div>
            </form>
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
                            <li>
                                <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                    <div class="media">
                                        <img src="dist/images/author.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle w-50">
                                        <div class="media-body">
                                            <p class="mb-0 text-success">john send a message</p>
                                            12 min ago
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                    <div class="media">
                                        <img src="dist/images/author2.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                        <div class="media-body">
                                            <p class="mb-0 text-danger">Peter send a message</p>
                                            15 min ago
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                    <div class="media">
                                        <img src="dist/images/author3.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                        <div class="media-body">
                                            <p class="mb-0 text-warning">Bill send a message</p>
                                            5 min ago
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li><a class="dropdown-item text-center py-2" href="#"> Read All Message <i class="icon-arrow-right pl-2 small"></i></a></li>
                        </ul>
                    </li>
                    <li class="dropdown user-profile align-self-center d-inline-block">
                        <a href="#" class="nav-link py-0" data-toggle="dropdown" aria-expanded="false">
                            <div class="media">
                                <img src="dist/images/author.jpg" alt="" class="d-flex img-fluid rounded-circle" width="29">
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
                            <a href="<?php echo site_url('Login/index'); ?>" class="dropdown-item px-2 text-danger align-self-center d-flex">
                                <span class="icon-logout mr-2 h6  mb-0"></span> Keluar</a>
                        </div>

                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- END: Header-->