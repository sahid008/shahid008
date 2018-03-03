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
    <link href="../assets/css/sticky-footer-navbar.css" rel="stylesheet">
    <link href="../assets/css/navbar-static-top.css" rel="stylesheet">
  </head>
  <body class="body">
  <?php
    include '../menu.php';
    $no_agenda_masuk = isset($_POST['no_agenda_masuk'])? $_POST['no_agenda_masuk'] : '';
  ?>
  <div class="container">
  <div class="row">
  <legend>Manajemen Data</legend>
  <p><a href="tambah-data-disposisi.php"><button type="button" class="btn btn-primary">Tambah Data</button></a></p>
  <div class="table-responsive ">
  <table class="table table-responsive table-bordered container well">
      <thead>
      <tr class="warning">
        <td width="5%"><label>No.</label></td>
        <td width="7%"><label>no disposisi</label></td>
        <td width="16%"><label>no agenda surat masuk</label></td>
        <td width="10%"><label>no surat</label></td>
        <td width="12%"><label>kepada</label></td>
        <td width="10%"><label>keterangan</label></td>
        <td width="10%"><label>status surat</label></td>
        <td width="10%"><label>tanggapan</label></td>
        <td width="15%"><label>Aksi</label></td>
      </tr>
      </thead>
    <tbody>
    <?php
        include '../lib/koneksi.php';
        $sql = "SELECT * FROM tbl_disposisi";
        $result = mysqli_query($conn, $sql);
        $i = 1;
        $rows = mysqli_num_rows($result);
        if ($rows == 0) {
          echo "<td colspan='11'>Data kosong. Silakan tambah data!</td>";
        } else {
          $No = 1;
          while ($data = mysqli_fetch_array($result)) {
    ?>
        <tr>
        <td><?php echo $No; ?></td>
        <td><?php echo $data['no_disposisi']; ?></td>
        <td><?php echo $data['no_agenda_masuk']; ?></td>
        <td><?php echo $data['no_surat']; ?></td>
        <td><?php echo $data['kepada']; ?></td>
        <td><?php echo $data['keterangan']; ?></td>
        <td><?php echo $data['status_surat']; ?></td>
        <td><?php echo $data['tanggapan']; ?></td>
        
        <td align="center">
        <a href="ubah-data-disposisi.php?no_disposisi=<?php echo $data['no_disposisi'];?>">
        <span class="btn btn-sm btn-warning glyphicon glyphicon-edit" aria-hidden="true" title="Ubah"><label>edit</label></span>
        </a>
        <a href="hapus-data-disposisi.php?no_disposisi=<?php echo $data['no_disposisi'];?>">
        <span class="btn btn-sm btn-success glyphicon glyphicon-trash" aria-hidden="true" title="Hapus"><label>hapus</label></span>
        </a>
        </td>
      </tr>
      <?php  
        $No++;
        }
      }
    ?>
    </tbody>
    </table>
  </div>
  </div>
  </div>

    <script src="../assets/js/jquery.js"></script>  
    <script src="../assets/js/bootstrap.min.js"></script>

    </script>
  </body>
   <footer class="footer" >
  <div class="container" align="center">
  <p><b>Aplikasi Surat dengan Bootstrap</b></p>
  <p><b>&copy; 2018 <a href="https://twitter.com/yunus" target="_blank">yunus.com</a></p>
  </div>
</footer>
  <style type="text/css">
    .body{
      background-color: #d4dffd;
    }
  </style>
</html>
