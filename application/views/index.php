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
                                <form action="<?php echo base_url(); ?>Home/index/" method="POST">
                                    <div class="form-row">
                                        <div class="form-group col-4 mb-3">
                                            <input type="text" class="form-control" name="cari" placeholder="Cari barang...">
                                        </div>
                                        <div class="form-group col-3 mb-3">
                                            <select name="urutkan" class="form-control">
                                                <option selected value="">Urutkan</option>
                                                <option value="terlama">Terlama</option>
                                                <option value="terbaru">Terbaru</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-3 mb-3">
                                            <select name="kategori" class="form-control">
                                                <option selected value="">kategori - semua </option>
                                                <?php foreach ($kategori as $ka) : ?>
                                                    <option <?php echo ($ka['kategori'] == $kategori) ? 'selected' : ''; ?> value="<?php echo $ka['kategori']; ?>">
                                                        <?php echo $ka['kategori']; ?></option>';
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-2 mb-3">
                                            <input class="btn btn-primary" type="submit" name="submit" value="cari"></input>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="row row-cols-2">
                                <!-- satu postingan barang Ditemukan && barang Hilang -->
                                <?php if (empty($barang)) { ?>
                                    <div class="d-flex justify-content-center lockscreen  mt-5 mb-5 shadow-none">
                                        <div class=" jumbotron mb-0 text-center theme-background ">
                                            <h1 class="display-3 font-weight-bold"> 404</h1>
                                            <h5><i class="ion ion-alert pr-2"></i>Oops! ada yang salah </h5>
                                            <p>Data yang anda cari : <?php echo $kata; ?>, Silahkan ketik kembali data yang ingin anda cari</p>
                                            <p>Jika ingin menampilkan seluruh data kembali klik <span class="font-weight-bold"> TOMBOL CARI </span> lagi</p>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php foreach ($barang as $h) : ?>
                                    <div class="col-md-6 col-lg-3 mb-4">
                                        <div class="position-relative">
                                            <img src="<?php echo base_url(); ?>dist/images/uploads/<?php echo $h['image1'] ?>" alt="" class="img-fluid">
                                            <div class="caption-bg bg-transparent text-right">
                                                <div class="d-table w-100 h-100 ">
                                                    <div class="d-table-cell align-bottom">
                                                        <div class="mb-3">
                                                            <a href="#" class="rounded-left bg-white px-3 py-2 shadow2"><?php echo $h['tipe_posting'] ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <div class="clearfix">
                                                <div class="">Nama Barang: <?php echo $h['nama_barang'] ?></div>
                                                <div class="">Lokasi: <?php echo $h['lokasi'] ?></div>
                                                <div class="">Tanggal: <?php echo $h['tgl_posting'] ?></div>
                                            </div>
                                            <p class="m-3" style="text-align: center;"><a href="<?php echo base_url(); ?>Detail_Barang/index/<?php echo $h['ID_posting'] ?>" class="font-weight-bold text-primary">Lihat Selengkapnya</a></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <!-- tombol Previous dan Next  -->

                                <?php echo $pagination; ?>
                            </div>
                        </div>


                    </div>

                </div>

                <!-- END: Card DATA-->
            </div>


    </main>
    <!-- END: Content-->



    <!-- START: Back to top-->
    <a href="#" class="scrollup text-center">
        <i class="icon-arrow-up"></i>
    </a>
    <!-- END: Back to top-->