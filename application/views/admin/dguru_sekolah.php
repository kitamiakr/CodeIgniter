<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg></a></li>
				<li>Database</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Guru</h1>
				
			
<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Table Data Guru</div>
					<div class="panel-body">
						<a href="<?php echo base_url('admin_petugas/tambah_guru'); ?>" class="btn btn-default btn-md pull-left">Tambah</a>
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						    	<th>No</th>
						        <th>Npsn</th>
						        <th>Tahun Ajaran</th>
						        <th>NBM</th>
						        <th>Nama Guru</th>
						        <th>Bidang</th>
						        <th>Nuptk</th>
						        <th>Nip</th>
						        <th>Tempat Lahir</th>
								<th>Tanggal Lahir</th>
						        <th>Telepon</th>
						        <th>Email</th>
						        <th>Pangkat GolRuang</th>
						        <th>Tanggal Pengangkatan</th>
						        <th>Sertifikasi Guru</th>
						        <th>Tempat Sertifikasi</th>
						        <th>Jenis Kelamin</th>
						        <th>Status Pegawai</th>
						        <th>Organisasi</th>
						        <th>Alamat</th>
						        <th>Rt/Rw</th>
						        <th>Kelurahan</th>
						        <th>Kecamatan</th>
						        <th>Kabupaten</th>
						        <th>Pendidikan</th>
						        <th>Jurusan</th>
						        <th>Univ</th>
						        <th>Tahun Lulus</th>
						        <th>Aksi</th>
				

						        
						    </tr>
						    </thead>

							<?php
							$no = 1;
							foreach ($aset as $s){
								?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $s->npsn ?></td>
									<td><?php echo $s->tahun_ajaran ?></td>
									<td><?php echo $s->nbm ?></td>
									<td><?php echo $s->nama_guru ?></td>
									<td><?php echo $s->bidang ?></td>
									<td><?php echo $s->nuptk ?></td>
									<td><?php echo $s->nip ?></td>
									<td><?php echo $s->tempat_lahir ?></td>
									<td><?php echo $s->tgl_lahir ?></td>
									<td><?php echo $s->telepon ?></td>
									<td><?php echo $s->email ?></td>
									<td><?php echo $s->pangkat_golruang ?></td>
									<td><?php echo $s->tgl_pengangkatan ?></td>
									<td><?php echo $s->sertifikasi_guru ?></td>
									<td><?php echo $s->tmt_sertifikasi ?></td>
									<td><?php echo $s->jk ?></td>
									<td><?php echo $s->sts_pegawai ?></td>
									<td><?php echo $s->organisasi ?></td>
									<td><?php echo $s->alamat ?></td>
									<td><?php echo $s->rt_rw ?></td>
									<td><?php echo $s->kelurahan ?></td>
									<td><?php echo $s->kec ?></td>
									<td><?php echo $s->kab ?></td>
									<td><?php echo $s->pendidikan ?></td>
									<td><?php echo $s->jurusan ?></td>
									<td><?php echo $s->univ ?></td>
									<td><?php echo $s->thn_lulus ?></td>
									<td>
									<?php echo anchor('admin_petugas/edit_guru/'.$s->id_guru, 'Edit');
									echo "  ";
									echo anchor('admin_petugas/hapus_guru/'.$s->id_guru, 'Hapus'); ?>
									</td>
									
									
								</tr>
							<?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	

		