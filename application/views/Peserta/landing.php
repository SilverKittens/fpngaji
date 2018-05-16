<?php
    if (!isset($_SESSION['id_user'])) {
    redirect(base_url("/Welcome/masuk"));
}
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <title>NgajiKuy</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url('asset/img/favicon.png')?>" rel="icon">
  <link href="<?php echo base_url('asset/img/apple-touch-icon.png')?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url('asset/lib/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url('asset/lib/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('asset/lib/animate/animate.min.css')?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/vendor/bootstrap/csstable/bootstrap.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/vendor/animate/animate.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/vendor/select2/select2.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/vendor/perfect-scrollbar/perfect-scrollbar.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/util.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/main.css')?>">
  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url('asset/css/style.css')?>" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <!--<?php var_dump($_SESSION) ?>-->
  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><?php foreach($get_selected->result_array() as $row){ echo $row['pst_name'];}?></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Ngaji</a></li>
          <li><a href="#about">Jadwal</a></li>
          <li><a href="#services">Profile</a></li>
          <li><a href="#portfolio">Pembayaran</a></li>
          <li><a href="<?php echo base_url()?>Logout" style="color:red">Logout</a>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <?php
      if ($get_jadwal->result_array()) {
        // code...
        ?>
          <h1 class="mb-5">Anda telah memiliki guru ngaji.</h1><?php
        foreach($get_jadwal->result_array() as $row1){
        if($row1){?>
        <?php }
        }
        }
        else { ?>
          <h1 class="mb-5">Anda belum memiliki guru ngaji.</h1>
        <?php   }
       ?>
      <a href="#call-to-action" target="_blank" class="btn-get-started" >Cari Guru</a>
              <a href="#about" target="" class="btn-get-started" >Lihat Jadwal</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Paket</h2>

            <div class="icon-box wow fadeInUp">
              <ul>
                <li><h4 class="title">Asasi 1</h4></li>
                <li><h4 class="title">Asasi 2</h4></li>
                <li><h4 class="title">Tahmidi</h4></li>
              </ul>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <ul>
                <li><h4 class="title">Tilawah</h4></li>
                <li><h4 class="title">Tawasuthi</h4></li>
                <li><h4 class="title">Idadi</h4></li>
              </ul>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <ul>
                <li><h4 class="title">Takmili</h4></li>
                <li><h4 class="title">Tahsini</h4></li>
                <li><h4 class="title">Tajwidi</h4></li>
              </ul>
            </div>

          </div>

          <div class="col-lg-6 content order-lg-2 order-1 wow fadeInRight">
            <h1> Jadwal yang anda miliki</h1>

            <table style="width:100%;border-color:black">
              <tr>
                <td>No</td>
                <td>Guru</td>
                <td>Paket</td>
                <td>Hari</td>
                <td>Jam</td>
                <td>Link</td>
              </tr>
              <?php
            if ($get_jadwal->result_array()) {
              foreach($get_jadwal->result_array() as $row){
                  if($row){?>
              <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['guru_name'];?></td>
                <td><?php echo $row['paket'];?></td>
                <td><?php echo $row['hari'];?></td>
                <td><?php echo $row['jam'];?></td>
                <td><a href="https://appr.tc/r/<?php echo $row['link'];?>" target="_blank" style="text-decoration:none">Ngaji</a></td>
              </tr>
            <?php }
          }
          }
          else {  ?>
            <h4 class="mb-5">Anda belum memiliki jadwal ngaji.</h4>
          <?php   }
         ?>
            </table>


        </div>
        </div>

      </div>
    </section><!-- #about -->
    <!--==========================
       Call To Action Section
       ============================-->
       <section id="call-to-action">
         <div class="container wow fadeIn">
           <div class="row">
             <div class="col-lg-9 text-center text-lg-left">
               <h3 class="cta-title">Cari Guru</h3>
               <p class="cta-text">Cari Ustad / Ustadzah sesuai dengan paket yang anda mau</p>
             </div>
             <div class="text-center">
               <!-- tabel -->
               <div class="limiter">
                   <div class="wrap-table100">
                     <div class="table100 ver3 b-110">
                       <div class="table100-head"style="text-align:center">
                         <table >
                           <thead>
                             <tr class="row100 head">
                               <th class="cell100 column1">Nama Guru</th>
                               <th class="cell100 column2">Paket</th>
                               <th class="cell100 column3">Jenis Kelamin</th>
                               <th class="cell100 column4">Hari</th>
                               <th class="cell100 column5">Jam</th>
                               <th class="cell100 column6">Link</th>
                             </tr>
                           </thead>
                         </table>
                       </div>

                       <div class="table100-body js-pscroll">
                         <table>
                           <tbody>
                               <?php foreach($get_guru->result_array() as $row){ ?>
                             <tr class="row100 body">
                               <td class="cell100 column1"><?php echo $row['guru_name'];?></td>
                               <td class="cell100 column2"><?php echo $row['paket'];?></td>
                               <td class="cell100 column3"><?php echo $row['jeniskelamin'];?></td>
                               <td class="cell100 column4"><?php echo $row['hari'];?></td>
                               <td class="cell100 column5"><?php echo $row['jam'];?></td>
                               <?php $murid = $_SESSION['id_user']['pst_name']; $guru=$row['guru_name'];$paket = $row['paket'] ?>
                               <td class="cell100 column6"><a href="<?php echo base_url()?>Crud/addkonfirmasi/<?php echo $murid ?>/<?php echo $guru ?>/<?php echo $paket ?>/<?php echo $row['hari'] ?>/<?php echo $row['jam'] ?>" target="" class="btn-get-started">Daftar</a></td>
                             </tr>

                           <?php   }
                          ?>
                           </tbody>
                        </table>
                    </div>
                  </div>
                </div>
             </div>
           </div>
         </div>
         </div>
       </section><!-- #call-to-action -->
    <!--==========================
      Facts Section
    ============================-->
  <!--  <section id="facts">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Facts</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
        <div class="row counters">

  				<div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">232</span>
            <p>Clients</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">521</span>
            <p>Projects</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,463</span>
            <p>Hours Of Support</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>Hard Workers</p>
  				</div>

  			</div>

      </div>
    </section><!-- #facts -->
-->
    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Profile</h3>
          <br><br>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-15 wow fadeInUp" data-wow-delay="0.2s" style="text-align:center">
              <?php foreach($get_selected->result_array() as $row){?>
                  <img src="<?php echo base_url()?>asset/picture/peserta/<?php echo $row['foto']?>" width="200px" length="200px" style="border-radius: 50%;"><br><br><br>
              <?php }?>
          </div>
              <div class="col-lg-4 col-md-10 wow fadeInUp" data-wow-delay="0.2s">
                <div class="box">
              <?php foreach($get_selected->result_array() as $row){?>
                <h5>Nama :</h5> <input disabled type="text" name="nama" value="<?php echo $row['pst_name'];?>" style="border-radius: 7px;background: transparent; border-color:white;color:black;padding:15px;width:100%"><br><br>
              </div>
              </div>
                <div class="col-lg-4 col-md-10 wow fadeInUp" data-wow-delay="0.2s">
                  <div class="box">
                <h5>E-mail :</h5> <input disabled required type="email" name="email" value="<?php echo $row['pst_email'];?>" style="border-radius: 7px;background: transparent; border-color:white;color:black;padding:15px;width:100%"><br><br>
                  <?php }?>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
    Call To Action Section
    ============================-->
    <section id="portfolio">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h1 class="cta-title">Pembayaran</h1>
            <p>Pembayaran dapat dilakukan jika Ustad/Ustadzah menerima permintaan anda</p>
            <?php foreach($get_konfirmasi->result_array() as $row){ ?>
              <h3><?php echo $row['paket'] ?> :  <?php echo $row['guru_name']?></h3>
              <h5><?php echo $row['status'];?> </h5>
              <?php



               ?>
              <br><br>
                <?php }?>
              </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Ajukan Perubahan</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Regna</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->
        Bootstrap Templates by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url('asset/lib/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('asset/lib/jquery/jquery-migrate.min.js')?>"></script>
  <script src="<?php echo base_url('asset/lib/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?php echo base_url('asset/lib/easing/easing.min.js')?>"></script>
  <script src="<?php echo base_url('asset/lib/wow/wow.min.js')?>"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <script src="<?php echo base_url('asset/lib/waypoints/waypoints.min.js')?>"></script>
  <script src="<?php echo base_url('asset/lib/counterup/counterup.min.js')?>"></script>
  <script src="<?php echo base_url('asset/lib/superfish/hoverIntent.js')?>"></script>
  <script src="<?php echo base_url('asset/lib/superfish/superfish.min.js')?>"></script>

  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url('asset/contactform/contactform.js')?>"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url('asset/js/main.js')?>"></script>

  <!--===============================================================================================-->
  	<script src="<?php echo base_url('asset/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
  <!--===============================================================================================-->
  	<script src="<?php echo base_url('asset/vendor/bootstrap/jstable/popper.js')?>"></script>
  	<script src="<?php echo base_url('asset/vendor/bootstrap/jstable/bootstrap.min.js')?>"></script>
  <!--===============================================================================================-->
  	<script src="<?php echo base_url('asset/vendor/select2/select2.min.js')?>"></script>
  <!--===============================================================================================-->
  	<script src="<?php echo base_url('asset/vendor/perfect-scrollbar/perfect-scrollbar.min.js')?>"></script>
  	<script>
  		$('.js-pscroll').each(function(){
  			var ps = new PerfectScrollbar(this);

  			$(window).on('resize', function(){
  				ps.update();
  			})
  		});


  	</script>
  <!--===============================================================================================-->
  	<script src="<?php echo base_url('asset/js/main.js')?>"></script>


</body>
</html>
