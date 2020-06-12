<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pengajuan Sewa Alat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/asewa/')?>css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/asewa/')?>css/animate.css">
    
    <link rel="stylesheet" href="<?= base_url('assets/asewa/')?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/asewa/')?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/asewa/')?>css/magnific-popup.css">

    <link rel="stylesheet" href="<?= base_url('assets/asewa/')?>css/aos.css">

    <link rel="stylesheet" href="<?= base_url('assets/asewa/')?>css/ionicons.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/asewa/')?>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?= base_url('assets/asewa/')?>css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?= base_url('assets/asewa/')?>css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url('assets/asewa/')?>css/icomoon.css">
    <link rel="stylesheet" href="<?= base_url('assets/asewa/')?>css/style.css">
    <script src="<?php echo base_url();?>assets/asewa/js/jquery-3.4.1.js"></script>  
    <script>
    // alert();
       $(function(){
        $('#tanggalsewa').change(function(){
          console.log("taggal sewa diubah");
        let tanggalsewa = $('#tanggalsewa').val();
        $('#tanggalkembali').attr('min',tanggalsewa);
      });
      $("#tanggalkembali").change(function(){
        console.log("taggal kembali diubah");
        var tanggal_sewa = $("#tanggalsewa").val();
        var tanggal_kembali = $(this).val();
        var firstDate = new Date(tanggal_kembali); // Todays date
        var secondDate = new Date(tanggal_sewa);

        var diffDays = (firstDate.getDate() - secondDate.getDate());
        $("#lamasewa").val(diffDays);
        var harga = <?= $barang->harga ?>;
        var total = (parseInt(diffDays) * parseInt(harga));
        $("#harga_sewa").val(total)
      })
       })
    </script>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">                         
        <a class="navbar-brand" href="">Pengajuan <span>Sewa Alat</span></a>
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
        
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-8 mb-md-5">
            
          	<h2 class="text-center">Harap isi form penyewaan alat <br>dengan benar dan lengkap</h2>
            <form action="<?php echo base_url().'sinisa/inputsewa';?>" id="form-input" method="POST">
              <div class="form-group">
                <label for="nama">NIK</label>
                        <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK" required>
              </div>
              <div class="form-group">
                <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
              </div>
              <div class="form-group">
                <label for="nama">Nomor Telepon</label>
                        <input type="text" class="form-control" name="no_telepon" id="no_telepon" placeholder="Nomor Telepon" required>
              </div>
              <div class="form-group">
                <label for="nama">Nama Barang
                        <input type="text" class="form-control" name="nama_barang" id="nama_barang" value="<?php echo $user['nama_barang']; ?>" >
              </label>
              </div>
              <div class="form-group">
                <label for="nama">ID Barang
                        <input type="text" class="form-control" name="id_barang" id="id_barang" value="<?php echo $user['id_barang']; ?>" >
              </label>
              </div>
              <div class="form-group">
                <label for="tempat">Tanggal Sewa</label>
                        <div class="input-group">
                            <input id="tanggalsewa" type="date" min="<?= date('Y-m-d'); ?>" max="" class="form-control" placeholder="tanggalsewa" name="tanggalsewa" required>
              </div>
              </div>
              <div class="form-group">
                <label for="tempat">Tanggal Kembali</label>
                        <div class="input-group">
                            <input id="tanggalkembali" type="date" min="" max="" class="form-control" placeholder="tanggalkembali" name="tanggalkembali" required>
               </div>
              </div>
              
              <div class="form-group">
                <label for="nama">Lama Sewa</label>
                        <input type="text" class="form-control" name="lamasewa" value="" id="lamasewa" placeholder="Lama Sewa" required readonly>
                          
              </div>
              <div class="form-group">
                <label for="nama">Harga Total Sewa</label>
                        <input type="text" value="" class="form-control" name="harga_sewa" id="harga_sewa" placeholder="Harga Sewa" required readonly>
              </div>
              <div class="form-group">
                <label for="nama">Asal</label>
                        <input type="text" class="form-control" name="asal" id="asal" placeholder="Asal" required>
              </div>
              <div class="form-group">
                <label for="nama">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" required>
              </div>
              <div class="form-group">
                <input name="input" id="input" type="submit" value="sewabarang" class="btn btn-primary py-3 px-5">
              </div>
            </form>
            <?php
              
            ?>
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


<!--   <script src="js/jquery.min.js"></script> -->
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
  <script src="<?php echo base_url();?>assets/asewa/js/sweetalert2.js"></script>
  <script>
    $(document).ready(function(){
      alert();
      console.log("berhasil");
     

      $('input[type=date]').change(function(){
        let tanggalsewa = $('#tanggalsewa').val();
        let tanggalkembali = $('#tanggalkembali').val();
        let tanggal1 = parseInt(tanggalsewa.slice(8,10));
        let tanggal2 = parseInt(tanggalkembali.slice(8,10));
        let lama = tanggal2 - tanggal1;
        let harga = <?= $data['harga'] ?>;
          if (!lama) {
            $('#lamasewa').val(0);
            $('#harga_sewa').val(0);
          }else if(tanggal2 < tanggal1){
            let lama = tanggal1 - tanggal2;
            $('#lamasewa').val(lama);
            $('#harga_sewa').val(lama * harga);
          }else{
            $('#lamasewa').val(lama);
            $('#harga_sewa').val(lama * harga);
          }
      });

      $('#input').on('click',function(e){
        let data1 = $('#form-input').serialize();
        $.ajax({
          url:'sinisa/inputsewa',
          method:'post',
          data:data1,
          success:function(data){
            Swal.fire(
              'Data Berhasil Disimpan!',
              'Klik untuk lanjut!',
              'success'
            )
              window.location.href='notif.php'
          }
        });
        e.preventDefault();
      });

    });
  </script>
<!--   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script> -->
  <script src="<?php echo base_url();?>assets/asewa/js/main.js"></script>

  


  </body>
</html>
