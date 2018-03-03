<?php
	include '../lib/koneksi.php';
	$no_agenda_keluar = htmlentities(trim($_POST['no_agenda_keluar']));
	$id = htmlentities(trim($_POST['id']));
	$jenis_surat = htmlentities(trim($_POST['jenis_surat']));
	$tgl_kirim = htmlentities(trim($_POST['tgl_kirim']));
	$no_surat = htmlentities(trim($_POST['no_surat']));
	$pengirim = htmlentities(trim($_POST['pengirim']));
	$perihal = htmlentities(trim($_POST['perihal']));
	
	

	$sql = ("UPDATE tbl_surat_keluar SET no_agenda_keluar = '$no_agenda_keluar', id = '$id',  jenis_surat = '$jenis_surat', tgl_kirim = '$tgl_kirim', no_surat = '$no_surat', pengirim = '$pengirim', perihal = '$perihal'
		   WHERE no_agenda_keluar = '$no_agenda_keluar'") 
		or die(mysql_error());
	$result = mysqli_query($conn, $sql);	
	if ($result) {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Berhasil Diubah'); 
				window.location.href='data-surat-keluar.php';
			  </script>"; 
	} else {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Gagal di Edit'); 
				window.location.href='data-surat-keluar.php';
			  </script>"; 
	}
	header("location:data-surat-keluar.php");
?>