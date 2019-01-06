<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<meta charset="utf-8">
	<meta name="description" content="Login Homepage">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/tampilanlogin.css">
	<script src="<?php echo base_url(); ?>/js/tampilanlogin"></script>
</head>
<body>
	<div class="top-head">
		<p>PORTAL EVALUASI DESA TANGGUH BENCANA</p>
	</div>
	<div class="nav">
		<button class="myButton" type="button" onclick="window.location='<?php echo site_url("Welcome/index");?>'">Kembali</button>
		<button class="myButton" type="button" onclick="window.location='<?php echo site_url("Welcome/masukadmin");?>'">Admin</button>
	</div>

	<!--========================================================-->

	<div class="loginDiv" id="loginmasuk">
		<p class="login">MASUK SEBAGAI</p>
		<div class="login-user">
			<div class="user-image" onclick="window.location='<?php echo site_url("Welcome/masukmasyarakat");?>'">
				<img src="<?php echo base_url(); ?>/picture/masyarakat.png">
				<p>Masyarakat</p>
			</div>
			<div class="user-image" onclick="window.location='<?php echo site_url("Welcome/masukfasilitator");?>'">
				<img src="<?php echo base_url(); ?>/picture/fasilitator.png">
				<p>Fasilitator</p>
			</a></div>
			<div class="user-image" onclick="window.location='<?php echo site_url("Welcome/masukbnpb");?>'">
				<img src="<?php echo base_url(); ?>/picture/bnpb.png">
				<p>BNPB</p>
			</a></div>
		</div>
	</div>
	       
	

</body>
</html>