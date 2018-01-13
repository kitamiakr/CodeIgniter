<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg></a></li>
				<li>Database</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Sekolah</h1>
				
			</div>
		</div><!--/.row-->			
		<div class="row">
			<div class="col-lg-12">
			</div>
		</div><!--/.row-->
				
	
		
	<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>SD</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="92" ><span class="percent"><?php echo $jsd[0]['jumlah']?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>SMP</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent="65" ><span class="percent"><?php echo $jsmp[0]['jumlah2']?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>SMA</h4>
						<div class="easypiechart" id="easypiechart-teal" data-percent="56" ><span class="percent"><?php echo $jsma[0]['jumlah3']?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>SMK</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="27" ><span class="percent"><?php echo $jsmk[0]['jumlah4']?></span>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
	<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Data Sekolah</div>
					<div class="panel-body">
						
						<br>

						<table class="table table-bordered">
						    <thead>
						    <tr>
						        <th data-sortable="true">No</th>
						        <th data-sortable="true">Jenjang</th>
						         <th data-sortable="true">Nama Sekolah</th>
						         <th data-sortable="true">NPSN</th>
						    </tr>
						    </thead>
						    <tbody>
<?php
            //var_dump($sekolah); gawe ngecek isine array
            $x=0;
                foreach ($sekolah as $a)
                    {$x++;
                    ?>
            <tr>
                <td><?php echo $x;?></td>
                <td><?php echo $a['jenjang'];?></td>
                <td><?php echo anchor('admin/data_sekolah/'.$a['npsn'],$a['nm_sklh']);?></td>
                <td><?php echo $a['npsn'];?></td>
                
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