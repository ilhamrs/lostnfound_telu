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
                        <form action="<?php echo base_url(); ?>Lapor_kehilangan/add" method="POST" enctype="multipart/form-data">
                            <div class="row col-12">
                                <div class="col-12 col-sm-4">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h4 class="card-title">Foto Barang</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="custom-file rounded-pill mb-5">
                                                <input id="customFile1" name="foto1" type="file" class="custom-file-input rounded-pill">
                                                <label for="customFile1" class="custom-file-label rounded-pill">Foto 1</label>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="custom-file rounded-pill mb-5">
                                                <input id="customFile1" name="foto2" type="file" class="custom-file-input rounded-pill">
                                                <label for="customFile1" class="custom-file-label rounded-pill">Foto 2</label>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="custom-file rounded-pill mb-5">
                                                <input id="customFile1" name="foto3" type="file" class="custom-file-input rounded-pill">
                                                <label for="customFile1" class="custom-file-label rounded-pill">Foto 3</label>
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
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>

        <!-- END: Card DATA-->
    </div>
</main>
<!-- END: Content-->