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
                    <div class="panel-heading">Data Sekolah berdasarkan Prestasi</div>
                    <div class="panel-body">
                        
                        <br>

                       <table data-toggle="table" data-url="#"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc" id="tebel">
						    <thead>
						    <tr>
						        <th data-sortable="true">No</th>
						        <th data-sortable="true">NPSN</th>
						         <th data-sortable="true">Jenjang</th>
						         <th data-sortable="true">Nama Sekolah</th>
						        <th data-sortable="true">Tahun Ajaran</th>
						        <th data-sortable="true">Jenis Prestasi</th>
						         <th data-sortable="true">Level</th>
						        <th data-sortable="true">Hasil</th>
						    </tr>
						    </thead>
						    <tbody>
<?php 
										$i = 0;
										foreach ($prestasi as $p ) {
											?>
											
											<tr>
												<td><?php echo $i;?></td>
												<td><?php echo $p['a1'];?></td>
												<td><?php echo $p['a2'];?></td>
												<td><?php echo $p['a3'];?></td>
												<td><?php echo $p['a5'];?></td>
												<td><?php echo $p['a6'];?></td>
												<td><?php echo $p['a7'];?></td>
												<td><?php echo $p['a8'];?></td>
											</tr>
											<?php
											$i++;
										}
									?>
                            </tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
	</div>

