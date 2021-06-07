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
        <?php foreach ($byId as $I) : ?>

            <div class="row">
                <div class="col-12  align-self-center">
                    <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                        <div class="w-sm-100 mr-auto">
                            <!-- <h5 class="mb-0">Selamat Datang di,</h5> -->
                            <h1>Detail <?php echo $I->tipe_posting; ?></h1>
                        </div>

                        <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                            <li class="breadcrumb-item"><a href="home">Home</a></li>
                            <li class="breadcrumb-item"><a href="barang_hilang"><?php echo $I->tipe_posting; ?></a></li>
                            <li class="breadcrumb-item active">Detail <?php echo $I->tipe_posting; ?></li>
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
                                        <div id="carouselExampleIndicators" class="carousel slide pointer-event" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="">
                                                </li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="">
                                                </li>
                                            </ol>
                                            <div class="carousel-inner">

                                                <div class="carousel-item">

                                                    <img class="d-block w-100" src="<?php echo base_url(); ?>dist/images/uploads/<?php echo $I->image1 ?>" alt="First slide">
                                                </div>
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="<?php echo base_url(); ?>dist/images/uploads/<?php echo $I->image2 ?>" alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="<?php echo base_url(); ?>dist/images/uploads/<?php echo $I->image3 ?>" alt="Third slide">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12 col-sm-8">
                                    <form>
                                        <!-- //code mengambil data by ID -->
                                        
                                        <div class="form-group row">
                                            <label for="nama_produk" class="col-sm-2 col-form-label">Nama barang</label>
                                            <div class="col-sm-10">
                                                <input disabled type="text" class="form-control" id="nama_barang" placeholder="<?php echo $I->nama_barang ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="pelapor" class="col-sm-2 col-form-label">Pelapor</label>
                                            <div class="col-sm-10">
                                                <input disabled type="text" class="form-control" id="pelapor" placeholder="<?php echo $I->Nama_Lengkap ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                                            <div class="col-sm-10">
                                                <input disabled type="text" class="form-control" id="lokasi" placeholder="<?php echo $I->lokasi ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tanggal" class="col-sm-2 col-form-label">Tgl Kehilangan</label>
                                            <div class="col-sm-10">
                                                <input disabled type="text" class="form-control" id="date" placeholder="<?php echo $I->tgl_posting ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                                            <div class="col-sm-10">
                                                <input disabled type="text" class="form-control" id="kategori" placeholder="<?php echo $I->kategori ?>">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kontak" class="col-sm-2 col-form-label">Kontak</label>
                                            <div class="col-sm-10">
                                                <input disabled type="number" class="form-control" id="kontak" placeholder="<?php echo $I->no_telp ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                            <div class="col-sm-10">
                                                <textarea disabled name="deskripsi" id="deskripsi" cols="80" rows="5" class="form-control"><?php echo $I->Description ?></textarea>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div><br>
        <?php endforeach; ?>

        <div class="col-12 col-xl-9 mb-5 mb-x">
            <div class="card mb-4">
                <div class="card-body pb-0">
                    <h5 class="header-title  text-uppercase mb-0"><?php echo count($commentPost) ?> Komentar</h5>
                </div>
                <?php foreach ($commentPost as $Comment) : ?>
                    <div class="media d-block d-sm-flex text-center text-sm-left p-4">
                        <img class="img-fluid d-md-flex mr-sm-4 rounded-circle" src="dist/images/author10.jpg" alt="">
                        <div class="media-body align-self-center">
                            <div class="float-sm-right float-none mb-0 my-3 my-sm-0"> <a href="#" class="text-primary"></a>
                                <i class="icofont icofont-bubble-left pr-1"></i> <?php echo $Comment->date ?></a>
                            </div>
                            <h6 class="mb-1 font-weight-bold"><?php echo $Comment->Nama_Lengkap ?></h6>
                            <?php echo $Comment->isi_komentar ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="card">
                <form action="<?php echo base_url(); ?>Detail_barang/add/<?php echo $I->ID_posting ?>" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                        <h5 class="header-title mb-3 text-uppercase">Buat Komentar</h5>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea name="isi_komentar" id="isi_komentar" class="form-control height-200" placeholder="Komentar :"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" value="Save" class="btn btn-primary btn-lg">Kirim Komentar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>


        <!-- END: Card DATA-->
    </div>

</main>
<!-- END: Content-->