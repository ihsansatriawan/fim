<?php error_reporting(E_ALL ^ E_NOTICE);
session_start();
include("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sistem Absensi Peserta #FIMRamadhan 2013</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 60px;
      }

      /* Custom container */
      .container {
        margin: 0 auto;
        max-width: 1000px;
      }
      .container > hr {
        margin: 60px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 80px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }


      /* Customize the navbar links to be fill the entire space of the .navbar */
      .navbar .navbar-inner {
        padding: 0;
      }
      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
  </head>

  <body>

    <div class="container">

      <div class="masthead">
          <strong><h3><p class="text-center">Sistem Rekapitulasi Absensi Peserta #FIMRamadhan 2013 <br /> oleh FIM Regional Bandung</p></h3></strong>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>
        <div class="row-fluid">
            <div class="span6">
                 <p class="text-center"><img src="assets/img/logo.png" class="img-rounded"></p>
            </div>
            <div class="span6">
                <p class="text-center"><img src="assets/img/fimr.jpg" class="img-rounded"></p>
            </div>
            
        </div>
     <div class='tab-content'>
                <div class='tab-pane active' id='tab1'>
                    <?php
                    $sql_peserta=mysql_query("select count(*) from peserta");
                    $kkn=mysql_fetch_row($sql_peserta);
                    ?>
                    <p>
                        Jumlah Peserta : <?php echo $kkn[0]; ?>
                    </p>
                    <p>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                            <th>Nama</th>
                            <th>Institusi</th>
                            <th>Email</th>
                            <th>Nomor HP</th>
                            <th>Waktu Datang</th>
                            </tr>
                            </thead>
                            <tbody>
                    <?php
                    $sql=mysql_query("select * from peserta");
                    while($data = mysql_fetch_array($sql)){
                    ?>
                                <tr>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['institusi']; ?></td>
                                    <td><?php echo $data['email']; ?></td>
                                    <td><?php echo $data['no_hp']; ?></td>
                                    <td><?php echo $data['waktu_dtg']; ?></td>
                                </tr>
                    <?php } ?>
                                 </tbody>
                            </table>  
                    </p>
                </div>
            </div>
      

      <hr>

      <div class="footer">
        <div class="container">
            <span class="label label-important">#FIMRamadhan 2013</span>
        </div>
      </div>

    </div> <!-- /container -->

  </body>
</html>
