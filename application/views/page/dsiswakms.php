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
				
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>KMS</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="50" ><span class="percent"><?php echo $jmlkms[0]['jmlkms']?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Non KMS</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent="91" ><span class="percent"><?php echo $jmlnonkms[0]['jmlnkms']?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Perempuan</h4>
						<div class="easypiechart" id="easypiechart-teal" data-percent="56" ><span class="percent"><?php echo $jmlprsw[0]['jmlpr']?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Laki-laki</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="80" ><span class="percent"><?php echo $jmllksw[0]['jmllk']?></span>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->


<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Jumlah Siswa KMS</div>
					<div class="panel-body">
						<table class="table table-condensed" >
						    <thead>
						    <tr>
						    	<th>No</th>
						        <th>Kabupaten</th>
						        <th>Jumlah Siswa KMS</th>
						        <th>Jumlah Siswa Non KMS</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php 
						    $x=0;
						    foreach ($kms as $a) {
						    	?>
						    <tr>
						    	<td><?php echo $a['id'];?></td>
                				<td><?php echo anchor('c_public/siswa_kms_kab/'.$a['id'],$a['kab']);?></td>
                				<td><?php echo $a['kms'];?></td>
                				<td><?php echo $a['non_kms'];?></td>
						    </tr>
						    <?php
			                $x++;
			                    }
			                ?>	
                            </tbody>
						</table>
					</div>
				</div>
			</div>
											
	</div>	<!--/.main-->
	  