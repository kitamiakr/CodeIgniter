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
					<div class="panel-heading">Jumlah Siswa berdasarkan Jenjang</div>
					<div class="panel-body">
						<table class="table table-condensed" >
						    <thead>
						    <tr>
						        <th data-sortable="true">No</th>
						        <th data-sortable="true">Kabupaten</th>
						         <th data-sortable="true">SD</th>
						         <th data-sortable="true">MI</th>
						         <th data-sortable="true">SMP</th>
						         <th data-sortable="true">MTS</th>
						         <th data-sortable="true">SMA</th>
						         <th data-sortable="true">MA</th>
						         <th data-sortable="true">SMK</th>
						         <th data-sortable="true">SLB</th>
						    </tr>
						    
						    </thead>
						    <tbody>
						  	<?php
						  	foreach ($kab as $a) 
						  	{?>
						  <tr>
						  		<td><?php echo $a['id']; ?></td>
						  		<td><?php echo anchor('c_public/jmlsiswa_kab/'.$a['id'],$a['kab']);; ?></td>
						  		<?php
						  		$aaaa=0;
						  		foreach ($aa as $sd) {
						  			if($sd['id']==$a['id'])
						  			{
						  				?>
						  				<td><?php echo $sd['jml_siswa']; ?></td>		
						  				<?php
						  				$aaaa++;
						  			}
						  		}
						  		if($aaaa==0)
						  		{
						  			echo "<td>0</td>";
						  		}
						  		?>

						  		<?php
						  		$aaaa=0;
						  		foreach ($b as $sd) {
						  			if($sd['id']==$a['id'])
						  			{
						  				?>
						  				<td><?php echo $sd['jml_siswa']; ?></td>		
						  				<?php
						  			$aaaa++;
						  			}
						  		}
						  		if($aaaa==0)
						  		{
						  			echo "<td>0</td>";
						  		}
						  		?>

						  		<?php
						  		$aaaa=0;
						  		foreach ($c as $sd) {
						  			if($sd['id']==$a['id'])
						  			{
						  				?>
						  				<td><?php echo $sd['jml_siswa']; ?></td>		
						  				<?php
						  			$aaaa++;
						  			}
						  		}
						  		if($aaaa==0)
						  		{
						  			echo "<td>0</td>";
						  		}
						  		?>

						  		<?php
						  		$aaaa=0;
						  		foreach ($d as $sd) {
						  			if($sd['id']==$a['id'])
						  			{
						  				?>
						  				<td><?php echo $sd['jml_siswa']; ?></td>		
						  				<?php
						  			$aaaa++;
						  			}
						  		}
						  		if($aaaa==0)
						  		{
						  			echo "<td>0</td>";
						  		}
						  		?>

						  		<?php
						  		$aaaa=0;
						  		foreach ($e as $sd) {
						  			if($sd['id']==$a['id'])
						  			{
						  				?>
						  				<td><?php echo $sd['jml_siswa']; ?></td>		
						  				<?php
						  			$aaaa++;
						  			}
						  		}
						  		if($aaaa==0)
						  		{
						  			echo "<td>0</td>";
						  		}
						  		?>


						  		<?php
						  		$aaaa=0;
						  		foreach ($f as $sd) {
						  			if($sd['id']==$a['id'])
						  			{
						  				?>
						  				<td><?php echo $sd['jml_siswa']; ?></td>		
						  				<?php
						  			$aaaa++;
						  			}
						  		}
						  		if($aaaa==0)
						  		{
						  			echo "<td>0</td>";
						  		}
						  		?>

						  		<?php
						  		$aaaa=0;
						  		foreach ($g as $sd) {
						  			if($sd['id']==$a['id'])
						  			{
						  				?>
						  				<td><?php echo $sd['jml_siswa']; ?></td>		
						  				<?php
						  			$aaaa++;
						  			}
						  		}
						  		if($aaaa==0)
						  		{
						  			echo "<td>0</td>";
						  		}
						  		?>

						  		<?php
						  		$aaaa=0;
						  		foreach ($h as $sd) {
						  			if($sd['id']==$a['id'])
						  			{
						  				?>
						  				<td><?php echo $sd['jml_siswa']; ?></td>		
						  				<?php
						  			$aaaa++;
						  			}
						  		}
						  		if($aaaa==0)
						  		{
						  			echo "<td>0</td>";
						  		}
						  		?>

						  </tr>
						  	<?php	
						  	}
						  	?>
                            </tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
	</div>