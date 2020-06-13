<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>SINISA | Daftar</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/alogin/fonts/linearicons/style.css')?>">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/alogin/css/style.css')?>">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				
				<form method="POST" action="<?php echo base_url('login_controller/input_daftar');?>">
					<h3>Daftar</h3>
					<span class="login100-form-avatar">
						<img src="<?php echo base_url('assets/alogin/images/SINISA.png')?>" alt="">
					</span>
					<div class="form-holder">
						<input type="text" class="form-control" placeholder="NIK" name="nik">
					</div>
					<div class="form-holder">
						<input type="text" class="form-control" placeholder="Nama" name="nama">
					</div>
					<div class="form-holder">
						<input type="text" class="form-control" placeholder="Alamat" name="alamat">
					</div>
					<!-- <div class="form-holder">
						<input type="text" class="form-control" placeholder="Email" name="email_pengguna">
					</div> -->
					
					<div class="form-holder">
						<input type="text" class="form-control" placeholder="Username" name="username">
					</div>
					<div class="form-holder">
						<input type="password" class="form-control" placeholder="Kata Sandi" name="password">
					</div>
					<button type="submit" name="submit">
						<span>Daftar</span>
						<a href="<?php echo base_url('login_controller/index');?>" class="txt2">
							</a>
					</button>
				</form>
				
			</div>
			
		</div>
		
		<script src="<?php echo base_url('assets/alogin/js/jquery-3.3.1.min.js')?>"></script>
		<script src="<?php echo base_url('assets/alogin/js/main.js')?>"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>