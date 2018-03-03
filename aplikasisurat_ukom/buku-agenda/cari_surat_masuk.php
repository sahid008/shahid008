<html>
    <head>
        <title>Aplikasi Surat Ukom</title>
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/css/sticky-footer-navbar.css" rel="stylesheet">
        <link href="../assets/css/navbar-static-top.css" rel="stylesheet">
    </head>
    <body class="body">
    	<?php
    	include '../menu.php';

    	?>
        
        <?php
            //untuk koneksi ke database
            $Open = mysql_connect("localhost","root","");
                if (!$Open){
                die ("Koneksi ke Engine MySQL Gagal !");
                }
            $Koneksi = mysql_select_db("db_suratukom");
                if (!$Koneksi){
                die ("Koneksi ke Databalse Gagal !");
                }
        ?>
        <form action="cari_surat_masuk.php" method="post" name="postform">
	<div class="container well">
	<div class="blog-header" align="center">
        <h1 class="jumbotron">CARI AGENDA SURAT MASUK</h1>
    </div>  
    <div class="input" align="center">
    	<div class="form-group">
                <tr>
                    <td width="125"><b>Dari Tanggal</b></td>
                    <td colspan="2" width="190">: <input type="text" name="tanggal_awal" size="16" />
                    <a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal_awal);return false;" ><img src="calender/calbtn.gif" alt="" name="popcal" width="34" height="29" border="0" align="absmiddle" id="popcal" /></a>               
                    </td>
                    <td width="125"><b>Sampai Tanggal</b></td>
                    <td colspan="2" width="190">: <input type="text" name="tanggal_akhir" size="16" />
                    <a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal_akhir);return false;" ><img src="calender/calbtn.gif" alt="" name="popcal" width="34" height="29" border="0" align="absmiddle" id="popcal" /></a>              
                    </td>
                    <td colspan="2" width="190"><input class="btn btn-primary" type="submit" value="Pencarian Data" name="pencarian"/></td>
                    <!-- <td colspan="2" width="70"><input type="reset" value="Reset" /></td> -->
                </tr>
            </div>
            </div>
        </form><br />
        <p>
        <?php
            //proses jika sudah klik tombol pencarian data
            if(isset($_POST['pencarian'])){
            //menangkap nilai form
            $tanggal_awal=$_POST['tanggal_awal'];
            $tanggal_akhir=$_POST['tanggal_akhir'];
            if(empty($tanggal_awal) || empty($tanggal_akhir)){
            //jika data tanggal kosong
            ?>
            <script language="JavaScript">
                alert('Tanggal Awal dan Tanggal Akhir Harap di Isi!');
                document.location='cari_surat_masuk.php';
            </script>
            <?php
            }else{
            ?><i><b>Informasi : </b> Hasil pencarian data berdasarkan periode Tanggal <b><?php echo $_POST['tanggal_awal']?></b> s/d <b><?php echo $_POST['tanggal_akhir']?></b></i>
            <?php
            $query=mysql_query("select * from tbl_surat_masuk where tgl_terima between '$tanggal_awal' and '$tanggal_akhir'");
            }
        ?>
        </p>
        <table class="table table-bordered">
            <tr bgcolor="#f5bd5c">
                <td width="70" height="40">ID Surat</td>&nbsp;
                <td width="120">Jenis Surat</td>&nbsp;
                <td width="10">Tanggal Surat</td>&nbsp;
                <td width="170">No Surat</td>&nbsp;
                <td width="100">Pengirim</td>&nbsp; 
                <td width="70">Perihal</td>&nbsp;      
            </tr>
            <?php
            //menampilkan pencarian data
            while($row=mysql_fetch_array($query)){
            ?>
            <tr>
                <td align="center" height="30"><?php echo $row['no_agenda_masuk']; ?></td>
                <td align="center"><?php echo $row['jenis_surat'];?></td>
                <td align="center"><?php echo $row['tgl_terima'];?></td>
                <td align="center"><?php echo $row['no_surat'];?></td>
                <td align="center"><?php echo $row['pengirim'];?></td>
                <td align="center"><?php echo $row['perihal'];?></td>
            </tr>
            <?php
            }
            ?>
            </table>    
            <tr>
                <td colspan="4" align="center"> 
                <?php
                //jika pencarian data tidak ditemukan
                if(mysql_num_rows($query)==0){
                    echo "<font color=red><blink>Pencarian data tidak ditemukan!</blink></font>";
                }
                ?>
                </td>
            </tr> 
        

        <?php
        }
        else{
            unset($_POST['pencarian']);
        }
        ?>
        <iframe width=174 height=189 name="gToday:normal:calender/normal.js" id="gToday:normal:calender/normal.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;"></iframe>
    </body>
    <script src="../assets/js/jquery.js"></script>  
    <script src="../assets/js/bootstrap.min.js"></script>
    <style type="text/css">
    .body{
      background-color: #d4dffd;
    }
  </style>
</html>