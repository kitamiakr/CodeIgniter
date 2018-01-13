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
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>SD</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="80" ><span class="percent"><?php echo $jsd[0]['jumlah']?></span>
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

<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Jumlah Sekolah KTSP</div>
					<div class="panel-body">
						<table class="table table-condensed" >
						    <thead>
						    <tr>
						        <th>Kabupaten</th>
						        <th>SD/MI</th>
						        <th>SMP/MTS</th>
						        <th>SMA/MA</th>
						        <th>SMK</th>
						        <th>Jumlah</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach ($kab as $k) {
						    	$id_kabu = $k->id;
						    	$sdj = $this->lib_new->row_count('profil',array('kab'=>$id_kabu,'jenjang'=>'SD','kurikulum'=>'KTSP'));
						    	$mij = $this->lib_new->row_count('profil',array('kab'=>$id_kabu,'jenjang'=>'MI','kurikulum'=>'KTSP'));
						    	$smpj = $this->lib_new->row_count('profil',array('kab'=>$id_kabu,'jenjang'=>'SMP','kurikulum'=>'KTSP'));
						    	$mtsj = $this->lib_new->row_count('profil',array('kab'=>$id_kabu,'jenjang'=>'MTS','kurikulum'=>'KTSP'));
						    	$smaj = $this->lib_new->row_count('profil',array('kab'=>$id_kabu,'jenjang'=>'SMA','kurikulum'=>'KTSP'));
						    	$maj = $this->lib_new->row_count('profil',array('kab'=>$id_kabu,'jenjang'=>'MA','kurikulum'=>'KTSP'));
						    	$smkj = $this->lib_new->row_count('profil',array('kab'=>$id_kabu,'jenjang'=>'SMK','kurikulum'=>'KTSP'));
						    	$sdmij = $sdj + $mij;
						    	$smpmtsj = $smpj + $mtsj;
						    	$smamaj = $smaj + $maj;
						    	$jumj = $this->lib_new->row_count('profil',array('kab'=>$id_kabu,'kurikulum'=>'KTSP'));
						    	?>
						    	<tr>
						    		<td align="left"><?php echo $k->kabupaten ?></a></td>
						    		<td><?=$sdmij;?></td>
						    		<td><?=$smpmtsj?></td>
						    		<td><?=$smamaj?></td>
						    		<td><?=$smkj?></td>
						    		<td><?=$jumj?></td>
						    	</tr>
						    <?php } ?>
                            </tbody>
						</table>
					</div>
				</div>
			</div>

<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Jumlah Sekolah Akreditasi A</div>
					<div class="panel-body">
						<table class="table table-condensed" >
						    <thead>
						    <tr>
						        <th>Kecamatan</th>
						        <th>SD/MI</th>
						        <th>SMP/MTS</th>
						        <th>SMA/MA</th>
						        <th>SMK</th>
						        <th>Jumlah</th>
						    </tr>
						    </thead>
						<tbody>
						    <?php foreach ($kab as $k) {
						    	$id_kabu = $k->id;
						    	$sda = $this->lib_new->row_count('profil',array('kab'=>$id_kabu,'jenjang'=>'SD','akreditasi'=>'A'));
						    	$mia = $this->lib_new->row_count('profil',array('kab'=>$id_kabu,'jenjang'=>'MI','akreditasi'=>'A'));
						    	$smpa = $this->lib_new->row_count('profil',array('kab'=>$id_kabu,'jenjang'=>'SMP','akreditasi'=>'A'));
						    	$mtsa = $this->lib_new->row_count('profil',array('kab'=>$id_kabu,'jenjang'=>'MTS','akreditasi'=>'A'));
						    	$smaa = $this->lib_new->row_count('profil',array('kab'=>$id_kabu,'jenjang'=>'SMA','akreditasi'=>'A'));
						    	$maa = $this->lib_new->row_count('profil',array('kab'=>$id_kabu,'jenjang'=>'MA','akreditasi'=>'A'));
						    	$smka = $this->lib_new->row_count('profil',array('kab'=>$id_kabu,'jenjang'=>'SMK','akreditasi'=>'A'));
						    	$sdmia = $sda + $mia;
						    	$smpmtsa = $smpa + $mtsa;
						    	$smamaa = $smaa + $maa;
						    	$juma = $this->lib_new->row_count('profil',array('kab'=>$id_kabu,'akreditasi'=>'A'));
						    	?>
						    	<tr>
						    		<td align="left"><?php echo $k->kabupaten ?></a></td>
						    		<td><?=$sdmia;?></td>
						    		<td><?=$smpmtsa?></td>
						    		<td><?=$smamaa?></td>
						    		<td><?=$smka?></td>
						    		<td><?=$juma?></td>
						    	</tr>
						    <?php } ?>
                            </tbody>
                            </table>
					</div>
				</div>
			</div>

<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Jumlah Sekolah Sarpas Milik Sendiri</div>
					<div class="panel-body">
						<table class="table table-condensed" >
						    <thead>
						    <tr>
						        <th>Kabupaten</th>
						        <th>SD/MI</th>
						        <th>SMP/MTS</th>
						        <th>SMA/MA</th>
						        <th>SMK</th>
						        <th>Jumlah</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach ($kab as $k) {
						    	$id_kabu = $k->id;
						    	$sd = $this->lib_new->jum_milik(array('kab'=>$id_kabu,'jenjang'=>'SD','status_kepemilikan' => 'Milik'));
						    	$mi = $this->lib_new->jum_milik(array('kab'=>$id_kabu,'jenjang'=>'MI','status_kepemilikan' => 'Milik'));
						    	$smp = $this->lib_new->jum_milik(array('kab'=>$id_kabu,'jenjang'=>'SMP','status_kepemilikan' => 'Milik'));
						    	$mts = $this->lib_new->jum_milik(array('kab'=>$id_kabu,'jenjang'=>'MTS','status_kepemilikan' => 'Milik'));
						    	$sma = $this->lib_new->jum_milik(array('kab'=>$id_kabu,'jenjang'=>'SMA','status_kepemilikan' => 'Milik'));
						    	$ma = $this->lib_new->jum_milik(array('kab'=>$id_kabu,'jenjang'=>'MA','status_kepemilikan' => 'Milik'));
						    	$smk = $this->lib_new->jum_milik(array('kab'=>$id_kabu,'jenjang'=>'SMK','status_kepemilikan' => 'Milik'));
						    	$sdmi = $sd + $mi;
						    	$smpmts = $smp + $mts;
						    	$smama = $sma + $ma;
						    	$jum = $this->lib_new->jum_milik(array('kab'=>$id_kabu,'status_kepemilikan' => 'Milik'));
						    	?>
						    	<tr>
						    		<td align="left"><?php echo $k->kabupaten ?></td>
						    		<td><?=$sdmi?></td>
						    		<td><?=$smpmts?></td>
						    		<td><?=$smama?></td>
						    		<td><?=$smk?></td>
						    		<td><?=$jum?></td>
						    	</tr>
						    <?php } ?>
                            </tbody>
						</table>
					</div>
				</div>
			</div>

	</div>	<!--/.main-->
	  