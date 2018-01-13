<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg></a></li>
				<li class="active">Admin</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
						<div class="panel-body">
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						
<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg> Update Data Siswa</div>
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
							<fieldset>

								<!-- Tahun Ajaran-->
								<div class="form-group">
									<label class="col-md-3 control-label">Tahun_ajaran</label>
									<div class="col-md-9">
									<label name="tahun_ajaran" type="text"  class="form-control"  value="<?php echo $a->tahun_ajaran; ?>"><?php echo $a->id_siswa;?></label>
									</div>
								</div>

								<!-- Kelas-->
								<div class="form-group">
									<label class="col-md-3 control-label">Kelas</label>
									<div class="col-md-9">
									<input name="kelas" type="text" class="form-control" value="<?php echo $a->kelas; ?>">
									</div>
								</div>

								<!-- Jurusan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Jurusan</label>
									<div class="col-md-9">
									<input name="jurusan" type="text" class="form-control" value="<?php echo $a->jurusan; ?>">
									</div>
								</div>

								<!-- Rombel-->
								<div class="form-group">
									<label class="col-md-3 control-label">Rombel</label>
									<div class="col-md-9">
									<input name="rombel" type="text" class="form-control" value="<?php echo $a->rombel; ?>">
									</div>
								</div>

								<!-- Jumlah Putra-->
								<div class="form-group">
									<label class="col-md-3 control-label">Jumlah Putra</label>
									<div class="col-md-9">
									<input name="jumlah_putra" type="text" class="form-control" value="<?php echo $a->jumlah_putra; ?>">
									</div>
								</div>

								<!-- Jumalah Putri-->
								<div class="form-group">
									<label class="col-md-3 control-label">Jumlah Putri</label>
									<div class="col-md-9">
									<input name="jumlah_putri" type="text" class="form-control" value="<?php echo $a->jumlah_putri; ?>">
									</div>
								</div>

								<!-- KMS-->
								<div class="form-group">
									<label class="col-md-3 control-label">KMS</label>
									<div class="col-md-9">
									<input name="kms" type="text" class="form-control" value="<?php echo $a->kms; ?>">
									</div>
								</div>

								<!-- Non KMS-->
								<div class="form-group">
									<label class="col-md-3 control-label">Non KMS</label>
									<div class="col-md-9">
									<input name="non_kms" type="text" class="form-control" value="<?php echo $a->non_kms; ?>">
									</div>
								</div>

								<!-- Jumlah Siswa-->
								<div class="form-group">
									<label class="col-md-3 control-label">Jumlah Siswa</label>
									<div class="col-md-9">
									<input name="jumlah_siswa" type="text" class="form-control" value="<?php echo $a->jumlah_siswa; ?>">
									</div>
								</div>
							
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button type="submit" class="btn btn-default btn-md pull-right" name="submit" value="Tambah">Submit</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
				</div>

	</div>	<!--/.main-->
	  