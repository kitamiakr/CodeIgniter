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
				
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>PNS</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="30" ><span class="percent"><?php echo $jmlgpns[0]['stspns']?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Non PNS</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent="65" ><span class="percent"><?php echo $jmlgnpns[0]['stsnpns']?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Sertifikasi</h4>
						<div class="easypiechart" id="easypiechart-teal" data-percent="77" ><span class="percent"><?php echo $jmlstf[0]['stfguru']?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>S1</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="90" ><span class="percent"><?php echo $jmls1[0]['jmlgs1']?></span>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Jumlah Guru berdasarkan Jenis Kelamin</div>
					<div class="panel-body">
					
							<br>
						<table class="table table-bordered">
						    <thead>
						    <tr align="center">
						    <center>
						    	<th rowspan="2"> No</th>
						        <th rowspan="2">Kabupaten</th>
						        <th colspan="2"> SD</th>
						        <th colspan="2">MI</th>
						        <th colspan="2">SMP</th>
						        <th colspan="2">MTS</th>
						        <th colspan="2">SMA</th>
						        <th colspan="2">MA</th>
						        <th colspan="2">SMK</th>
						    </tr>
						    <th>P</th>
						    <th>L</th>
						    <th>P</th>
						    <th>L</th>
						    <th>P</th>
						    <th>L</th>
						    <th>P</th>
						    <th>L</th>
						    <th>P</th>
						    <th>L</th>
						    <th>P</th>
						    <th>L</th>
						    <th>P</th>
						    <th>L</th>
						    </center>
						    </thead>
						    <tbody>
						    <?php
			            	$x=0;
			                foreach ($kab as $a)
			                    {
			                    ?>
				            <tr>
				                <td><?php echo $a['id'];?></td>
				                <td><?php echo anchor('admin/guru_jk_kec/'.$a['id'],$a['kabupaten']);?></td>
				                <td>
				                <?php
				                $coba=0;
				                foreach ($sd as $s) {
				                	if($a['id']==$s['id'])
				                	{
				                        echo $s['jumlah'];
				                	$coba++;
				                	}
				                }
				                if($coba==0)
				                {
				                	    echo '0';
				                }
				                 ?>
				                 </td>
				                <td><?php echo $sdl[$x]['jumlah'];?></td>
				                <td>
				                <?php
				                $coba=0;
				                foreach ($mi as $s) {
				                	if($a['id']==$s['id'])
				                	{
				                        echo $s['jumlah'];
				                	$coba++;
				                	}
				                }
				                if($coba==0)
				                {
				                	    echo '0';
				                }
				                 ?>
				                 <td>
				                <?php
				                $coba=0;
				                foreach ($mil as $s) {
				                	if($a['id']==$s['id'])
				                	{
				                        echo $s['jumlah'];
				                	$coba++;
				                	}
				                }
				                if($coba==0)
				                {
				                	    echo '0';
				                }
				                 ?>
				                 </td><td><?php echo $smp[$x]['jumlah'];?></td>
				                <td>
				                <?php
				                $coba=0;
				                foreach ($smpl as $s) {
				                	if($a['id']==$s['id'])
				                	{
				                        echo $s['jumlah'];
				                	$coba++;
				                	}
				                }
				                if($coba==0)
				                {
				                	    echo '0';
				                }
				                 ?>
				                 </td>
								<td>
				                <?php
				                $coba=0;
				                foreach ($mts as $s) {
				                	if($a['id']==$s['id'])
				                	{
				                        echo $s['jumlah'];
				                	$coba++;
				                	}
				                }
				                if($coba==0)
				                {
				                	    echo '0';
				                }
				                 ?>
				                 </td>
				                <td>
				                <?php
				                $coba=0;
				                foreach ($mtsl as $s) {
				                	if($a['id']==$s['id'])
				                	{
				                        echo $s['jumlah'];
				                	$coba++;
				                	}
				                }
				                if($coba==0)
				                {
				                	    echo '0';
				                }
				                 ?>
				                 </td>
				                <td><?php echo $sma[$x]['jumlah'];?></td>
				                <td><?php echo $smal[$x]['jumlah'];?></td>
				                <td>
				                <?php
				                $coba=0;
				                foreach ($ma as $s) {
				                	if($a['id']==$s['id'])
				                	{
				                        echo $s['jumlah'];
				                	$coba++;
				                	}
				                }
				                if($coba==0)
				                {
				                	    echo '0';
				                }
				                 ?>
				                 </td>
				                <td>
				                <?php
				                $coba=0;
				                foreach ($mal as $s) {
				                	if($a['id']==$s['id'])
				                	{
				                        echo $s['jumlah'];
				                	$coba++;
				                	}
				                }
				                if($coba==0)
				                {
				                	    echo '0';
				                }
				                 ?>
				                 </td>
				                <td><?php echo $smk[$x]['jumlah'];?></td>
				                <td><?php echo $smkl[$x]['jumlah'];?></td>

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
	  