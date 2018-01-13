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
                    <div class="panel-heading">Data Sekolah berdasarkan Jenjang</div>
                    <div class="panel-body">
                        
                        <br>

                        <table class="table table-bordered">
						    <thead>
						    <tr>
						        <th data-sortable="true">No</th>
						        <th data-sortable="true">Kecamatan</th>
						         <th data-sortable="true">SD/MI</th>
						         <th data-sortable="true">SMP/MTs</th>
						         <th data-sortable="true">SMA/MA</th>
						        <th data-sortable="true">SMK</th>
						        <th data-sortable="true">SLB</th>
						    </tr>
						    </thead>
						    <tbody>
<?php
            //var_dump($awal); gawe ngecek isine array
            $x=0;
                foreach ($awal as $a)
                    {$x++;
                    ?>
            <tr>
                <td><?php echo $x;?></td>
                <td><?php echo anchor('admin/skl_sekolah/'.$a['id'],$a['kec']);?></td>
                <td><?php
                                $v=0;
                            foreach ($dasar as $e)
                                {
                                    if($e['id']==$a['id']){$v++;
                                    echo $e['jumlah'];}
                                }
                                if($v==0)
                                    {
                                    echo '0';
                                    }
                    ?></td>
                <td><?php
                                $v=0;
                            foreach ($menengah as $e)
                                {
                                    if($e['id']==$a['id']){$v++;
                                    echo $e['jumlah'];}
                                }
                                if($v==0)
                                    {
                                    echo '0';
                                    }
                    ?></td>
                <td><?php
                                $v=0;
                            foreach ($atas as $d)
                                {
                                    if($d['id']==$a['id']){$v++;
                                    echo $d['jumlah'];}
                                }
                                if($v==0)
                                    {
                                    echo '0';
                                    }
                    ?></td>
                <td><?php
                                $v=0;
                            foreach ($kejuruan as $c)
                                {
                                    if($c['id']==$a['id']){$v++;
                                    echo $c['jumlah'];}
                                }
                                if($v==0)
                                    {
                                    echo '0';
                                    }
                    ?></td>
                 <td><?php
                                $v=0;
                            foreach ($spesial as $b)
                                {
                                    if($b['id']==$a['id']){$v++;
                                    echo $b['jumlah'];}
                                }
                                if($v==0)
                                    {
                                    echo '0';
                                    }
                    ?></td>
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