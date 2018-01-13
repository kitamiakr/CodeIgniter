<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg></a></li>
				<li class="active">Beranda</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Beranda</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $jmltsklh[0]['jmskl']?></div>
							<div class="text-muted">Data Sekolah</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked female user"><use xlink:href="#stroked-female-user"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $jmltssw[0]['jmssw']?></div>
							<div class="text-muted">Data Siswa</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $jmltguru[0]['jmtgr']?></div>
							<div class="text-muted">Data Guru</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $jmlttenk[0]['jmtenke']?></div>
							<div class="text-muted">Data Tenpendik</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->

<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Jumlah Sekolah</div>
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
						    	$sd = $this->lib_new->row_count('profil', array('kab'=>$id_kabu,'jenjang'=>'SD'));
						    	$mi = $this->lib_new->row_count('profil', array('kab'=>$id_kabu,'jenjang'=>'MI'));
						    	$smp = $this->lib_new->row_count('profil', array('kab'=>$id_kabu,'jenjang'=>'SMP'));
						    	$mts = $this->lib_new->row_count('profil', array('kab'=>$id_kabu,'jenjang'=>'MTS'));
						    	$sma = $this->lib_new->row_count('profil', array('kab'=>$id_kabu,'jenjang'=>'SMA'));
						    	$ma = $this->lib_new->row_count('profil', array('kab'=>$id_kabu,'jenjang'=>'SD'));
						    	$smk = $this->lib_new->row_count('profil', array('kab'=>$id_kabu,'jenjang'=>'SMK'));
						    	$sdmi = $sd + $mi;
						    	$smpmts = $smp + $mts;
						    	$smama = $sma + $ma;
						    	$jum = $this->lib_new->row_count('profil', array('kab'=>$id_kabu));
						    ?>
						    <tr>
						    	<td align="left"><?php echo $k->kabupaten ?></td>
						    	<td><?=$sdmi;?></td>
						    	<td><?=$smpmts;?></td>
						    	<td><?=$smama;?></td>
						    	<td><?=$smk;?></td>
						    	<td><?=$jum?></td>
						    </tr>
						    <?php } ?>
                            </tbody>
						</table>
					</div>
				</div>
			</div>

			

			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Jumlah Siswa</div>
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
						    <?php foreach ($kab as $k) 
						    {
						    	$id_kabu = $k->id;
						    	$sds = $this->lib_new->jum_siswa(array('kab'=>$id_kabu,'jenjang'=>'SD'));
						    	$mis = $this->lib_new->jum_siswa(array('kab'=>$id_kabu,'jenjang'=>'MI'));
						    	$smps = $this->lib_new->jum_siswa(array('kab'=>$id_kabu,'jenjang'=>'SMP'));
						    	$mtss = $this->lib_new->jum_siswa(array('kab'=>$id_kabu,'jenjang'=>'MTS'));
						    	$smas = $this->lib_new->jum_siswa(array('kab'=>$id_kabu,'jenjang'=>'SMA'));
						    	$mas = $this->lib_new->jum_siswa(array('kab'=>$id_kabu,'jenjang'=>'MA'));
						    	$smks = $this->lib_new->jum_siswa(array('kab'=>$id_kabu,'jenjang'=>'SMK'));
						    	$sdmis = $sds + $mis;
						    	$smpmtss = $smps + $mtss;
						    	$smamas = $smas + $mas;
						    	$jums = $this->lib_new->jum_siswa(array('kab'=>$id_kabu));
						    	?>
						    	<tr>
						    		<td align="left"><?php echo $k->kabupaten ?></td>
						    	<td><?=$sdmis;?></td>
						    	<td><?=$smpmtss;?></td>
						    	<td><?=$smamas;?></td>
						    	<td><?=$smks;?></td>
						    	<td><?=$jums?></td>
						    	</tr>
						    <?php } ?>
                            </tbody>
						</table>
					</div>
				</div>
			</div>

			
		</div><!--/.row-->
	</div>	<!--/.main-->