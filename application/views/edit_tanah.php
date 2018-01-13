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
					<div class="panel-heading"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg> Update Data Tanah</div>
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
							<fieldset>
								<!-- Kepemilikan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Kepemilikan</label>
									<div class="col-md-9">
									<label name="kepemilikan" type="text" class="form-control" value="<?php echo $a->kepemilikan; ?>"><?php echo $a->id_tanah;?></label>
									</div>
								</div>

								<!-- Atas Nama Sertifikat-->
								<div class="form-group">
									<label class="col-md-3 control-label">Nama Sertifikat</label>
									<div class="col-md-9">
									<input name="atasnama_sertifikat" type="text" class="form-control" value="<?php echo $a->atasnama_sertifikat; ?>">
									</div>
								</div>

								<!-- Status Tanah-->
								<div class="form-group">
									<label class="col-md-3 control-label">Status Tanah</label>
									<div class="col-md-9">
									<input name="status_tanah" type="text" class="form-control" value="<?php echo $a->status_tanah; ?>">
									</div>
								</div>

								<!-- Luas Tanah-->
								<div class="form-group">
									<label class="col-md-3 control-label">Luas Tanah</label>
									<div class="col-md-9">
									<input name="luas_tanah" type="text" class="form-control" value="<?php echo $a->luas_tanah; ?>">
									</div>
								</div>

								<!-- No Sertifikat-->
								<div class="form-group">
									<label class="col-md-3 control-label">No Sertifikat</label>
									<div class="col-md-9">
									<input name="no_sertifikat" type="text" class="form-control" value="<?php echo $a->no_sertifikat; ?>">
									</div>
								</div>

								<!-- Tahun Perolehan-->
								<div class="form-group">
									<label class="col-md-3 control-label">T Perolehan</label>
									<div class="col-md-9">
									<input name="thn_perolehan" type="text" class="form-control" value="<?php echo $a->thn_perolehan; ?>">
									</div>
								</div>

								<!-- Asal Usul-->
								<div class="form-group">
									<label class="col-md-3 control-label">Asal Usul</label>
									<div class="col-md-9">
									<input name="asal_usul" type="text" class="form-control" value="<?php echo $a->asal_usul; ?>">
									</div>
								</div>

								<!-- Letak-->
								<div class="form-group">
									<label class="col-md-3 control-label">Letak</label>
									<div class="col-md-9">
									<input name="letak" type="text" class="form-control" value="<?php echo $a->letak; ?>">
									</div>
								</div>

								<!-- Peruntukan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Peruntukan</label>
									<div class="col-md-9">
									<input name="peruntukan" type="text" class="form-control" value="<?php echo $a->peruntukan; ?>">
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
	  