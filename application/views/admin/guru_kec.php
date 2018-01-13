<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		<div class="row">
            <ol class="breadcrumb">
                <li><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg></li>
                <li><a href="http://localhost/sekolah/index.php/sekolah/guru">Data Guru</a></li>
                <li><a href="http://localhost/sekolah/index.php/sekolah/guru_kab/1">Guru Kecamatan</a></li>
            </ol>
        </div><!--/.row-->
				
	
		
	<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Data Guru</div>
					<div class="panel-body">
						<div class="pull-right">
							<a href="#!" class="btn btn-success" ><span class="glyphicon glyphicon-print"></span> Print </a>
						</div>
						<br>
						<br>
						<table data-toggle="table" data-url="#"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc" id="tebel">
						    <thead>
						    <tr>
						        <th data-sortable="true">No</th>
						        <th data-sortable="true">Kecamatan</th>
						         <th data-sortable="true">Jumlah Guru</th>
						         <th data-sortable="true">Jumlah Laki-Laki</th>
						         <th data-sortable="true">Jumlah Perempuan</th>
						    </tr>
						    </thead>
						    <tbody>
<?php
            $x=1;
                foreach ($kec as $a)
                    {
                    ?>
            <tr>
                <td><?php echo $x;?></td>
                <td><?php echo anchor('sekolah/guru_sklh/'.$a['kode_kec'],$a['nama_kec']);?></td>
                <td>
                    <?php
                        $test=0;
                            foreach ($all as $b)
                            {
                                if($b['id']==$a['kode_kec'])
                                    {
                                    $test++;
                                    echo $b['jumlah_guru'];
                                    }
                            }
                        if($test==0)
                            {
                            echo '0';
                            }    
                    ;?>
                </td>
                <td>
                    <?php
                        $test=0;
                            foreach ($laki as $b)
                            {
                                if($b['id']==$a['kode_kec'])
                                    {
                                    $test++;
                                    echo $b['jumlah_guru'];
                                    }
                            }
                        if($test==0)
                            {
                            echo '0';
                            }    
                    ;?>
                </td>
                <td>
                    <?php
                        $test=0;
                            foreach ($perempuan as $b)
                            {
                                if($b['id']==$a['kode_kec'])
                                    {
                                    $test++;
                                    echo $b['jumlah_guru'];
                                    }
                            }
                        if($test==0)
                            {
                            echo '0';
                            }    
                    ;?>
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
		</div><!--/.row-->
		
	</div>