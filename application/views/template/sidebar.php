  <!-- START: Main Menu-->
  <div class="sidebar">
      <div class="site-width">
          <!-- START: Menu-->

          <br>
          <div style="text-align: center;">
              <img src="<?php echo base_url(); ?>dist/images/contact-3.jpg" width="100" alt="" class="img-fluid rounded-circle"><br><br>
              <h5> <?php echo $this->session->userdata('username')  ?></h5>
              <a href="<?php echo base_url(); ?>Profile/index"><i class="icon-user"></i> Lihat Profile</a>
          </div>
          <ul id="side-menu" class="sidebar-menu">
              <li class="dropdown active"><a href="#"><i class="icon-home mr-1"></i> Beranda</a>
                  <ul>
                      <li <?php if ($this->uri->segment(1) == "Home") {
                                echo 'class="active"';
                            } ?>><a href="<?php echo base_url(); ?>Home/index"><i class="icon-home"></i> Beranda</a></li>
                      <li <?php if ($this->uri->segment(1) == "Barang_Ditemukan") {
                                echo 'class="active"';
                            } ?>><a href="<?php echo base_url(); ?>Barang_Ditemukan/index"><i class="icon-magnifier"></i> Barang Ditemukan</a>
                      </li>
                      <li <?php if ($this->uri->segment(1) == "Barang_hilang") {
                                echo 'class="active"';
                            } ?>><a href="<?php echo base_url(); ?>Barang_hilang/index"><i class="icon-magnifier"></i> Barang Hilang</a>
                      </li>


                  </ul>
              </li>
              <li class="dropdown"><a href="#"><i class="icon-menu mr-1"></i> Buat Laporan</a>
                  <ul>
                      <li <?php if ($this->uri->segment(1) == "Lapor_kehilangan") {
                                echo 'class="active"';
                            } ?>><a href="<?php echo base_url(); ?>Lapor_kehilangan/index"><i class="icon-pencil"></i> Lapor Kehilangan</a>
                      </li>
                      <li <?php if ($this->uri->segment(1) == "Lapor_menemukan") {
                                echo 'class="active"';
                            } ?>><a href="<?php echo base_url(); ?>Lapor_menemukan/index"><i class="icon-pencil"></i> Lapor Menemukan</a>
                      </li>


                  </ul>
              </li>
              <li class="dropdown"><a href="#"><i class="icon-menu mr-1"></i> Lainnya</a>
                  <ul>
                      <li <?php if ($this->uri->segment(1) == "Tentang_Kami") {
                                echo 'class="active"';
                            } ?>><a href="<?php echo base_url(); ?>Tentang_Kami/index"><i class="icon-info"></i> Tentang Kami</a>
                      </li>
                      <li><a href="#"><i class="icon-support"></i> Bantuan</a>
                      </li>
                      <li <?php if ($this->uri->segment(1) == "Kirim_Masukan") {
                                echo 'class="active"';
                            } ?>><a href="<?php echo base_url(); ?>Kirim_Masukan/index"><i class="icon-envelope"></i> Kirim Masukan</a>
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