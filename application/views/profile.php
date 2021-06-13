<!-- START: Main Content-->
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row">
            <div class="col-12  align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto">
                        <h1>Profile</h1>
                    </div>

                    <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                        <li class="breadcrumb-item"><a href="home">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>

                </div>

            </div>
        </div>
        <!-- END: Breadcrumbs-->

        <!-- START: Card Data-->
        <div class="row">
            <div class="col-12  mt-3">
                <div class="card">
                    <div class="card-body row">

                        <div class="col-lg-12 col-xl-5" style="text-align: center;"><br>
                            <a href="#"><img src="<?php echo base_url(); ?>dist/images/contact-3.jpg" width="200" alt="" class="img-fluid rounded-circle"></a>
                            <br><br>
                            <a href="<?php echo site_url('Login/logout'); ?>" class="btn btn-danger rounded-btn">Logout</a>

                        </div>
                        <div class="col-lg-12 col-xl-7 mb-4 mb-xl-0">
                            <form>
                                <div class="form-group">
                                    <label for="username1">Nama Lengkap</label>
                                    <input disabled type="text" class="form-control" id="fullname1" placeholder="<?php echo $this->session->userdata('Nama_Lengkap');  ?>">
                                </div>
                                <div class="form-group">
                                    <label for="username1">Username</label>
                                    <input disabled type="text" class="form-control" id="username1" placeholder="<?php echo $this->session->userdata('username');  ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email1">Email</label>
                                    <input disabled type="email" class="form-control" id="email1" placeholder="<?php echo $this->session->userdata('Email');  ?>">
                                </div>
                                <div class="form-group">
                                    <label for="username1">Nomor Induk Mahasiswa</label>
                                    <input disabled type="text" class="form-control" id="nim1" placeholder="<?php echo $this->session->userdata('Nim');  ?>">
                                </div>
                                <div class="form-group">
                                    <label for="username1">Fakultas</label>
                                    <input disabled type="text" class="form-control" id="nim1" placeholder="<?php echo $this->session->userdata('Fakultas');  ?>">
                                </div>
                                <div class="form-group">
                                    <label for="username1">Program Studi</label>
                                    <input disabled type="text" class="form-control" id="nim1" placeholder="<?php echo $this->session->userdata('Prodi');  ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email1">No Telp</label>
                                    <input disabled type="text" class="form-control" id="phone1" placeholder="<?php echo $this->session->userdata('No_telp');  ?>">
                                </div>

                                <div class="form-group">
                                    <!-- <button type="button" class="btn btn-primary rounded-btn disabled">Simpan
                                            Perubahan</button> -->
                                </div><br><br>
                            </form>

                        </div>
                        <div class="w-sm-100 mr-auto m-3">
                            <h5>Riwayat Laporan</h5>
                            <div class="row">
                                <?php foreach ($dataPengguna as $RL) : ?>

                                    <div class="col-md-6 col-lg-3 mb-4">
                                        <div class="position-relative">
                                            <img src="<?php echo base_url(); ?>dist/images/uploads/<?php echo $RL->image1; ?>" alt="" class="img-fluid">
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
                                                <div class="">Nama Barang: <?php echo $RL->nama_barang; ?> </div>
                                                <div class="">Lokasi: <?php echo $RL->lokasi; ?></div>
                                                <div class="">Tanggal: <?php echo $RL->tgl_posting; ?></div>

                                            </div>
                                            <p class="m-3" style="text-align: center;"><a href="<?php echo base_url(); ?>Edit_Barang/index/<?php echo $RL->ID_posting ?>" class="font-weight-bold text-primary">Lihat Selengkapnya</a></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END: Card DATA-->
    </div>
</main>
<!-- END: Content-->