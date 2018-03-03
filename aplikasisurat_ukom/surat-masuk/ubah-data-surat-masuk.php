<?php
    include "../lib/koneksi.php";

    $no_agenda_masuk = htmlentities($_GET['no_agenda_masuk']);
    $sql = "SELECT * FROM tbl_surat_masuk WHERE no_agenda_masuk = '$no_agenda_masuk'";
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
      <legend>Ubah Data Surat masuk</legend>
        <form method="POST" action="perbarui-data-surat-masuk.php">
          <div class="form-group">
            <div class="input-group col-md-4">
            <label>No Agenda</label>
            <input type="text" name="no_agenda_masuk" value="<?php echo $data2['no_agenda_masuk']; ?>" class="form-control" id="no_agenda_masuk"></input>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group col-md-4">
            <label>Pilih Petugas</label>
            <select name="id" class="form-control">
            <option value="" selected="selected">id petugas</option>
                <?php
                  include '../lib/koneksi.php';
                  $sql = "SELECT * FROM tbl_petugas";
                  $result = mysqli_query($conn, $sql);
                  while($data=mysqli_fetch_array($result)){
                    echo "<option value=$data[id]>$data[id]</option>";
                  }
                ?>
            </select>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group col-md-4">
            <label>Jenis Surat</label>
            <input type="text" name="jenis_surat" value="<?php echo $data2['jenis_surat']; ?>" class="form-control" id="jenis_surat" required></input>
            </div>
          </div>
          <div class="form-group">
            <label>Tanggal Kirim</label>
              <div class="input-group date form_date col-md-4" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
              <input class="form-control" type="text" disabled="disabled">
              <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
              </div>
            <input type="hidden" id="dtp_input2" name="tgl_kirim" value="1994-08-04">
          </div>
          <div class="form-group">
            <label>Tanggal Terima</label>
              <div class="input-group date form_date col-md-4" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
              <input class="form-control" type="text" disabled="disabled">
              <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
              </div>
            <input type="hidden" id="dtp_input2" name="tgl_terima" value="1994-08-04">
          </div>
         
          <div class="form-group">
            <div class="input-group col-md-4">
            <label>pengirim</label>
            <input type="text" name="pengirim" value="<?php echo $data2['pengirim']; ?>" class="form-control" id="pengirim" required></input>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group col-md-4">
            <label>perihal</label>
           <textarea class="form-control" cols="40" rows="4" name="perihal"><?php echo "$data2[perihal]";?></textarea>
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