<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='shortcut icon' href="http://sekolah.data.kemdikbud.go.id/assets/image/iconsekolah.png">
<title>Admin Sekolah</title>

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
				<a class="navbar-brand" href="#"><span>SEKOLAHJOGJA </span> Admin Sekolah</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo base_url('admin/logout'); ?>"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
<form role="search">
			<div class="form-group">
				<p> Welcome </p>
				<p> Admin Sekolah</p>
			</div>
		</form>
<br>
		<ul class="nav menu">
			<li><a href="/sekolahjogja/admin_petugas"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Beranda </a></li>
			
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-chevron-down"></use></svg></span> Database
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="<?php echo base_url()?>admin_petugas/sekolah">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Data Sekolah
						</a>
					</li>
					<li>
						<a class="" href="<?php echo base_url()?>admin_petugas/siswa">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Data Siswa
						</a>
					</li>
					<li>
						<a class="" href="/sekolahjogja/admin_petugas/guru">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Data Guru
						</a>
					</li>
					<li>
						<a class="" href="/sekolahjogja/admin_petugas/kepsek">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Data Kepala Sekolah
						</a>
					</li>
					<li>
						<a class="" href="/sekolahjogja/admin_petugas/tenkependik">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Data Tenkependik
						</a>
					</li>
				</ul>
			</li>
			<li><a href="/sekolahjogja/admin_petugas/user"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg></use></svg> User </a></li>
			
			
		</ul>
		</div><!--/.sidebar-->