<?php
	include '../lib/koneksi.php';
	$no_agenda_keluar = $_GET['no_agenda_keluar'];


	$sql = "DELETE FROM tbl_surat_keluar WHERE no_agenda_keluar = '$no_agenda_keluar'";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Berhasil di Hapus'); 
				window.location.href='data-surat-keluar.php';
			  </script>"; 
	} else {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Gagal di Hapus'); 
				window.location.href='data-surat-keluar.php';
			  </script>"; 
	}
?>
