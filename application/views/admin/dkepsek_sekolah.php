<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg></a></li>
				<li>Database</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Kepala Sekolah</h1>
				
			
<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Table Kepala Sekolah</div>
					<div class="panel-body">
						<a href="<?php echo base_url('admin_petugas/tambah_kepsek'); ?>" class="btn btn-default btn-md pull-left">Tambah</a>
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						    	<th>NPSN</th>
								<th>Tahun Ajaran</th>
								<th>Kepala Sekolah</th>
								<th>Nbm</th>
								<th>Tanggal lahir</th>
								<th>SK Pengangkatan</th>
								<th>Tanggal SK</th>
								<th>Asal SK</th>
								<th>Tempat Jabatan</th>
								<th>Massa Tugas</th>
								<th>Tanggal Berahir</th>
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
									<td><?php echo $a->kepala_sekolah;?></th>
									<td><?php echo $a->nbm;?></th>
									<td><?php echo $a->tgl_lahir;?></th>
									<td><?php echo $a->sk_pengangkatan;?></th>
									<td><?php echo $a->tgl_sk;?></th>
									<td><?php echo $a->asal_sk;?></th>
									<td><?php echo $a->tmt_jabatan;?></th>
									<td><?php echo $a->masa_tugaske;?></th>
									<td><?php echo $a->tgl_berahir;?></th>
									<td>
									<?php echo anchor('admin_petugas/edit_kepsek/'.$a->id_kepsek, 'Edit');
									echo "  ";
									echo anchor('admin_petugas/hapus_kepsek/'.$a->id_kepsek, 'Hapus'); ?>
									</td>

								</tr>
							<?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	

		
	  