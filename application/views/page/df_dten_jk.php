<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg></a></li>
				<li>Database</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Tenkependik</h1>
				
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>PTY</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="75" ><span class="percent"><?php echo $jmltpty[0]['jmltenpty']?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Perempuan</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent="65" ><span class="percent"><?php echo $jmltptt[0]['jmltenptt']?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Laki-laki</h4>
						<div class="easypiechart" id="easypiechart-teal" data-percent="80" ><span class="percent"><?php echo $jmltgtt[0]['jmltengtt']?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>S1</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="27" ><span class="percent"><?php echo $jmltgty[0]['jmltengty']?></span>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Jumlah Tenkependik berdasarkan Jenis Kelamin</div>
					<div class="panel-body">
					
							<br>
						<table class="table table-bordered">
						    <thead>
						    <tr align="center">
						    
						    	<th > No</th>
						        <th >NPSN</th>
						        <th > Nama Sekolah</th>
						        <th >Jenjang</th>
						        <th >Laki-laki</th>
						        <th >Perempuan</th>
						        <th >Jumlah</th>
						    </tr>
						    </thead>
						    <tbody>
						    	<?php
            	$x=0;
                foreach ($grl as $a)
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
				                foreach ($grp as $s) {
				                	if($a['npsn']==$s['npsn'])
				                	{
				                        echo $s['jumlahp'];
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
				                foreach ($gr as $s) {
				                	if($a['npsn']==$s['npsn'])
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
            		
                <?php
                    }
                ?>
       
						    </tbody>
						</table>
					</div>
					
				</div>
			</div>

			

	</div>	<!--/.main-->