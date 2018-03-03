<?php
	include '../lib/koneksi.php';
	$no_disposisi = $_GET['no_disposisi'];


	$sql = "DELETE FROM tbl_disposisi WHERE no_disposisi = '$no_disposisi'";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Berhasil di Hapus'); 
				window.location.href='data-disposisi.php';
			  </script>"; 
	} else {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Gagal di Hapus'); 
				window.location.href='data-disposisi.php';
			  </script>"; 
	}
?>
