<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NgajiKuy</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('asset/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="<?php echo base_url('asset/vendor/font-awesome/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/vendor/simple-line-icons/css/simple-line-icons.css')?>">
    <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Lato')?>" rel="stylesheet">
    <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900')?>" rel="stylesheet">
    <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Muli')?>" rel="stylesheet">
    <style>

    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: white;
        opacity: 1; /* Firefox */
    }
    </style>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('asset/css/new-age.min.css')?>" rel="stylesheet">

  </head>
  <body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url('home') ?>">Halaman Utama</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="">Masuk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url('Welcome/daftar') ?>">Daftar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead" style="background: url('asset/img/bg-pattern.png'), linear-gradient(to left, #bd41ab,#005cb0)">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-7 my-auto">
            <div class="header-content mx-auto" style="text-align:center">

             <img src="<?php echo base_url('asset/img/bo1.png') ?>" style="width:60%;" alt="">

            </div>
          </div>
          <div class="col-lg-5 my-auto">
            <form class="" action="<?php echo base_url()?>login" method="post">
              <h5>E-mail :</h5> <input required type="email" name="pst_email" placeholder="E-mail" style="border-radius: 7px;background: transparent; border-color:white;color:white;padding:15px;width:100%"><br><br>
              <h5>Password :</h5> <input required type="password" name="pst_password" placeholder="password" style="border-radius: 7px;background: transparent; border-color:white;color:white;padding:15px;width:100%"><br><br>
              <input name="submit" type="submit" class="btn btn-outline btn-xl js-scroll-trigger">
            </form>
            <br><br>
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->

                  <div class="button">
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                  </div>

          </div>
        </div>
      </div>
    </header>

    <footer>
      <div class="container">
        <p>&copy; Your Website 2018. All Rights Reserved.</p>
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="#">Privacy</a>
          </li>
          <li class="list-inline-item">
            <a href="#">Terms</a>
          </li>
          <li class="list-inline-item">
            <a href="#">FAQ</a>
          </li>
        </ul>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('asset/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url('asset/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url('asset/js/new-age.min.js')?>"></script>

  </body>

</html>
