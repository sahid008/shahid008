<?php
	include '../lib/koneksi.php';
	$id = $_GET['id'];


	$sql = "DELETE FROM tbl_petugas WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Berhasil di Hapus'); 
				window.location.href='data-petugas.php';
			  </script>"; 
	} else {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Gagal di Hapus'); 
				window.location.href='data-petugas.php';
			  </script>"; 
	}
?>
