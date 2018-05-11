<?php if (!isset($_SESSION['id_user'])) {
    redirect(base_url("/Welcome/masuk"));
} ?>
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


    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('asset/css/new-age.min.css')?>" rel="stylesheet">

  </head>

  <body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container" >
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><?php foreach($get_selected->result_array() as $row){ echo $row['pst_name'];}?></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url()?>Cprofile/guru">Ngaji</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url()?>Cprofile/profile">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url()?>Cprofile/pembayaran">Pembayaran</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url()?>Logout">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-5 my-auto" >
            <div class="header-content mx-auto" style="text-align:center">
              <h1 class="mb-5">Profile</h1>
<form action="<?php echo base_url()?>Crud/updatedata" method="post">
              <?php foreach($get_selected->result_array() as $row){?>
                  <img src="<?php echo base_url()?>asset/picture/<?php echo $row['foto']?>" width="200px" length="200px" style="border-radius: 50%;">
                  <br><br>
                <?php }?>
            </div>
          </div>

          <div class="col-lg-7 my-auto" >
            <div class="header-content mx-auto">
              <?php foreach($get_selected->result_array() as $row){?>
                <h5>Nama :</h5> <input required type="text" name="nama" value="<?php echo $row['pst_name'];?>" style="border-radius: 7px;background: transparent; border-color:white;color:white;padding:15px;width:100%"><br><br>
                <h5>E-mail :</h5> <input disabled required type="email" name="email" value="<?php echo $row['pst_email'];?>" style="border-radius: 7px;background: transparent; border-color:white;color:white;padding:15px;width:100%"><br><br>
                  <?php }?>

                  <input type="submit" value="Simpan" class="btn btn-outline btn-xl js-scroll-trigger" style="color:black">
</form>
              <!--<form class="" action="" method="post">
                <h5>Nama :</h5> <input required type="text" name="nama" placeholder="Nama Lengkap" style="border-radius: 7px;background: transparent; border-color:white;color:white;padding:15px;width:100%"><br><br>
                <h5>E-mail :</h5> <input required type="email" name="email" placeholder="E-mail" style="border-radius: 7px;background: transparent; border-color:white;color:white;padding:15px;width:100%"><br><br>
                <span id="confirmMessage" class="confirmMessage"></span>
              <br><br>
                <input type="submit" name="Simpan" class="btn btn-outline btn-xl js-scroll-trigger">
              -->
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
