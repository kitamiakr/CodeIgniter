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
					<div class="panel-heading">Data Sekolah</div>
					<div class="panel-body">
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th>Npsn</th>
						        <th>Web</th>
						        <th>Akreditasi</th>
						        <th>Telepon</th>
						        <th>Alamat</th>
					
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach ($prof as $p) {
						    ?>
						    <tr>
						    	<td align="left"><?php echo $p->npsn ?></td>
						    	<td align="left"><?php echo $p->web ?></td>
						    	<td align="left"><?php echo $p->akreditasi ?></td>
						    	<td align="left"><?php echo $p->telepon ?></td>
						    	<td align="left"><?php echo $p->alamat ?></td>

						    </tr>
						    <?php } ?>
                            </tbody>
						</table>
					</div>
				</div>
			</div>



			
		</div><!--/.row-->
	</div>	<!--/.main-->