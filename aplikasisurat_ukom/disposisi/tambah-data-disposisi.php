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
      <div class="span12">
      <div class="input-group col-md-6">
      <legend>Entri Data disposisi</legend>
        <form method="POST" action="simpan-data-disposisi.php">
          <div class="form-group">
            <div class="input-group col-md-6">
            <label>No disposisi</label>
            <input type="text" name="no_disposisi" class="form-control" id="no_disposisi" placeholder="no disposisi" required></input>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group col-md-6">
            <label>Pilih No Agenda</label>
            <select name="no_agenda_masuk" class="form-control">
            <option value="" selected="selected">no agenda</option>
                <?php
                  include '../lib/koneksi.php';
                  $sql = "SELECT * FROM tbl_surat_masuk";
                  $result = mysqli_query($conn, $sql);
                  while($data=mysqli_fetch_array($result)){
                    echo "<option value=$data[no_agenda_masuk]>$data[no_agenda_masuk]</option>";
                  }
                ?>
            </select>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group col-md-6">
            <label>Pilih No Surat</label>
            <select name="no_surat" class="form-control">
            <option value="" selected="selected">no surat</option>
                <?php
                  include '../lib/koneksi.php';
                  $sql = "SELECT * FROM tbl_surat_masuk";
                  $result = mysqli_query($conn, $sql);
                  while($data=mysqli_fetch_array($result)){
                    echo "<option value=$data[no_surat]>$data[no_surat]</option>";
                  }
                ?>
            </select>
            </div>
          
          
          <div class="form-group">
            <div class="input-group col-md-6">
            <label>kepada</label>
            <input type="text" name="kepada" class="form-control" id="kepada" placeholder="kepada" required></input>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group col-md-6">
            <label>keterangan</label>
            <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="keterangan"></input>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group col-md-6">
            <label>status surat</label>
            <input type="text" name="status_surat" class="form-control" id="status_surat" placeholder="status surat" required></input>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group col-md-6">
            <label>tanggapan</label>
            <input type="text" name="tanggapan" class="form-control" id="tanggapan" placeholder="tanggapan" required></input>
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