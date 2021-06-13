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
                            <h1>Edit <?php echo $I->tipe_posting; ?></h1>
                        </div>

                        <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                            <li class="breadcrumb-item"><a href="home">Home</a></li>
                            <li class="breadcrumb-item"><a href="barang_hilang"><?php echo $I->tipe_posting; ?></a></li>
                            <li class="breadcrumb-item active">Edit <?php echo $I->tipe_posting; ?></li>
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
                                    <form action="<?php echo base_url(); ?>Edit_barang/edit/<?php $I->ID_posting; ?>" method="POST" enctype="multipart/form-data">
                                        <!-- //code mengambil data by ID -->
                                        <input type="hidden" name="id" id="id" value="<?php echo $I->ID_posting ?>">
                                        <div class="form-group row">
                                            <label for="nama_barang" class="col-sm-2 col-form-label">Nama barang</label>
                                            <div class="col-sm-10">
                                                <input value="<?php echo $I->nama_barang ?>" type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="<?php echo $I->nama_barang ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                                            <div class="col-sm-10">
                                                <select id="lokasi" name="lokasi" class="form-control">
                                                    <option selected="" value="<?php echo $I->lokasi ?>"><?php echo $I->lokasi ?></option>
                                                    <option value="Gd. Bangkit">Gd. Bangkit</option>
                                                    <option value="Gd. Lingian">Gd. Lingian</option>
                                                    <option value="Gd. Panehan">Gd. Panehan</option>
                                                    <option value="Gd. Barung">Gd. Barung</option>
                                                    <option value="Gd. Ararkula">Gd. Ararkula</option>
                                                    <option value="Gd. Deli">Gd. Deli</option>
                                                    <option value="Gd. Karang">Gd. Karang</option>
                                                    <option value="Gd. Mangudu">Gd. Mangudu</option>
                                                    <option value="Gd. Panambulai">Gd. Panambulai</option>
                                                    <option value="Gd. Kultubai Utara">Gd. Kultubai Utara</option>
                                                    <option value="Gd. Kultubai Selatan">Gd. Kultubai Selatan</option>
                                                    <option value="Gd. Miossu">Gd. Miossu</option>
                                                    <option value="Gd. Maratua">Gd. Maratua</option>
                                                    <option value="Gd. Marore">Gd. Marore</option>
                                                    <option value="Gd. Miangas">Gd. Miangas</option>
                                                    <option value="Gd. Marampit">Gd. Marampit</option>
                                                    <option value="Gd. Mangkai">Gd. Mangkai</option>
                                                    <option value="Gd. Manterawu">Gd. Manterawu</option>
                                                    <option value="Gd. Kawalusu">Gd. Kawalusu</option>
                                                    <option value="Gd. Intata">Gd. Intata</option>
                                                    <option value="Gd. Sebatik">Gd. Sebatik</option>
                                                    <option value="Gd. Selaru">Gd. Selaru</option>
                                                    <option value="Grha Wiyata Cacuk Sudarijanto-A">Grha Wiyata Cacuk Sudarijanto-A</option>
                                                    <option value="Grha Wiyata Cacuk Sudarijanto-B">Grha Wiyata Cacuk Sudarijanto-B</option>
                                                    <option value="Gd. Tokong Nanas">Gd. Tokong Nanas</option>
                                                    <option value="Masjid Syamsul Ulum">Masjid Syamsul Ulum</option>
                                                    <option value="Gd. Alor">Gd. Alor</option>
                                                    <option value="Gd. Karaweira">Gd. Karaweira</option>
                                                    <option value="Gd. Pelampong">Gd. Pelampong</option>
                                                    <option value="Gd. Damar">Gd. Damar</option>
                                                    <option value="Gd. Benggala">Gd. Benggala</option>
                                                    <option value="Gd. Laag">Gd. Laag</option>
                                                    <option value="Gd. Larat">Gd. Larat</option>
                                                    <option value="Gd. Leti">Gd. Leti</option>
                                                    <option value="Gd. Liki">Gd. Liki</option>
                                                    <option value="Gd. Lingian">Gd. Lingian</option>
                                                    <option value="Gd. Liran">Gd. Liran</option>
                                                    <option value="Gd. Sambit">Gd. Sambit</option>
                                                    <option value="Gd. Sebetul">Gd. Sebetul</option>
                                                    <option value="Gd. Sekatung">Gd. Sekatung</option>
                                                    <option value="Gd. Sekel">Gd. Sekel</option>
                                                    <option value="Gd. Dana">Gd. Dana</option>
                                                    <option value="Gd. Dona">Gd. Dona</option>
                                                    <option value="Gd. Enggano">Gd. Enggano</option>
                                                    <option value="Gd. Enu">Gd. Enu</option>
                                                    <option value="Gd. Fani">Gd. Fani</option>
                                                    <option value="Gd. Fanildo">Gd. Fanildo</option>
                                                    <option value="Gd. Batek">Gd. Batek</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tgl_kehilangan" class="col-sm-2 col-form-label">Tgl <?php echo $I->tipe_posting; ?></label>
                                            <div class="col-sm-10">
                                                <input value="<?php echo $I->tgl_kehilangan ?>" type="date" class="form-control" name="tgl_kehilangan" id="tgl_kehilangan" placeholder="<?php echo $I->tgl_kehilangan ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                                            <div class="col-sm-10">
                                                <select id="kategori" name="kategori" class="form-control">
                                                    <option selected="" value="<?php echo $I->kategori ?>"><?php echo $I->kategori ?></option>
                                                    <option value="Alat tulis">Alat tulis</option>
                                                    <option value="Surat berharga">Surat berharga</option>
                                                    <option value="Alat elektronik">Alat elektronik</option>
                                                    <option value="Handphone dan aksesoris">Handphone dan aksesoris</option>
                                                    <option value="Laptop dan Aksesoris">Laptop dan Aksesoris</option>
                                                    <option value="Kartu identitas">Kartu identitas</option>
                                                    <option value="Dompet">Dompet</option>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="no_telp" class="col-sm-2 col-form-label">Kontak</label>
                                            <div class="col-sm-10">
                                                <input value="<?php echo $I->no_telp ?>" type="number" class="form-control" name="no_telp" id="no_telp" placeholder="<?php echo $I->no_telp ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                            <div class="col-sm-10">
                                                <textarea name="deskripsi" id="deskripsi" cols="80" rows="5" class="form-control"><?php echo $I->Description ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" value="Save" class="btn btn-primary btn-lg">Simpan Perubahan</button>
                                            </div>
                                        </div>
                                    </form>
                                    <a data-toggle="modal" data-target="#exampleModal" href="" class="btn btn-danger mb-2"><i class="fa fa-trash"></i> Hapus</a>

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
                        <img class="img-fluid d-md-flex mr-sm-4 rounded-circle" src="<?php echo base_url(); ?>dist/images/author10.jpg" alt="">
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Laporan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Anda yakin ingin menghapus laporan ini? Laporan yang sudah terhapus tidak dapat dikembalikan.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <a href="<?php echo base_url(); ?>Edit_Barang/delete/<?php echo $I->ID_posting ?>" type="button" class="btn btn-danger  mb-2">Hapus Laporan</a>
                </div>
            </div>
        </div>
    </div>

</main>
<!-- END: Content-->