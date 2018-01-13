			<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg></a></li>
				<li class="active">User</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">User</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Table User</div>
					<div class="panel-body">
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						    	<th>No</th>
						        <th>ID</th>
						        <th>Username</th>
						        <th>Email</th>
						        <th>Password</th>
						        <th>Nama</th>
						        <th>Level</th>
						        <th>Foto</th>
						        <th>NPSN</th>
						        <th>Aksi</th>
						    </tr>
						    </thead>

							<?php
							$no = 1;
							foreach ($user as $a){
								?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $a->id ?></td>
									<td><?php echo $a->username?></td>
									<td><?php echo $a->email ?></td>
									<td><?php echo $a->password ?></td>
									<td><?php echo $a->Nama ?></td>
									<td><?php echo $a->level ?></td>
									<td><?php echo $a->Foto ?></td>
									<td><?php echo $a->npsn ?></td>
									<td>
									<?php echo anchor('admin/edit/'.$a->id, 'Edit'); ?>
									<?php echo anchor('admin/hapus/'.$a->id, 'Hapus'); ?>
									</td>
								</tr>
							<?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
			
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Tambah Data</div>
					<div class="panel-body">
						<form class="form-horizontal" action="<?php echo base_url(). 'admin/tambah_proses'; ?>" method="post">
							<fieldset>
								<!-- Id input-->
								<div class="form-group">
									<label class="col-md-3 control-label">Id</label>
									<div class="col-md-9">
									<input name="id" type="text" class="form-control">
									</div>
								</div>

								<!-- username input-->
								<div class="form-group">
									<label class="col-md-3 control-label">Username</label>
									<div class="col-md-9">
									<input name="username" type="text" class="form-control">
									</div>
								</div>

								<!-- email input-->
								<div class="form-group">
									<label class="col-md-3 control-label">Email</label>
									<div class="col-md-9">
									<input name="email" type="text" class="form-control">
									</div>
								</div>

								<!-- password input-->
								<div class="form-group">
									<label class="col-md-3 control-label">Password</label>
									<div class="col-md-9">
									<input name="password" type="text" class="form-control">
									</div>
								</div>

								<!-- nama input-->
								<div class="form-group">
									<label class="col-md-3 control-label">Nama</label>
									<div class="col-md-9">
									<input name="nama" type="text" class="form-control">
									</div>
								</div>

								<!-- level input-->
								<div class="form-group">
									<label class="col-md-3 control-label">Level</label>
									<div class="col-md-9">
									<input name="level" type="text" class="form-control">
									</div>
								</div>

								<!-- Foto input-->
								<div class="form-group">
									<label class="col-md-3 control-label">Foto</label>
									<div class="col-md-9">
									<input name="foto" type="text" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">NPSN</label>
									<div class="col-md-9">
									<input name="npsn" type="text" class="form-control">
									</div>
								</div>
							
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button type="submit" class="btn btn-default btn-md pull-right" value="Tambah">Submit</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
				</div>
	</div><!--/.main-->