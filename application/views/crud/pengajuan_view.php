<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pengajuan Jadwal Penyuluhan</title>
    
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
    <link rel="stylesheet" href="<?php echo base_url();?>assets/asewa/sewaalat/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/asewa/css/style.css">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">                         
        <a class="navbar-brand" href="">Pengajuan <span>Jadwal Penyuluhan</span></a>
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
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url();?>sinisa/index">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span><a href="<?php echo base_url();?>sinisa/index">Tentang <i class="ion-ios-arrow-forward"></i></a></span></p>
            <h1 class="mb-3 bread">PENYULUHAN</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="service-block">
      <link href="<?php echo base_url();?>assets/aberanda/css/style.css" rel="stylesheet">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-6 col-sm-6 col-xs-12 width-50">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <img alt="image" class="img-responsive" src="<?php echo base_url();?>assets/aberanda/images/icons/list.png" a href="<?php echo base_url();?>sinisa/index">
                                </div>
                                <h4><a href="<?php echo base_url();?>sinisa/penyuluhan">JADWAL PENYULUHAN</a></h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 mt-25">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <img alt="image" class="img-responsive" src="<?php echo base_url();?>assets/aberanda/images/icons/planner.png" a href="<?php echo base_url();?>sinisa/pengajuan">
                                </div>
                                <h4><a href="<?php echo base_url();?>sinisa/tambah">PENGAJUAN JADWAL</a></h4>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section><br>

            <section class="ftco-section contact-section">
                  <div class="container">
                    <div class="row d-flex mb-5 contact-info justify-content-center">
                      <div class="col-md-8">
                        <div class="row mb-5">
                                <p><h5>Pengajuan jadwal yang diajukan pada hari ini, bisa melakukan penyuluhan mulai tanggal :
                                </h5></p>
                                <?php echo date('d F Y',strtotime("+7 day")); ?>
                                <p><h5>Jadwal penyuluhan yang telah dibuat tidak bisa dibatalkan. Pastikan anda membuat jadwal yang tepat.</h5></p>
                        </div>
                      </div>
                    </div>

      
        
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-8 mb-md-5">
          	<h4 class="text-center">Harap isi data pengajuan jadwal <br>dengan benar dan lengkap</h4><br><br>
            <form action="<?php echo base_url().'sinisa/input';?>" method="post">
              <div class="form-group">
                <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
              </div>
              <div class="form-group">
                <label for="nama">Nama Instansi</label>
                        <input type="text" class="form-control" name="nama_instansi" id="asal" placeholder="Nama Instansi" required>
              </div>
              
              <div class="form-group">
                <label for="nama">Judul Materi</label>
                  <input type="text" class="form-control" name="materi" id="materi" placeholder="Tuliskan Judul Materi Penyuluhan Dengan Lengkap" required>
              </div>
              <div class="form-group">
                <label for="tempat">Tanggal Pengajuan</label>
                  <div class="input-group">
                    <input type="date" class="form-control" placeholder="Tanggal Input" name="tanggal_input" id="tanggal_input" value="<?= date('Y-m-d')?>" required>
                  </div>
              </div>
              <div class="form-group">
                <label for="tempat">Tanggal Pelaksanaan</label>
                  <div class="input-group">
                    <input type="date" class="form-control" placeholder="Tanggal Pelaksanaan" name="tanggal_output" id="tanggal_output" min="<?= date('Y-m-d',strtotime("+7 day"));?>" value="<?date('Y-m-d')?>" required>
                      <div class="invalid-feedback">    
                      </div>
              </div>

              <input type="submit" class="btn btn-primary btn-icon-split" name="submit" value="Tambah" style="padding: 5px;">
            </form>
          </div>
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