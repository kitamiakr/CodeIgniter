<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg></a></li>
				<li class="active">Admin</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
						<div class="panel-body">
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						
<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Tambah Data</div>
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
							<fieldset>
							<!-- Id input-->
								<div class="form-group">
									<label class="col-md-3 control-label">Id</label>
									<div class="col-md-9">
									<label name="id" type="text" class="form-control"  value="<?php echo $a->id; ?>"><?php echo $a->id;?></label>
									</div>
								</div>

								<!-- username input-->
								<div class="form-group">
									<label class="col-md-3 control-label">Username</label>
									<div class="col-md-9">
									<input name="username" type="text"  class="form-control" value="<?php echo $a->username; ?>">
									</div>
								</div>

								<!-- email input-->
								<div class="form-group">
									<label class="col-md-3 control-label">Email</label>
									<div class="col-md-9">
									<input name="email" type="text" class="form-control" value="<?php echo $a->email; ?>">
									</div>
								</div>

								<!-- password input-->
								<div class="form-group">
									<label class="col-md-3 control-label">Password</label>
									<div class="col-md-9">
									<input name="password" type="text" class="form-control" value="<?php echo $a->password; ?>">
									</div>
								</div>

								<!-- nama input-->
								<div class="form-group">
									<label class="col-md-3 control-label">Nama</label>
									<div class="col-md-9">
									<input name="nama" type="text" class="form-control" value="<?php echo $a->Nama; ?>">
									</div>
								</div>

								<!-- level input-->
								<div class="form-group">
									<label class="col-md-3 control-label">Level</label>
									<div class="col-md-9">
									<input name="level" type="text" class="form-control" value="<?php echo $a->level; ?>">
									</div>
								</div>

								<!-- Foto input-->
								<div class="form-group">
									<label class="col-md-3 control-label">Foto</label>
									<div class="col-md-9">
									<input name="foto" type="text" class="form-control" value="<?php echo $a->Foto; ?>">
									</div>
								</div>
							
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button type="submit" name="submit" class="btn btn-default btn-md pull-right" value="Simpan">Submit</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
				</div>

	</div>	<!--/.main-->
	  