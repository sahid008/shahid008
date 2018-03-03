<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Aplikasi Surat keluar</title>

    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/sticky-footer-navbar.css" rel="stylesheet">
    <link href="../assets/css/navbar-static-top.css" rel="stylesheet">
  </head>
  <body class="body">
  <?php
    include '../menu.php';
    $id = isset($_POST['id'])? $_POST['id'] : '';
  ?>
  <div class="container">
  <div class="row">
  <legend>Manajemen Data</legend>
  <p><a href="tambah-data-surat-keluar.php"><button type="button" class="btn btn-primary">Tambah Data</button></a></p>
  <div class="table-responsive ">
  <table class="table table-responsive table-bordered container well">
      <thead>
      <tr class="warning">
        <td width="5%"><label>No.</label></td>
        <td width="7%"><label>No Agenda</label></td>
        <td width="5%"><label>Id Petugas</label></td>
        <td width="10%"><label>Jenis Surat</label></td>
        <td width="10%"><label>Tanggal Kirim</label></td>
        <td width="7%"><label>No Surat</label></td>
        <td width="12%"><label>Pengirim</label></td>
        <td width="10%"><label>Perihal</label></td>      
        <td width="15%"><label>Aksi</label></td>
      </tr>
      </thead>
    <tbody>
    <?php
        include '../lib/koneksi.php';
        $sql = "SELECT * FROM tbl_surat_keluar";
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
        <td><?php echo $data['no_agenda_keluar']; ?></td>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['jenis_surat']; ?></td>
        <td><?php echo $data['tgl_kirim']; ?></td>
        <td><?php echo $data['no_surat']; ?></td>
        <td><?php echo $data['pengirim']; ?></td>
        <td><?php echo $data['perihal']; ?></td>    
        <td align="center">
        <a href="ubah-data-surat-keluar.php?no_agenda_keluar=<?php echo $data['no_agenda_keluar'];?>">
        <span class="btn btn-sm btn-warning glyphicon glyphicon-edit" aria-hidden="true" title="Ubah"><label>edit</label></span>
        </a>
        <a href="hapus-data-surat-keluar.php?no_agenda_keluar=<?php echo $data['no_agenda_keluar'];?>">
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
