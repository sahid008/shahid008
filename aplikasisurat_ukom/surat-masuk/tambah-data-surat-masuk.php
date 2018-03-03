<?php
  include "../lib/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 12 meta tags *must* come first in the head; any other head content must come *after* these tags -->
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
      <div class="input-group md-col-12">
      <legend>Entri Data Surat masuk</legend>
        <form method="POST" action="simpan-data-surat-masuk.php">
          <div class="form-group">
            <div class="input-group col-md-12">
            <label>No Agenda</label>
            <input type="text" name="no_agenda_masuk" class="form-control" id="no_agenda_masuk" placeholder="no agenda" required></input>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group col-md-12">
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
            <div class="input-group col-md-12">
            <label>jenis surat</label>
            <input type="text" name="jenis_surat" class="form-control" id="jenis_surat" placeholder="jenis surat" required></input>
            </div>
          </div>
          <div class="form-group">
            <label>tanggal kirim</label>
              <div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="tgl_kirim" data-link-format="yyyy-mm-dd">
              <input class="form-control" type="text" disabled="disabled" placeholder="Tanggal kirim">
              <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
              </div>
            <input type="hidden" id="tgl_kirim" name="tgl_kirim" value="tgl_kirim" placeholder="Tanggal kirim">
          </div>
          <div class="form-group">
            <label>tanggal terima</label>
              <div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="tgl_terima" data-link-format="yyyy-mm-dd">
              <input class="form-control" type="text" disabled="disabled" placeholder="Tanggal surat">
              <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
              </div>
            <input type="hidden" id="tgl_terima" name="tgl_terima" value="tgl_terima" placeholder="Tanggal terima">
          </div>   
          <div class="form-group">
            <div class="input-group col-md-12">
            <label>Nomor Surat</label>
            <input type="text" name="no_surat" class="form-control" id="no_surat" placeholder="Nomor Surat" required></input>
            </div>
          </div>
          
          
          <div class="form-group">
            <div class="input-group col-md-12">
            <label>pengirim</label>
            <input type="text" name="pengirim" class="form-control" id="pengirim" placeholder="pengirim" required></input>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group col-md-12">
            <label>perihal</label>
            <textarea type="text" name="perihal" class="form-control" id="perihal" placeholder="perihal"></textarea>
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
  <style type="text/css">
    .body{
      align-content: center;
    }
  </style>
</html>