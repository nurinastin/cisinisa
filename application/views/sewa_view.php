<?php 
  require_once '../koneksi.php';
  $result = mysqli_query($host,"SELECT * FROM barang");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>si-nisa</title>
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
	      <a class="navbar-brand" href="">Sewa <span>Alat</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          
	          
	          <li class="nav-item"><a href="" class="nav-link">Sewa Alat</a></li>
            <li class="nav-item"><a href="<?php echo base_url();?>application/views/penyuluhan_view.php" class="nav-link">Penyuluhan</a></li>
            <li class="nav-item"><a href="<?php echo base_url();?>application/views/sinisa_home.php" class="nav-link">Beranda</a></li>
            <li class="nav-item"><a href="../logout.php" class="nav-link">Logout</a></li>
	          
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/sawah.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url();?>application/views/sinisa_home.php">Beranda <i class="ion-ios-arrow-forward"></i></a></span></span></p>
            <h1 class="mb-3 bread">Pilih Alat Pertanian</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">

    		<?php 
          $numcol = 4;
          $countrow = 0;
          $colwidth = 12 / $numcol;
        ?>
        <div class="row">
         <?php while ($data = mysqli_fetch_assoc($result)) { ?>

    			<div class="col-md-<?= $colwidth; ?>">
    				<div class="car-wrap ftco-animate">
    					<div class="img d-flex align-items-end" style="background-image: url(images/<?= $data['gambar']; ?>);">
    						<div class="price-wrap d-flex">
    							<span class="rate">Rp. <?= number_format($data['harga'],0,',','.') ?></span>
    							<p class="from-day">
    								<span>/Hari</span>
    							</p>
    						</div>
    					</div>
    					<div class="text p-4 text-center">
    						<h2 class="mb-0"><a href=""><?= $data['nama_barang']; ?></a></h2>
    						<a href="detailbarang.php?id=<?= $data['id_barang']; ?>" class="btn btn-black btn-outline-black ml-1">Details</a></p>
    					</div>
    				</div>
    			</div>
    			
          <?php 
            $countrow++;
            if ($countrow % $numcol == 0){
              echo '</div><div class="row">';
            }
            }
          ?>
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


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>