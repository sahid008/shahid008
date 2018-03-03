<?php
    include "../lib/koneksi.php";

    $id = htmlentities($_GET['id']);
    $sql = "SELECT * FROM tbl_petugas WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $data2 = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Aplikasi Surat</title>

    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <link href="../assets/css/sticky-footer-navbar.css" rel="stylesheet">
    <link href="../assets/css/navbar-static-top.css" rel="stylesheet">
  </head>
  <body>
  <?php
    include '../menu.php';
  ?>
  <div class="container">
    <div class="row">
      <div class="span12">
      <legend>Ubah Data Surat keluar</legend>
        <form method="POST" action="perbarui-data-petugas.php">
          <div class="form-group">
            <div class="input-group col-md-5">
            <label>id petugas</label>
            <input type="text" name="id" value="<?php echo $data2['id']; ?>" class="form-control" id="id"></input>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group col-md-5">
            <label>nama depan</label>
            <input type="text" name="nama_depan" value="<?php echo $data2['nama_depan']; ?>" class="form-control" id="nama_depan" required></input>
            </div>
          </div>
         <div class="form-group">
            <div class="input-group col-md-5">
            <label>nama belakang</label>
           <textarea class="form-control" cols="40" rows="5" name="nama_belakang"><?php echo "$data2[nama_belakang]";?></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group col-md-5">
            <label>hak</label>
            <input type="text" name="hak" value="<?php echo $data2['hak']; ?>" class="form-control" id="hak" required></input>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group col-md-5">
            <label>password</label>
            <input type="text" name="password" value="<?php echo $data2['password']; ?>" class="form-control" id="password" required></input>
            </div>
          </div>
          
          
        <input type="submit" class="btn btn-info" name="submit" value="Simpan"></input>
        <input type="button" class="btn btn-info" value="Batal" onclick="self.history.back();"></input>

        <br>
      </form><br>
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
    <script type="text/javascript" src="../assets/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap-datetimepicker.id.js"></script>
    <script type="text/javascript">
      $('.form_date').datetimepicker({
          language:  'id',
          weekStart: 1,
          todayBtn:  1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 2,
      minView: 2,
      forceParse: 0
      });
    </script>
  </body>
</html>