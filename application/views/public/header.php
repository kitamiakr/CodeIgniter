<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>sekolahjogja</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
  <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
  <meta name="author" content="freehtml5.co" />

  
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/magnific-popup.css">

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.default.min.css">

  <!-- Flexslider  -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/flexslider.css">

  <!-- Pricing -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/pricing.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">

  <!-- Modernizr JS -->
  <script src="<?=base_url()?>assets/js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  </head>
  <body>

    
  <div class="fh5co-loader"></div>
  
  <div id="page">
  <nav class="fh5co-nav" role="navigation">
    <div class="top">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-right">
            
            <p class="num">Call: +6281568396925</p>
            <ul class="fh5co-social">
              <li><a href="https://facebook.com"><i class="icon-facebook2"></i></a></li>
              <li><a href="https://twitter.com"><i class="icon-twitter2"></i></a></li>
              <li><a href="https://dribble.com"><i class="icon-dribbble2"></i></a></li>
              <li><a href="https://github.com/kitamiakr"><i class="icon-github"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="top-menu">
      <div class="container">
        <div class="row">
          <div class="col-xs-2">
            <div id="fh5co-logo"><a href="index.html"><i class="icon-study"></i>SekolahJogja<span></span></a></div>
          </div>
          <div class="col-xs-10 text-right menu-1">
            <ul>
              <li class="active"><a href="#">Beranda</a></li>
              
              <li class="has-dropdown">
                <a href="/sekolahjogja/c_public/sekolah/">Data Pokok</a>
                <ul class="dropdown">
                  <li><a href="/sekolahjogja/c_public/sekolah/">Data Sekolah</a></li>
                  <li><a href="/sekolahjogja/c_public/siswa_kabupaten_jnj/">Data Siswa</a></li>
                  <li><a href="/sekolahjogja/c_public/guru_jk_kab/">Data Guru</a></li>
                  <li><a href="/sekolahjogja/c_public/ten_jk_kab/">Data Tenpendik</a></li>
                  
                </ul>
              </li>
              
              <li ><span><a href="<?=base_url()?>login_sekolah">Login</a></span></button></li>
              
              
            </ul>
          </div>
        </div>
        
      </div>
    </div>
  </nav>

<!-- Modal -->
<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login Form</h4>
      </div>
      <div class="modal-body">
        <div class="wrapper">
        <form class="form-signin action=<?php echo base_url('sekolah/aksi_login'); ?>" method="post">       
            <h2 class="form-signin-heading">Please login</h2>
            <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
            <input type="password" class="form-control" name="password" placeholder="Password" required=""/>   <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit" value="Login">Login</button>   
        </form>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>