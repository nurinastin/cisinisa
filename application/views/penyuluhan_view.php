<!DOCTYPE html>
<html lang="en">
  <head>
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
        <a class="navbar-brand" href="">JADWAL <span>PENYULUHAN</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="../../sewaalat/sewa.php" class="nav-link">Sewa Alat</a></li>
            <li class="nav-item"><a href="<?php echo base_url();?>sinisa/penyuluhan" class="nav-link">Penyuluhan</a></li>
            <li class="nav-item"><a href="<?php echo base_url();?>sinisa/index" class="nav-link">Beranda</a></li>
            <li class="nav-item"><a href="../../logout.php" class="nav-link">Logout</a></li>
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
              <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url();?>application/views/sinisa_home.php">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span><a href="../../beranda/about.php">Tentang <i class="ion-ios-arrow-forward"></i></a></span></p>
              <h1 class="mb-3 bread">PENYULUHAN</h1>
            </div>
          </div>
        </div>
    </section>

    <section class="ftco-section">
      <div class="container">
      <div class="row d-flex mb-5 contact-info justify-content-center">
          <div class="col-md-8">
            <div class="row mb-5">
              <tr>
              <p><h4>Pengajuan jadwal yang diajukan pada hari ini, bisa melakukan penyuluhan mulai tanggal :
              </h4></p>
              <?php echo date('d F Y',strtotime("+7 day")); ?>
              </tr>
              <tr></tr>
            </div>
          </div>
      </div>

      <section class="service-block">
      <link href="<?php echo base_url();?>assets/aberanda/css/style.css" rel="stylesheet">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-6 col-sm-6 col-xs-12 width-50">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <img alt="image" class="img-responsive" src="<?php echo base_url();?>assets/aberanda/images/icons/list.png" a href="<?php echo base_url();?>application/views/penyuluhan_view.php">
                                </div>
                                <h4><a href="<?php echo base_url();?>application/views/penyuluhan_view.php">JADWAL PENYULUHAN</a></h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 mt-25">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <img alt="image" class="img-responsive" src="<?php echo base_url();?>assets/aberanda/images/icons/planner.png" a href="pengajuan.php">
                                </div>
                                <h4><a href="pengajuan.php">PENGAJUAN JADWAL</a></h4>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section><br>

        <div class="table-responsive">
            <table id="recent-purchases-listing" class="table">
            <link rel="stylesheet" href="<?php echo base_url();?>assets/aberanda/css/csscoba.css">
                <thead>
                <!--membuat tabel dengan field yang akan ditampilkan-->
                <center><h4>Data Jadwal Penyuluhan</h4></center>
                <!--membuat tabel dengan border 1-->

                <form action="indexpenyuluhan.php" method="post">
                    <input type="text" name="valueToSearch" placeholder="Cari nama"><br><br>
                    <input type="submit" name="search" value="Cari"><br><br>
                </form>

                    <table border="1" class="table">
                        <tr>
                        <!--kolom pada tabel-->
                            <th>No</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Instansi</th>
                            <th>Tanggal Pengajuan</th>  
                            <th>Tanggal Pelaksanaan</th>
                            <th>Judul Materi Penyuluhan</th>
                        </tr>

                        <?php 
                        $nomor = 1; 
                        //variabel nomor dengan patokan 1 untuk di looping di tabelnya
                        //while itu perulangan tanpa batas
                        foreach ($user as $baris){
                        //mengubah baris data yang dipilih menjadi pecahan array
                        ?>

                        <tr>
                            <!--variabel untuk menampung suatu data-->
                            <td><?php echo $nomor++; ?></td> <!--perulangan pada variabel nomor-->
                            <td><?php echo $baris->nama; ?></td> <!--variabel nama-->
                            <td><?php echo $baris->status; ?></td> <!--variabel status-->
                            <td><?php echo $baris->nama_instansi; ?></td> <!--variabel instansi-->
                            <td><?php echo $baris->tanggal_input; ?></td> <!--variabel tanggal input-->
                            <td><?php echo $baris->tanggal_output; ?></td> <!--variabel tanggal pelaksanaan-->
                            <td><?php echo $baris->materi; ?></td>
                            <td>
                            <?php
                            if($getGrup==1){
                              echo '<a href="'.base_url('sinisa/edit/'.$baris->id).'" class="fa fa-edit"></a>';
                              echo " ";
                              echo '<a href="'.base_url('sinisa/hapus/'.$baris->id).'" class="fa fa-times"></a>';
                            } ?>
                            </td>
                        </tr>

                        <a href="<?php echo base_url('sinisa/edit/' .$baris->id); ?>" class="btn btn-success btn-icon-split">
					              <!--<i class="fas fa-edit" style="padding: 5px;"></i>-->
					              </a>

					              <!--fa fa-edit">&nbsp; -->
					              <a href="<?php echo base_url('sinisa/hapus/' .$baris->id); ?>">
					              <!--<i class="fas fa-trash" style="padding: 5px;"></i>-->
					              </a>
					              <!--class="fa fa-times">-->

                        <?php } ?>
                    </table>
                        <h5>Jumlah Penyuluhan : <?php echo $nomor-1; ?> </h5>
                        <!--menampilkan jumlah sekelas, di -1 karena index mulai dri 1 bukan 0-->

                </thead>
            </table>
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