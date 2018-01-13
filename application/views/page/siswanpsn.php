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
					<div class="panel-heading">Jumlah Siswa berdasar Jenis Kelamin</div>
					<div class="panel-body">
						<table class="table table-condensed" >
						    <thead>
						    <tr>
						        <th data-sortable="true">No</th>
						       
						         <th data-sortable="true">Jenjang</th>
						         <th data-sortable="true">Jumlah Laki-laki</th>
						        <th data-sortable="true">Jumlah Perempuan</th>
						        <th data-sortable="true">Jumlah Siswa</th>
						    </tr>
						    </thead>
						    <tbody>
<?php
            //var_dump($kec_sklh); gawe ngecek isine array
            $x=0;
                foreach ($kec_sklh as $a)
                    {$x++;
                    ?>
            <tr>
                <td><?php echo $x;?></td>
                <td><?php echo $a['jenjang'];?></td>            
                <td><?php echo $a['putra'];?></td>
                <td><?php echo $a['putri'];?></td>
                <td><?php echo $a['jumlah'];?></td>
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