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
					<div class="panel-heading">Menu Data Tenkepandik</div>
					<div class="panel-body">
							<br>
						<table class="table table-condensed" >
						    <thead>
						    <tr>
						        <th>Data</th>
						        <th>Link</th>
						    </tr>
						    </thead>
						    <tbody>
						    <tr>
						   		<td>Jumlah Tenkependik berdasarkan Jenis kelamin</td>
						   		<td><?php echo anchor('admin/ten_jk_kab/',"Klik Disini");?></td>
						   	</tr>
						   	<tr>
						   		<td>Jumlah Tenkependik berdasarkan Status Pegawai</td>
						   		<td><?php echo anchor('admin/ten_kab_sts/',"Klik Disini");?></td>
						   	</tr>
						   	<tr>
						   		<td>Jumlah Tenkependik berdasarkan Pendidikan</td>
						   		<td><?php echo anchor('admin/ten_kab_pen/',"Klik Disini");?></td>
						   	</tr>
                            </tbody>
						</table>
					</div>
					
				</div>
			</div>

			

	</div>	<!--/.main-->