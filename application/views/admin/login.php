		<br>
		<br>
		<br>
		<br>
		<br>

		<script type="text/javascript">
			function cekform()
			 {
			 	if(!$("email").val())
			 	{
			 		alert('maaf username/email tidak boleh kosong');
			 		$("$username").focus();
			 		return false;
			 	}
			 }
		</script>


		<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log-in Sekolah</div>
				<div class="panel-body">
                    <form action="<?php echo base_url('login/cek_login'); ?>" method="post">
                        <div class="row">
                            <div class="col-md-20">
                                <div class="x_panel" >
                                    <h1>Masuk</h1>
                                    <div>
                                        <input name="username" type="text" class="form-control" placeholder="Username" required="" />
                                    </div>
                                    <div>
                                        <input name="password" type="password" class="form-control" placeholder="Password" required="" />
                                    </div>
                                    <div>
                                        <input style="text-align: left;" type="checkbox" name="remember">  ingat saya</input>
                                    </div>
                                    <div>
                                        <br><button class="btn btn-primary btn-lg" type="submit">Masuk</button></br>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="separator">
                                        <p class="change_link">Lupa password?
                                            <a href="#signup" class="to_register"><u><i>  Bantuan </i></u></a>
                                        </p>

                                        <div class="clearfix"></div>
                                        <br />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	