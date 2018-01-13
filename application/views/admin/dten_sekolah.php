<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg></a></li>
				<li>Database</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Tenpendik</h1>
				
			
<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Table Tenkependik</div>
					<div class="panel-body">
						<a href="<?php echo base_url('admin_petugas/tambah_tenkependik'); ?>" class="btn btn-default btn-md pull-left">Tambah</a>
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						    	<th>NPSN</th>
								<th>Tahun ajara</th>
								<th>NBM</th>
								<th>Jabatan</th>
								<th>Nama</th>
								<th>NIP</th>
								<th>Tempat lahir</th>
								<th>Tanggal lahir</th>
								<th>telepon</th>
								<th>Email</th>
								<th>Pangkat</th>
								<th>Tanggal pengangkatan</th>
								<th>Jenis kelamin</th>
								<th>Status pegawai</th>
								<th>Organisasi</th>
								<th>Alamat</th>
								<th>Rt/Rw</th>
								<th>Kelurahan</th>
								<th>Kecamatan</th>
								<th>Kabupaten</th>
								<th>Provinsi</th>
								<th>Pendidikan terakhir</th>
								<th>Aksi</th>
							    </tr>
							    </thead>

							<?php
							$no = 1;
							foreach ($aset as $a){
								?>
								<tr>
									<td><?php echo $a->npsn;?></th>
									<td><?php echo $a->tahun_ajaran;?></th>
									<td><?php echo $a->nbm;?></th>
									<td><?php echo $a->jabatan;?></th>
									<td><?php echo $a->nama;?></th>
									<td><?php echo $a->nip;?></th>
									<td><?php echo $a->tempat_lhr;?></th>
									<td><?php echo $a->tgl_lhr;?></th>
									<td><?php echo $a->telepon;?></th>
									<td><?php echo $a->email;?></th>
									<td><?php echo $a->pangkat;?></th>
									<td><?php echo $a->tgl_pengangkatan;?></th>
									<td><?php echo $a->jk;?></th>
									<td><?php echo $a->status_pegawai;?></th>
									<td><?php echo $a->organisasi;?></th>
									<td><?php echo $a->alamat;?></th>
									<td><?php echo $a->rt_rw;?></th>
									<td><?php echo $a->kel;?></th>
									<td><?php echo $a->kec;?></th>
									<td><?php echo $a->kab;?></th>
									<td><?php echo $a->prov;?></th>
									<td><?php echo $a->pnd_thr;?></th>
									<td>
									<?php echo 'Edit'; 
									echo "  ";
									echo anchor('admin_petugas/Hapus_tenkependik/'.$a->id_tenkependik, 'Hapus');?>
									</td>	
								</tr>
							<?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	

		
	  