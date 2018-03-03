<?php
  include "../lib/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Aplikasi Surat</title>

    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <link href="../assets/css/sticky-footer-navbar.css" rel="stylesheet">
    <link href="../assets/css/navbar-static-top.css" rel="stylesheet">
  </head>
  <body class="body">
  <?php
    include '../menu.php';
  ?>
  <div class="container">
    <div class="row">
      <div class="span6">
      <div class="input-group col-md-6">
      <legend>Entri Data Petugas</legend>
        <form method="POST" action="simpan-data-petugas.php">
          <div class="form-group">
            <div class="input-group col-md-6">
            <label>id petugas</label>
            <input type="text" name="id" class="form-control" id="id" placeholder="id petugas" required></input>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group col-md-6">
            <label>nama depan</label>
            <input type="text" name="nama_depan" class="form-control" id="nama_depan" placeholder="nama depan" required></input>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group col-md-6">
            <label>nama belakang</label>
            <input type="text" name="nama_belakang" class="form-control" id="nama_belakang" placeholder="nama belakang"></input>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group col-md-6">
            <label>hak</label>
            <input type="text" name="hak" class="form-control" id="hak" placeholder="hak" required></input>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group col-md-6">
            <label>password</label>
            <input type="text" name="password" class="form-control" id="password" placeholder="password" required></input>
            </div>
          </div>
         
          
        <input type="submit" class="btn btn-info" name="submit" value="Simpan"></input>
        <input type="button" class="btn btn-info" value="Batal" onclick="self.history.back();"></input>
      </form>
      </div>
    </div>
  </div>
  </div>
  <footer class="footer" >
  <div class="container" align="center">
  <p><b>Aplikasi Surat dengan Bootstrap</b></p>
  <p><b>&copy; 2018 <a href="https://twitter.com/yunus" target="_blank">yunus.com</a></p>
  </div>
</footer>
    <script src="../assets/js/jquery.js"></script>  
    <script src="../assets/js/bootstrap.min.js"></script>

    
  </body>
  <style type="text/css">
    .body{
      align-content: center;
    }
  </style>
</html>