<!-- START: Main Content-->
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row">
            <div class="col-12  align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto">
                        <h1>Barang Hilang</h1>
                    </div>

                    <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();
                                                                'Home/index' ?>">Home</a></li>
                        <li class="breadcrumb-item active">Barang Hilang</li>
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
                                        </select>
                                    </div>
                                    <div class="form-group col-4 mb-3">
                                        <button type="submit" class="btn btn-primary">Filter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="row row-cols-2">
                            <?php foreach ($hilang as $barangHilang) : ?>
                                <div class="col-md-6 col-lg-3 mb-4">
                                    <div class="position-relative">
                                        <img src="<?php echo base_url(); ?>dist/images/uploads/<?php echo $barangHilang['image1'] ?>" alt="" class="img-fluid">
                                        <div class="caption-bg bg-transparent text-right">
                                            <div class="d-table w-100 h-100 ">
                                                <div class="d-table-cell align-bottom">
                                                    <div class="mb-3">
                                                        <a href="#" class="rounded-left bg-white px-3 py-2 shadow2"><?php echo $barangHilang['tipe_posting']; ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-3">
                                        <div class="clearfix">
                                            <div class="">Nama Barang: <?php echo $barangHilang['nama_barang']; ?></div>
                                            <div class="">Lokasi: <?php echo $barangHilang['lokasi']; ?></div>
                                            <div class="">Tanggal: <?php echo $barangHilang['tgl_posting']; ?></div>

                                        </div>
                                        <p class="m-3" style="text-align: center;"><a href="<?php echo base_url(); ?>Detail_Barang/index/<?php echo $barangHilang['ID_posting'] ?>" class="font-weight-bold text-primary">Lihat Selengkapnya</a></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                    <div class="row">
                        <?php echo $pagination; ?>
                    </div>
                </div>
            </div>


        </div>

    </div>

    <!-- END: Card DATA-->
    </div>
    <br><br><br>


</main>
<!-- END: Content-->



<!-- START: Back to top-->
<a href="#" class="scrollup text-center">
    <i class="icon-arrow-up"></i>
</a>
<!-- END: Back to top-->