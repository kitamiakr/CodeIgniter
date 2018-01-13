<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>

<link href="<?php echo base_url('assets'); ?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url('assets'); ?>/css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url('assets'); ?>/css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
    
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            <div class="login-panel panel panel-default">
                <div class="panel-heading">Log in</div>
                <div class="panel-body">
                    <form role="form" action="<?php echo base_url('login_sekolah/cek_login'); ?>" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="username" type="text" autofocus="" required="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>
                            <div>
                                        <br><button class="btn btn-primary btn-lg" type="submit">Masuk</button></br>
                                    </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->    
</body>
</html>

