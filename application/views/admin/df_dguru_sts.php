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
					<div class="panel-heading">Jumlah Guru berdasarkan Status Pegawai</div>
					<div class="panel-body">
							<br>
						<table class="table table-bordered">
						    <thead>
						    <tr align="center">
						    
						    	<th > No</th>
						        <th >NPSN</th>
						        <th >Nama Sekolah</th>
						        <th >Jenjang</th>
						        <th >PNS DPK</th>
						        <th >Honor</th>
						        <th> PNS</th>
						        <th >GTY</th>
						        <th >GTT</th>
						    </tr>
						    </thead>
						    <tbody>
						    	<?php
            	$x=0;
                foreach ($pnsd as $a)
                    {
                    	$x++;
                    ?>
            		<tr>
                		<td><?php echo $x;?></td>
                		<td><?php echo $a['npsn'];?></td>
                		<td><?php echo $a['nm_sk'];?></td>
                		<td><?php echo $a['jenjang'];?></td>
                		<td><?php echo $a['jumlahl'];?></td>
                		<td>
				                <?php
				                $coba=0;
				                foreach ($hnr as $s) {
				                	if($a['npsn']==$s['npsn'])
				                	{
				                        echo $s['jumlahl'];
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
				                foreach ($pns as $s) {
				                	if($a['npsn']==$s['npsn'])
				                	{
				                        echo $s['jumlahl'];
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
				                foreach ($gty as $s) {
				                	if($a['npsn']==$s['npsn'])
				                	{
				                        echo $s['jumlahl'];
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
				                foreach ($gtt as $s) {
				                	if($a['npsn']==$s['npsn'])
				                	{
				                        echo $s['jumlahl'];
				                	$coba++;
				                	}
				                }
				                if($coba==0)
				                {
				                	    echo '0';
				                }
				                 ?>
				        </td>
            		
                <?php
                    }
                ?>
       
						    </tbody>
						</table>
					</div>
					
				</div>
			</div>

			

	</div>	<!--/.main-->