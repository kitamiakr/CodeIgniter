<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin</title>

<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=base_url()?>assets/css/datepicker3.css" rel="stylesheet">
<link href="<?=base_url()?>assets/css/bootstrap-table.css" rel="stylesheet">
<link href="<?=base_url()?>assets/css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="<?=base_url()?>assets/js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/sekolahjogja/"><span>SEKOLAHJOGJA </span> Public</a>
				
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
<form role="search">
			<div class="form-group">
				<p> Welcome ! </p>
			</div>
		</form>
<br>
		<ul class="nav menu">	
			<li><a href="/sekolahjogja/"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Beranda </a></li>
			</ul>
			<br>
		<ul class="nav menu">

			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-w"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Data Sekolah
				</a>
				<ul class="children collapse" id="sub-item-w">
				<li>
					<a class="" href="<?php echo base_url('c_public/sekolah'); ?>">
						<span data-toggle="collapse" href="#sub-item-w"></span> Jenjang
					</a>
				</li>
				<li>
					<a class="" href="<?php echo base_url('c_public/data_prestasi'); ?>">
						<span data-toggle="collapse" href="#sub-item-w"></span> Prestasi
					</a>
				</li>
				<li>
					<a class="" href="<?php echo base_url('c_public/data_akreditasi'); ?>">
						<span data-toggle="collapse" href="#sub-item-w"></span> Akreditasi
					</a>
				</li>
				</ul>
			</li>
			</ul>
			<br>
			<ul class="nav menu">	
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-q"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Data Siswa
				</a>
				<ul class="children collapse" id="sub-item-q">
				<li>
					<a class="" href="<?php echo base_url('c_public/siswa_kabupaten_jnj'); ?>">
						<span data-toggle="collapse" href="#sub-item-w"></span> Jenjang
					</a>
				</li>
				<li>
					<a class="" href="<?php echo base_url('c_public/siswa'); ?>">
						<span data-toggle="collapse" href="#sub-item-w"></span> Jenis Kelamin
					</a>
				</li>
				<li>
					<a class="" href="<?php echo base_url('c_public/siswakms'); ?>">
						<span data-toggle="collapse" href="#sub-item-w"></span> KMS/Non-KMS
					</a>
				</li>
				</ul>
			</li>
		</ul>
		<br>
			<ul class="nav menu">

			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-r"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Data Guru
				</a>
				<ul class="children collapse" id="sub-item-r">
				<li>
					<a class="" href="<?php echo base_url('c_public/guru_jk_kab'); ?>">
						<span data-toggle="collapse" href="#sub-item-r"></span> Jenis Kelamin
					</a>
				</li>
				<li>
					<a class="" href="<?php echo base_url('c_public/guru_kab_sts'); ?>">
						<span data-toggle="collapse" href="#sub-item-r"></span> Status Pegawai
					</a>
				</li>
				<li>
					<a class="" href="<?php echo base_url('c_public/guru_kab_stf'); ?>">
						<span data-toggle="collapse" href="#sub-item-r"></span> Sertifikasi
					</a>
				</li>
				<li>
					<a class="" href="<?php echo base_url('c_public/guru_kab_pen'); ?>">
						<span data-toggle="collapse" href="#sub-item-r"></span> Pendidikan Terkahir
					</a>
				</li>
				</ul>
			</li>
			</ul>
			<br>
			<ul class="nav menu">

			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-z"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Data Tenkependik
				</a>
				<ul class="children collapse" id="sub-item-z">
				<li>
					<a class="" href="<?php echo base_url('c_public/ten_jk_kab'); ?>">
						<span data-toggle="collapse" href="#sub-item-z"></span> Jenis Kelamin
					</a>
				</li>
				<li>
					<a class="" href="<?php echo base_url('c_public/ten_kab_sts'); ?>">
						<span data-toggle="collapse" href="#sub-item-z"></span> Status Pegawai
					</a>
				</li>
				<li>
					<a class="" href="<?php echo base_url('c_public/ten_kab_pen'); ?>">
						<span data-toggle="collapse" href="#sub-item-z"></span> Pendidikan Terkahir
					</a>
				</li>
				</ul>
			</li>
			</ul>
		<br>
			<ul class="nav menu">	
			<li><a href="/sekolahjogja/login_sekolah" ><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg></use></svg>Login</a></li>
			</ul>
	</div><!--/.sidebar-->



