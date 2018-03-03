<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel=”icon” type=”image/png” href="assets/img/favicon.png">
    <title>PHP & Bootstrap theme</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/navbar-static-top.css" rel="stylesheet">
    <link href="assets/css/sticky-footer-navbar.css" rel="stylesheet">
  </head>

  <body class="body">
  <?php
  include 'lib/koneksi.php';
  include 'menu.php';
  ?>
    <?php
    ?>
  <div class="container well">
      <div class="blog-header">
        <h1 class="blog-title">Aplikasi Surat dengan Bootstrap</h1>
        <p class="lead blog-description">Yunus Saputra</p>
      </div>
      <div class="row">
      <div class="col-sm-12 blog-main">
      </div>
      </div>
    </div>

    <center><h3>~ Silahkan pilih Panel Dibawah ini ~</h3></center>
  </br>
    <div class="table_home">
          <table width="100%" height="100%" align="center" cellpadding="2" border="0">
            <tbody>
              <tr>
                    <td class="img_home" align="center"><a href="http://localhost/aplikasisurat_ukom/surat-masuk/data-surat-masuk.php"><img src="image/surat masuk.png" width="100" height="100"></a><br />
                    <center>Data Surat Masuk</center></td>
                    <td class="img_home" align="center"><a href="http://localhost/aplikasisurat_ukom/surat-keluar/data-surat-keluar.php"><img src="image/surat keluar.png" width="100" height="100"></a><br /><center>Data Surat Keluar</center></td>
                    <td class="img_home" align="center"><a href="http://localhost/aplikasisurat_ukom/buku-agenda/cari_surat_masuk.php"><img src="image/cari keluar.jpg" width="100" height="100"></a></a><br /><center>Agenda Surat Masuk</center></td>
                    <td class="img_home" align="center"><a href="http://localhost/aplikasisurat_ukom/buku-agenda/cari_surat_keluar.php"><img src="image/cari keluar.png" width="100" height="100"></a><br /><center>Agenda Surat Keluar</center></td>
                    
                </tr>
                
            
            </tbody>
          </table>  
          </div>
            
    <footer class="footer" >
      <div class="container" align="center">
      <p><b>Aplikasi Surat dengan Bootstrap</b></p>
      <p><b>&copy; 2018 <a href="https://twitter.com/yunus" target="_blank">yunus.com</a></p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
  </body>
  <style type="text/css">
    .body{
      background-color: #d4dffd;
    }
  </style>
</html>
