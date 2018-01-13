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
					<div class="panel-heading">Jumlah Guru berdasar Status Pegawai</div>
					<div class="panel-body">
					
							<br>
						<table class="table table-bordered">
						    <thead>
						    <tr align="center">
						    
						    	<th > No</th>
						        <th >Kecamatan</th>
						        <th >Sudah Sertifikasi</th>
						        <th >Belum Sertifikasi</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php
						    //var_dump($sdh);
						    $x=1;
						    foreach ($kec as $a) 
						    {
						     ?>
						    <tr>
						    	<td><?php echo $x; ?></td>
						    	<td><?php echo anchor('c_public/guru_stf_sk/'.$a['id'],$a['kec']);?></td>
						    	<td>
				                <?php
				                $coba=0;
				                foreach ($sdh as $s) {
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
				                foreach ($blm as $s) {
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