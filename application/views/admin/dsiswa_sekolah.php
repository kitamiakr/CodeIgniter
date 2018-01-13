<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg></a></li>
				<li>Database</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Siswa</h1>
				
			
<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Table Siswa</div>
					
					<div class="panel-body">
					<a href="<?php echo base_url('admin_petugas/tambah_siswa'); ?>" class="btn btn-default btn-md pull-left">Tambah</a>
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						    	<th>No</th>
						        <th>Npsn</th>
						        <th>Tahun Ajaran</th>
						        <th>Kelas</th>
						        <th>Jurusan</th>
						        <th>Rombel</th>
						        <th>Jumlah Putra</th>
						        <th>Jumlah Putri</th>
						        <th>KMS</th>
						        <th>Non KMS</th>
						        <th>Jumlah Siswa</th>
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
									<td><?php echo $s->tahun_ajaran ?></td>
									<td><?php echo $s->kelas ?></td>
									<td><?php echo $s->jurusan ?></td>
									<td><?php echo $s->rombel ?></td>
									<td><?php echo $s->jumlah_putra ?></td>
									<td><?php echo $s->jumlah_putri ?></td>
									<td><?php echo $s->kms ?></td>
									<td><?php echo $s->non_kms ?></td>
									<td><?php echo $s->jumlah_siswa ?></td>
									<td>
									<?php echo anchor('admin_petugas/edit_siswa/'.$s->id_siswa, 'Edit'); 
									echo "  ";
									echo anchor('admin_petugas/hapus_siswa/'.$s->id_siswa, 'hapus');?>
									</td>
									
									
								</tr>
							<?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	

		