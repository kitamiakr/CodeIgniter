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
					<div class="panel-heading"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg> Update Data Bangunan</div>
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
							<fieldset>

								<!-- nama bangunan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Nama Bangunan</label>
									<div class="col-md-9">
									<label name="nama_bangunan" type="text"  class="form-control"  value="<?php echo $a->nama_bangunan; ?>"><?php echo $a->id_bangunan;?></label>
									</div>
								</div>

								<!-- kondisi bangunan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Kondisi Bangunan</label>
									<div class="col-md-9">
									<input name="kondisi_bangunan" type="text" class="form-control" value="<?php echo $a->kondisi_bangunan; ?>">
									</div>
								</div>

								<!-- luas lantai-->
								<div class="form-group">
									<label class="col-md-3 control-label">Luas Lantai</label>
									<div class="col-md-9">
									<input name="luas_lantai" type="text" class="form-control" value="<?php echo $a->luas_lantai; ?>">
									</div>
								</div>

								<!-- lokasi-->
								<div class="form-group">
									<label class="col-md-3 control-label">Lokasi</label>
									<div class="col-md-9">
									<input name="lokasi" type="text" class="form-control" value="<?php echo $a->lokasi; ?>">
									</div>
								</div>

								<!-- tahun pembangunan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Tahun Pembangunan</label>
									<div class="col-md-9">
									<input name="tahun_pembangunan" type="text" class="form-control" value="<?php echo $a->tahun_pembangunan; ?>">
									</div>
								</div>

								<!-- luas bangunan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Luas Bangunan</label>
									<div class="col-md-9">
									<input name="luas_bangunan" type="text" class="form-control" value="<?php echo $a->luas_bangunan; ?>">
									</div>
								</div>

								<!-- biaya pembangunan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Biaya Pembangunan</label>
									<div class="col-md-9">
									<input name="biaya_pembangunan" type="text" class="form-control" value="<?php echo $a->biaya_pembangunan; ?>">
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
	  