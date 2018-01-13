<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg></a></li>
				<li>Database</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Sekolah</h1>
				
			</div>
		</div><!--/.row-->			
		<div class="row">
			<div class="col-lg-12">
			</div>
		</div><!--/.row-->
		<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lumino - Panels</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>				
		
		
	<div class="row">
	<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body tabs">
					
						<ul class="nav nav-pills">
							<li class="active"><a href="#pilltab1" data-toggle="tab">Detail Sekolah</a></li>
							<li><a href="#pilltab2" data-toggle="tab">Data Rincian</a></li>
							<li><a href="#pilltab3" data-toggle="tab">Kontak</a></li>
						</ul>
		
						<div class="tab-content">
							<div class="tab-pane fade in active" id="pilltab1">
								<div class="panel-heading"><h4>Detail Sekolah</h4></div>
								<p><form class="form-horizontal">
						<div class="form-group">
	                        <label class="control-label col-md-4">NPSN</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value="<?php echo $profil1[0]['npsn']; ?>" class="form-control" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-4">Bentuk Pendidikan</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value= "<?php echo $profil1[0]['jenjang']; ?>" class="form-control" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-4">Status Kepemilikan</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value= "<?php echo $profil1[0]['kepemilikan']; ?>" class="form-control" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-4">SK Pendirian Sekolah</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value= "<?php echo $profil1[0]['sk']; ?>" class="form-control" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-4"> Tanggal SK Pendirian</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value= "<?php echo $profil1[0]['tgl']; ?>" class="form-control" required>
	                        </div>
	                    </div>
					</form>
					<form class="form-horizontal">
						
	                    <div class="form-group">
	                        <label class="control-label col-md-4">Kepsek</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value= "<?php echo $umum[0]['nm_kepsek']; ?>" class="form-control" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-4">Wakasek</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value= "<?php echo $umum[0]['nm_wakasek']; ?>" class="form-control" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-4">Akreditasi</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value= <?php echo $umum[0]['akred']; ?> class="form-control" required>
	                        </div>
	                    </div>
	                </form> </p>
							</div>
							<div class="tab-pane fade" id="pilltab2">
								<div class="panel-heading" ><h4>Data Rincian</h4></div>
								<p><form class="form-horizontal">
						<div class="form-group">
	                        <label class="control-label col-md-4">Luas Tanah</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value= <?php echo $profil2[0]['luas']; ?> class="form-control" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-4">Bentuk Pendidikan</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value= <?php echo $profil1[0]['jenjang']; ?> class="form-control" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-4">Daya Listrik</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value= <?php echo $profil2[0]['listrik']; ?> class="form-control" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-4">Akses Internet</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value= <?php echo $profil2[0]['internet']; ?> class="form-control" required>
	                        </div>
	                    </div>
					</form> </p>
							</div>
							<div class="tab-pane fade" id="pilltab3">
								<div class="panel-heading" ><h4>Kontak</h4></div>
								<p><form class="form-horizontal">
						<div class="form-group">
	                        <label class="control-label col-md-4">Alamat</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value= <?php echo $kontak[0]['alamat']; ?> class="form-control" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-4">Kelurahan</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value= <?php echo $kontak[0]['kel']; ?> class="form-control" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-4">Kecamatan</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value= <?php echo $kontak[0]['kec']; ?> class="form-control" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-4">Kabupaten</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value= <?php echo $kontak[0]['kab']; ?> class="form-control" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-4"> Telp</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value= <?php echo $kontak1[0]['tlp']; ?>  class="form-control" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-4"> Email</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value= <?php echo $kontak1[0]['eml']; ?>  class="form-control" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-4"> Website</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value= <?php echo $kontak1[0]['web']; ?>  class="form-control" required>
	                        </div>
	                    </div>
					</form> </p>
							</div>
						</div>
					</div>
				</div>
			<!--/.row-->
		</div>
	</div>