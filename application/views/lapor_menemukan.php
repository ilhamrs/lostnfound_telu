<!-- START: Main Content-->
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row">
            <div class="col-12  align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto">
                        <!-- <h5 class="mb-0">Selamat Datang di,</h5> -->
                        <h1>Form Lapor Menemukan</h1>
                    </div>

                    <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                        <li class="breadcrumb-item"><a href="home">Home</a></li>
                        <li class="breadcrumb-item active">Lapor Menemukan</li>
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
                        <form action="<?php echo base_url(); ?>lapor_menemukan/add" method="POST" enctype="multipart/form-data">
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
                                        <label for="tgl_kehilangan" class="col-sm-2 col-form-label">Tgl Ditemukan</label>
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