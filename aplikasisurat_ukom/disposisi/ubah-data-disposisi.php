<?php
    include "../lib/koneksi.php";

    $no_disposisi = htmlentities($_GET['no_disposisi']);
    $sql = "SELECT * FROM tbl_disposisi WHERE no_disposisi = '$no_disposisi'";
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
      <legend>Ubah Data Disposisi</legend>
        <form method="POST" action="perbarui-data-disposisi.php">
          <div class="form-group">
            <div class="input-group col-md-5">
            <label>no disposisi</label>
            <input type="text" name="no_disposisi" value="<?php echo $data2['no_disposisi']; ?>" class="form-control" id="no_disposisi"></input>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group col-md-4">
            <label>Pilih No Agenda</label>
            <select name="no_agenda_masuk" class="form-control">
            <option value="" selected="selected">No Agenda</option>
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
            <div class="input-group col-md-4">
            <label>Pilih No Surat</label>
            <select name="no_surat" class="form-control">
            <option value="" selected="selected">No Surat</option>
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
          </div>
         <div class="form-group">
            <div class="input-group col-md-5">
            <label>kepada</label>
           <textarea class="form-control" cols="40" rows="5" name="kepada"><?php echo "$data2[kepada]";?></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group col-md-5">
            <label>keterangan</label>
            <input type="text" name="keterangan" value="<?php echo $data2['keterangan']; ?>" class="form-control" id="keterangan" required></input>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group col-md-5">
            <label>status_surat</label>
            <input type="text" name="status_surat" value="<?php echo $data2['status_surat']; ?>" class="form-control" id="status_surat" required></input>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group col-md-5">
            <label>tanggapan</label>
            <input type="text" name="tanggapan" value="<?php echo $data2['tanggapan']; ?>" class="form-control" id="tanggapan" required></input>
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