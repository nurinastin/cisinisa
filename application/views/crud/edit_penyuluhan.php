<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Edit Penyuluhan</title>
    
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
        <a class="navbar-brand" href="">Edit <span>Data Penyuluhan</span></a>
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
            <h1 class="mb-3 bread">PENYULUHAN</h1>
          </div>
        </div>
      </div>
  </section>

<section class="ftco-section">
    	<div class="container">
 
        <!-- partial -->
        <div class="container">
          <div class="card card-login mx-auto mt-5">
            <div class="card-header">Ubah Data Penyuluhan</div>
              <div class="card-body">

                <?php foreach($user as $baris){ ?>

                <form class="user" method="POST" action="<?php echo base_url('sinisa/update');?>">
                  <input type="hidden" name="id" value="<?php echo $baris->id; ?>">
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control rounded-pill" id="nama" name="nama" required value="<?php echo $baris->nama; ?>">
                    </div>
                    <div class="form-group">
                      <label for="nama_instansi">Nama Instansi</label>
                      <input type="text" class="form-control rounded-pill" id="nama_instansi" name="nama_instansi" required value="<?php echo $baris->nama_instansi; ?>">
                    </div>
                    <div class="form-group">
                      <label for="materi">Materi</label>
                      <input type="text" class="form-control rounded-pill" id="materi" name="materi" required value="<?php echo $baris->materi; ?>">
                    </div>
                    <div class="form-group">
                      <label for="tanggal">Tanggal</label>
                      <input type="date" class="form-control rounded-pill" id="tanggal_input" name="tanggal_input" required value="<?php echo $baris->tanggal_input; ?>">
                    </div>
                    <div class="form-group">
                      <label for="tanggal_output">Tanggal output</label>
                      <input type="date" class="form-control rounded-pill" id="tanggal_output" name="tanggal_output" required value="<?php echo $baris->tanggal_output; ?>">
                    </div>
                    <div class="form-group">
                      <label for="status">Status</label>
                        <select name="status" class="form-control rounded-pill" id="status" required>
                        <?php 
                        
                          if($data['status'] == 'sudah dikonfirmasi'){
                        ?>

                          <option selected value="sudah dikonfirmasi">Sudah Dikonfirmasi</option>
                          <option value="belum dikonfirmasi">Belum Dikonfirmasi</option>

                        <?php } else {?>

                          <option value="sudah dikonfirmasi">Sudah Dikonfirmasi</option>
                          <option selected value="belum dikonfirmasi">Belum dikonfirmasi</option>

                        <?php } ?>
                        </select>
                    </div>
                    <br><hr>

                    <div class="row">
                      <div class="left col-md-6">
                        <a href="<?php echo base_url('sinisa/penyuluhan')?>" class="btn btn-danger rounded-pill ml-3">Batal</a>
                      </div>
                    <div class="right col-md-6">
                      <button class="btn btn-primary rounded-pill ml-5" type="submit" name="submit">Ubah</button>
                    </div>
                  </div>
                </form>
                <?php } ?>
              </div>
            </div>
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