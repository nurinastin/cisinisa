<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Daftar Penyewa Barang</title>
    <title>PENYULUHAN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/asewa/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/asewa/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/asewa/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/asewa/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/asewa/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/asewa/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/asewa/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/asewa/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/asewa/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/asewa/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/asewa/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/asewa/css/style.css">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">                         
        <a class="navbar-brand" href="">Daftar <span>Penyewa</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="<?php echo base_url();?>sinisa/sewa" class="nav-link">Sewa Alat</a></li>
            <li class="nav-item"><a href="<?php echo base_url();?>sinisa/penyuluhan" class="nav-link">Penyuluhan</a></li>
            <li class="nav-item"><a href="<?php echo base_url();?>sinisa/index" class="nav-link">Beranda</a></li>
            <li class="nav-item"><a href="<?php echo base_url('login_controller/logout'); ?>" class="nav-link">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?php echo base_url();?>assets/aberanda/images/sawahblur.jpg');" data-stellar-background-ratio="0.5">
    
      <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
              <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url();?><?php echo base_url();?>sinisa/index">Beranda <i class="ion-ios-arrow-forward"></i></a></span></p>
              <h1 class="mb-3 bread">SEWA ALAT</h1>
            </div>
          </div>
        </div>
    </section>

        <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info justify-content-center">
            <div class="col-md-8">
                <div class="row mb-5">
                 
                 
                </div>
          </div>
        </div>
        
        <div class="table-responsive">
                    <!-- <table id="recent-purchases-listing" class="table">
                      <thead> -->

                        <!--membuat tabel dengan field yang akan ditampilkan-->
                        <h3></h3>
                        <!--membuat tabel dengan border 1-->
                        <table class="table table-responsive-sm tble striped table-hover text-center">
                          <thead class="bg-dark text-white">
                            <tr>
                            <!--kolom pada tabel-->
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Nomor Telepon</th>
                                <th>Nama Barang</th>
                                <th>ID Barang</th>
                                <th>Tanggal Sewa</th>
                                <th>Tanggal Kembali</th> 
                                <th>Lama Sewa</th>
                                <th>Harga Sewa</th> 
                                <th>Asal</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                                
                            </tr>
                          </thead>

                            <?php 
                        
                            $nomor = 1; 
                            foreach ($user as $baris){
                            ?>

                            <tr>
                                <!--variabel untuk menampung suatu data-->
                                <td><?php echo $nomor++; ?></td>
                                <td><?php echo $baris['nik']; ?></td> <!--perulangan pada variabel nik-->
                                <td><?php echo $baris['nama']; ?></td> <!--variabel nama-->
                                <td><?php echo $baris['no_telepon']; ?></td> <!--variabel no telp-->
                                <td><?php echo $baris['nama_barang']; ?></td> <!--variabel nama barang-->
                                <td><?php echo $baris['id_barang']; ?></td> <!--variabel id barang-->
                                <td><?php echo $baris['tanggal_sewa']; ?></td> <!--variabel tgl sewa-->
                                <td><?php echo $baris['tanggal_kembali']; ?></td> <!--variabel tgl kembali-->
                                <td><?php echo $baris['jumlah_hari']; ?></td>
                                <td><?php echo $baris['harga_sewa']; ?></td>
                                <td><?php echo $baris['asal']; ?></td> <!--variabel asal-->
                                <td><?php echo $baris['alamat']; ?></td> <!--variabel alamat-->
                                <td>

                                <a href="<?= base_url('sinisa/editpenyewa/' .$baris['nik']); ?>">Edit</a>
                                <a> |</a>
                                <a href="<?= base_url('sinisa/hapuspenyewa/' .$baris['nik']); ?>">Hapus</a>

                                </td>
                            </tr>
                            <a href="<?= base_url('sinisa/editpenyewa/' .$baris['nik']); ?>">Edit
                            <!--<i class="fas fa-edit" style="padding: 5px;"></i>-->
                            </a>

                            <!--fa fa-edit">&nbsp; -->
                            <a href="<?= base_url('sinisa/hapuspenyewa/' .$baris['nik']); ?>">Hapus
                            <!--<i class="fas fa-trash" style="padding: 5px;"></i>-->
                            </a>

                            <?php } ?>
                        </table>
                        <h3>Jumlah Penyewa : <?php echo $nomor-1; ?> </h3>
                        <!--menampilkan jumlah sekelas, di -1 karena index mulai dri 1 bukan 0-->
                      </thead>
                    </table>
                  </div>
                </div>
              </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Tentang SI-NISA</h2>
              <p>Sebuah aplikasi yang diharapkan dapat membantu kegiatan pertanian dalam menyewa alat pertanian dan penyuluhan yang diisi oleh ahli kepada para petani.</p>
            </div>
          </div>
        
          <div class="col-md"></div>
          
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Mempunyai Pertanyaan?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">JL. Semangka No.33 , Kelurahan Baratan, Patrang, Jember, Jawa Timur.</span></li>
                  <li><a><span class="icon icon-phone"></span><span class="text"> (0331) 567234</span></a></li>
                  <li><a><span class="icon icon-globe"></span><span class="text">sinisa.mif-project.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p><!-- Copyright -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> by <a href="" target="_blank">INKA GROUP</a>
            </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="<?php echo base_url();?>assets/asewa/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/asewa/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url();?>assets/asewa/js/popper.min.js"></script>
  <script src="<?php echo base_url();?>assets/asewa/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/asewa/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url();?>assets/asewa/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url();?>assets/asewa/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url();?>assets/asewa/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>assets/asewa/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url();?>assets/asewa/js/aos.js"></script>
  <script src="<?php echo base_url();?>assets/asewa/js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo base_url();?>assets/asewa/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url();?>assets/asewa/js/jquery.timepicker.min.js"></script>
  <script src="<?php echo base_url();?>assets/asewa/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url();?>assets/asewa/js/google-map.js"></script>
  <script src="<?php echo base_url();?>assets/asewa/js/main.js"></script>
   
   </body> 
</html>
