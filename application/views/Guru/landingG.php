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

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><?php foreach($get_guru->result_array() as $row){ echo $row['guru_name'];}?></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Ngaji</a></li>
          <li><a href="#about">Jadwal</a></li>
          <li><a href="#services">Profile</a></li>
          <li><a href="#portfolio">Konfirmasi</a></li>
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
        foreach($get_jadwal->result_array() as $row1){
        if($row1){?>
       <h1 class="mb-5">Anda telah memiliki murid.</h1>
        <?php }
        }
        }
        else { ?>
          <h1 class="mb-5">Anda belum memiliki murid.</h1>
        <?php   }
       ?>
              <a href="#about" target="_blank" class="btn-get-started" >Lihat Jadwal</a>
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
                <td>Murid</td>
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
                <td><?php echo $row['pst_name'];?></td>
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

    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
            <h3 class="cta-title">Pasang Jadwal </h3>
          <div ><br><br>
            <!-- tabel -->
            <form action="<?php echo base_url()?>crud/addjadwalguru" method="post">
                <h3 class="cta-title">Paket</h3>
                <select name="paket">
                  <option value="Asasi 1">Asasi 1</option>
                  <option value="Asasi 2">Asasi 2</option>
                  <option value="Tahmidi">Tahmidi</option>
                  <option value="Tilawah">Tilawah</option>
                  <option value="Tawasuthi">Tawasuthi</option>
                  <option value="Idadi">Idadi</option>
                  <option value="Takmili">Takmili</option>
                  <option value="Tahsini">Tahsini</option>
                  <option value="Tajwidi">Tajwidi</option>
                </select>
                <h3 class="cta-title">Hari</h3>
                <select name="hari">
                  <option value="Senin">Senin</option>
                  <option value="Selasa">Selasa</option>
                  <option value="Rabu">Rabu</option>
                  <option value="Kamis">Kamis</option>
                  <option value="Jumat">Jumat</option>
                  <option value="Sabtu">Sabtu</option>
                  <option value="Minggu">Minggu</option>
                </select>
                <h3 class="cta-title">Jam</h3>
              <input type="text" name="jam" value=""><br><br>
              <input type="submit" name="Submit" value="Tambahkan jadwal">
            </form>

        </div>
      </div>
      </div>
    </section><!-- #call-to-action -->



    <!--==========================
       Call To Action Section
       ============================-
       <section id="call-to-action">
         <div class="container wow fadeIn">
           <div class="row">
             <div class="col-lg-9 text-center text-lg-left">
               <h3 class="cta-title">Cari Guru</h3>
               <p class="cta-text">Cari Ustad / Ustadzah sesuai dengan paket yang anda mau</p>
             </div>
             <div class="col-lg-3 cta-btn-container text-center">
               <a class="cta-btn align-middle" href="#">Call To Action</a>
             </div>
           </div>

         </div>
       </section>-><!-- #call-to-action -->
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
              <?php foreach($get_guru->result_array() as $row){?>
                  <img src="<?php echo base_url()?>asset/picture/guru/<?php echo $row['berkas']?>" width="200px" length="200px" style="border-radius: 50%;"><br><br><br>
              <?php }?>
          </div>
              <div class="col-lg-4 col-md-10 wow fadeInUp" data-wow-delay="0.2s">
                <div class="box">
              <?php foreach($get_guru->result_array() as $row){?>
                <h5>Nama :</h5> <input disabled type="text" name="nama" value="<?php echo $row['guru_name'];?>" style="border-radius: 7px;background: transparent; border-color:white;color:black;padding:15px;width:100%"><br><br>
              </div>
              </div>
                <div class="col-lg-4 col-md-10 wow fadeInUp" data-wow-delay="0.2s">
                  <div class="box">
                <h5>E-mail :</h5> <input disabled required type="email" name="email" value="<?php echo $row['guru_email'];?>" style="border-radius: 7px;background: transparent; border-color:white;color:black;padding:15px;width:100%"><br><br>
                  <?php }?>
                  <form action="<?php echo base_url()?>Cprofile/edit" method="post">
                    <input type="submit" value="Edit" class="btn btn-outline btn-xl js-scroll-trigger" style="color:black">
                  </form>
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
            <h3 class="cta-title">Konfirmasi</h3>
            <?php foreach($get_konfirmasi->result_array() as $row){ ?>
              <h1><?php echo $row['paket'];?>:</h1>
              <h5><?php echo $row['status'];?></h5>
                      <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="<?php echo base_url()?>Crud/update/<?php echo $row['id'] ?>">Terima</a>
                        <a class="cta-btn align-middle" href="#" style="color:red">  Tolak</a>
                      </div>
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

</body>
</html>
