			<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg></a></li>
				<li class="active">Admin</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">User Sekolah</h1>
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
									<td>
									<?php echo anchor('admin_petugas/edit/'.$a->id, 'Edit'); ?>
									
									</td>
								</tr>
							<?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		

			