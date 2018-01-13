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
				
			
<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Aset Bangunan </div>
					<div class="panel-body">
						<a href="<?php echo base_url('admin_petugas/tambah_bangunan'); ?>" class="btn btn-default btn-md pull-left">Tambah</a>
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						    	<th>No</th>
						        <th>Npsn</th>
						        <th>Nama Bangunan</th>
						        <th>Kondisi Bangunan</th>
						        <th>Kontruksi Bangunan</th>
						        <th>Luas lantai</th>
						        <th>Lokasi</th>
						        <th>Tahun Pembangunan</th>
						        <th>Luas Bangunan</th>
						        <th>Biaya Pembangunan</th>
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
									<td><?php echo $s->nama_bangunan?></td>
									<td><?php echo $s->kondisi_bangunan ?></td>
									<td><?php echo $s->kostruksi_bangunan ?></td>
									<td><?php echo $s->luas_lantai ?></td>
									<td><?php echo $s->lokasi ?></td>
									<td><?php echo $s->tahun_pembangunan ?></td>
									<td><?php echo $s->luas_bangunan ?></td>
									<td><?php echo $s->biaya_pembangunan ?></td>
									<td>
									<?php echo anchor('admin_petugas/edit_bangunan/'.$s->id_bangunan, 'Edit'); 
									echo "  ";
									echo anchor('admin_petugas/hapus_bangunan/'.$s->id_bangunan, 'Hapus');?>
									</td>
									
								</tr>
							<?php } ?>
						</table>
<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Aset Tanah</div>
					<div class="panel-body">
						<a href="<?php echo base_url('admin_petugas/tambah_tanah'); ?>" class="btn btn-default btn-md pull-left">Tambah</a>
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						    	<th>No</th>
						        <th>Npsn</th>
						        <th>Kepemilikan</th>
						        <th>Atas Nama</th>
						        <th>Status Tanah</th>
						        <th>Luas Tanah</th>
						        <th>No Sertifikat</th>
						        <th>Tahun Perolehan</th>
						        <th>Asal Usul</th>
						        <th>Letak</th>
						        <th>Peruntukan</th>
						        <th>Aksi</th>

						        
						    </tr>
						    </thead>

							<?php
							$no = 1;
							foreach ($aset2 as $s){
								?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $s->npsn ?></td>
									<td><?php echo $s->kepemilikan ?></td>
									<td><?php echo $s->atasnama_sertifikat ?></td>
									<td><?php echo $s->status_tanah ?></td>
									<td><?php echo $s->luas_tanah ?></td>
									<td><?php echo $s->no_sertifikat ?></td>
									<td><?php echo $s->thn_perolehan ?></td>
									<td><?php echo $s->asal_usul ?></td>
									<td><?php echo $s->letak ?></td>
									<td><?php echo $s->peruntukan ?></td>
									<td>
									<?php echo anchor('admin_petugas/edit_tanah/'.$s->id_tanah, 'Edit'); 
									echo "  ";
									echo anchor('admin_petugas/hapus_tanah/'.$s->id_tanah, 'Hapus');?>
									</td>
									
									
								</tr>
							<?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	

		