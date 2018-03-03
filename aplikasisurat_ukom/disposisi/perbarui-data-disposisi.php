<?php
	include '../lib/koneksi.php';
	$no_disposisi = htmlentities(trim($_POST['no_disposisi']));
	$no_agenda_masuk = htmlentities(trim($_POST['no_agenda_masuk']));
	$no_surat = htmlentities(trim($_POST['no_surat']));
	$kepada = htmlentities(trim($_POST['kepada']));
	$keterangan = htmlentities(trim($_POST['keterangan']));
	$status_surat = htmlentities(trim($_POST['status_surat']));
	$tanggapan = htmlentities(trim($_POST['tanggapan']));
	

	$sql = ("UPDATE tbl_disposisi SET no_disposisi = '$no_disposisi', 
		no_agenda_masuk = '$no_agenda_masuk', 
		no_surat = '$no_surat', 
		kepada = '$kepada',
        keterangan = '$keterangan',
		 status_surat = '$status_surat', tanggapan = '$tanggapan'  WHERE no_disposisi = '$no_disposisi'") 
		or die(mysql_error());
	$result = mysqli_query($conn, $sql);	
	if ($result) {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Berhasil Diubah'); 
				window.location.href='data-disposisi.php';
			  </script>"; 
	} else {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Gagal di Edit'); 
				window.location.href='data-disposisi.php';
			  </script>"; 
	}
	header("location:data-disposisi.php");
?>