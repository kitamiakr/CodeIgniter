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
							<?php //foreach ($aset2 as $s){?>	
<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Tambah Data</div>
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
							<fieldset>


								<div class="form-group">
									<label class="col-md-3 control-label">Tahun ajaran</label>
									<div class="col-md-9">
									<input name="tahun_ajaran" type="text" class="form-control">
									</div>
								</div>

							
								<div class="form-group">
									<label class="col-md-3 control-label">NBM</label>
									<div class="col-md-9">
									<input name="nbm" type="text" class="form-control">
									</div>
								</div>

							
								<div class="form-group">
									<label class="col-md-3 control-label">Jabatan</label>
									<div class="col-md-9">
									<input name="jabatan" type="text" class="form-control">
									</div>
								</div>

					
								<div class="form-group">
									<label class="col-md-3 control-label">Nama</label>
									<div class="col-md-9">
									<input name="nama" type="text" class="form-control">
									</div>
								</div>

							
								<div class="form-group">
									<label class="col-md-3 control-label">NIP</label>
									<div class="col-md-9">
									<input name="nip" type="text" class="form-control">
									</div>
								</div>

							
								<div class="form-group">
									<label class="col-md-3 control-label">Tempat lahir</label>
									<div class="col-md-9">
									<input name="tempat_lahir" type="text" class="form-control">
									</div>
								</div>

						
								<div class="form-group">
									<label class="col-md-3 control-label">Tanggal lahir</label>
									<div class="col-md-9">
									<input name="tgl_lahir" type="text" class="form-control">
									</div>
								</div>

							
								<div class="form-group">
									<label class="col-md-3 control-label">Telephon</label>
									<div class="col-md-9">
									<input name="telepon" type="text" class="form-control">
									</div>
								</div>

								
								<div class="form-group">
									<label class="col-md-3 control-label">Email</label>
									<div class="col-md-9">
									<input name="email" type="text" class="form-control">
									</div>
								</div>

					
								<div class="form-group">
									<label class="col-md-3 control-label">Pangkat</label>
									<div class="col-md-9">
									<input name="pangkat" type="text" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Pengangkatan</label>
									<div class="col-md-9">
									<input name="tgl_pengangkatan" type="text" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Jenis kelamin</label>
									<div class="col-md-9">
									<input name="jk" type="text" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">S Pegawai</label>
									<div class="col-md-9">
									<input name="status_pegawai" type="text" class="form-control">
									</div>
								</div>

								
								<div class="form-group">
									<label class="col-md-3 control-label">Organisasi</label>
									<div class="col-md-9">
									<input name="organisasi" type="text" class="form-control">
									</div>
								</div>

							
								<div class="form-group">
									<label class="col-md-3 control-label">Alamat</label>
									<div class="col-md-9">
									<input name="alamat" type="text" class="form-control">
									</div>
								</div>

							
								<div class="form-group">
									<label class="col-md-3 control-label">Rt/Rw</label>
									<div class="col-md-9">
									<input name="rt_rw" type="text" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Kelurahan</label>
									<div class="col-md-9">
									<input name="kel" type="text" class="form-control">
									</div>
								</div>
							

								<div class="form-group">
									<label class="col-md-3 control-label">Kecamatan</label>
									<div class="col-md-9">
									<input name="kec" type="text" class="form-control">
									</div>
								</div>

								
								<div class="form-group">
									<label class="col-md-3 control-label">Kabupaten</label>
									<div class="col-md-9">
									<input name="kab" type="text" class="form-control">
									</div>
								</div>

					
								<div class="form-group">
									<label class="col-md-3 control-label">Provinsi</label>
									<div class="col-md-9">
									<input name="prov" type="text" class="form-control">
									</div>
								</div>

					
								<div class="form-group">
									<label class="col-md-3 control-label">Pendidikan terakhir</label>
									<div class="col-md-9">
									<input name="pnd_thr" type="text" class="form-control">
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