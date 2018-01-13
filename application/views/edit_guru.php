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
					<div class="panel-heading"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg> Update Data Guru</div>
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
							<fieldset>

								<!-- Tahun Ajaran-->
								<div class="form-group">
									<label class="col-md-3 control-label">Tahun Ajaran</label>
									<div class="col-md-9">
									<label name="tahun_ajaran" type="text" class="form-control" value="<?php echo $a->tahun_ajaran; ?>"><?php echo $a->id_guru;?></label>
									</div>
								</div>

								<!-- NBM-->
								<div class="form-group">
									<label class="col-md-3 control-label">NBM</label>
									<div class="col-md-9">
									<input name="nbm" type="text" class="form-control" value="<?php echo $a->nbm; ?>">
									</div>
								</div>

								<!-- Nama Guru-->
								<div class="form-group">
									<label class="col-md-3 control-label">Nama Guru</label>
									<div class="col-md-9">
									<input name="nama_guru" type="text" class="form-control" value="<?php echo $a->nama_guru; ?>">
									</div>
								</div>

								<!--Bidang-->
								<div class="form-group">
									<label class="col-md-3 control-label">Bidang</label>
									<div class="col-md-9">
									<input name="bidang" type="text" class="form-control" value="<?php echo $a->bidang; ?>">
									</div>
								</div>

								<!--Nuptk-->
								<div class="form-group">
									<label class="col-md-3 control-label">Nuptk</label>
									<div class="col-md-9">
									<input name="nuptk" type="text" class="form-control" value="<?php echo $a->nuptk; ?>">
									</div>
								</div>

								<!--Nip-->
								<div class="form-group">
									<label class="col-md-3 control-label">Nip</label>
									<div class="col-md-9">
									<input name="nip" type="text" class="form-control" value="<?php echo $a->nip; ?>">
									</div>
								</div>

								<!--Tempat Lahir-->
								<div class="form-group">
									<label class="col-md-3 control-label">Tempat lahir</label>
									<div class="col-md-9">
									<input name="tempat_lahir" type="text" class="form-control" value="<?php echo $a->tempat_lahir; ?>">
									</div>
								</div>

								<!-- Tanggal Lahir-->
								<div class="form-group">
									<label class="col-md-3 control-label">Tanggal lahir</label>
									<div class="col-md-9">
									<input name="tgl_lahir" type="text" class="form-control" value="<?php echo $a->tgl_lahir; ?>">
									</div>
								</div>

								<!-- Telepon-->
								<div class="form-group">
									<label class="col-md-3 control-label">Telepon</label>
									<div class="col-md-9">
									<input name="telepon" type="text" class="form-control" value="<?php echo $a->telepon; ?>">
									</div>
								</div>
							
								<!-- Email-->
								<div class="form-group">
									<label class="col-md-3 control-label">Email</label>
									<div class="col-md-9">
									<input name="email" type="text" class="form-control" value="<?php echo $a->email; ?>">
									</div>
								</div>
							
								
								<!-- Pangkat Golongon Ruang-->
								<div class="form-group">
									<label class="col-md-3 control-label">Pangkat Gol</label>
									<div class="col-md-9">
									<input name="pangkat_golruang" type="text" class="form-control" value="<?php echo $a->pangkat_golruang; ?>">
									</div>
								</div>
							
								
								<!--Tanggal Pengangkatan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Pengangkatan</label>
									<div class="col-md-9">
									<input name="tgl_pengangkatan" type="text" class="form-control" value="<?php echo $a->tgl_pengangkatan; ?>">
									</div>
								</div>
							
								
								<!-- Sertifikasi Guru-->
								<div class="form-group">
									<label class="col-md-3 control-label">Sertifikasi</label>
									<div class="col-md-9">
									<input name="sertifikasi_guru" type="text" class="form-control" value="<?php echo $a->sertifikasi_guru; ?>">
									</div>
								</div>
							
								
								<!-- Tamat Sertifikasi-->
								<div class="form-group">
									<label class="col-md-3 control-label">Tmt Sertifikasi</label>
									<div class="col-md-9">
									<input name="tmt_sertifikasi" type="text" class="form-control" value="<?php echo $a->tmt_sertifikasi; ?>">
									</div>
								</div>
							
								
								<!-- Jenis Kelamin-->
								<div class="form-group">
									<label class="col-md-3 control-label">Jenis kelamin</label>
									<div class="col-md-9">
									<input name="jk" type="text" class="form-control" value="<?php echo $a->jk; ?>">
									</div>
								</div>
							
								<!-- Status Pegawai-->
								<div class="form-group">
									<label class="col-md-3 control-label">Status Pegawai</label>
									<div class="col-md-9">
									<input name="sts_pegawai" type="text" class="form-control" value="<?php echo $a->sts_pegawai; ?>">
									</div>
								</div>
							
								<!-- Organisasi-->
								<div class="form-group">
									<label class="col-md-3 control-label">Organisasi</label>
									<div class="col-md-9">
									<input name="organisasi" type="text" class="form-control" value="<?php echo $a->organisasi; ?>">
									</div>
								</div>
							
								<!--Alamat-->
								<div class="form-group">
									<label class="col-md-3 control-label">Alamat</label>
									<div class="col-md-9">
									<input name="alamat" type="text" class="form-control" value="<?php echo $a->alamat; ?>">
									</div>
								</div>
							
								<!--Rt/rw-->
								<div class="form-group">
									<label class="col-md-3 control-label">Rt/Rw</label>
									<div class="col-md-9">
									<input name="rt_rw" type="text" class="form-control" value="<?php echo $a->rt_rw; ?>">
									</div>
								</div>
							
								<!--Kelurahan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Kelurahan</label>
									<div class="col-md-9">
									<input name="kelurahan" type="text" class="form-control" value="<?php echo $a->kelurahan; ?>">
									</div>
								</div>
							
								
								<!-- Kec-->
								<div class="form-group">
									<label class="col-md-3 control-label">Kecamatan</label>
									<div class="col-md-9">
									<input name="kec" type="text" class="form-control" value="<?php echo $a->kec; ?>">
									</div>
								</div>
							
								<!-- Kab-->
								<div class="form-group">
									<label class="col-md-3 control-label">Kabupaten</label>
									<div class="col-md-9">
									<input name="kab" type="text" class="form-control" value="<?php echo $a->kab; ?>">
									</div>
								</div>
							
								<!-- Pendidikan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Pendidikan</label>
									<div class="col-md-9">
									<input name="pendidikan" type="text" class="form-control" value="<?php echo $a->pendidikan; ?>">
									</div>
								</div>
							
								<!-- Jurusan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Jurusan</label>
									<div class="col-md-9">
									<input name="jurusan" type="text" class="form-control" value="<?php echo $a->jurusan; ?>">
									</div>
								</div>
							
								<!-- Universitas-->
								<div class="form-group">
									<label class="col-md-3 control-label">Universitas</label>
									<div class="col-md-9">
									<input name="univ" type="text" class="form-control" value="<?php echo $a->univ; ?>">
									</div>
								</div>
							
								<!-- Tahun Lulus-->
								<div class="form-group">
									<label class="col-md-3 control-label">Tahun lulus</label>
									<div class="col-md-9">
									<input name="thn_lulus" type="text" class="form-control" value="<?php echo $a->thn_lulus; ?>">
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
	  