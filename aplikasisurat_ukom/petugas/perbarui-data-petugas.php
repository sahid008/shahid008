<?php
	include '../lib/koneksi.php';
	$id = htmlentities(trim($_POST['id']));
	$nama_depan = htmlentities(trim($_POST['nama_depan']));
	$nama_belakang = htmlentities(trim($_POST['nama_belakang']));
	$hak = htmlentities(trim($_POST['hak']));
	$password = htmlentities(trim($_POST['password']));
	

	$sql = ("UPDATE tbl_petugas SET id = '$id', nama_depan = '$nama_depan', 
		nama_belakang = '$nama_belakang',
        hak = '$hak',
		 password = '$password'  WHERE id = '$id'") 
		or die(mysql_error());
	$result = mysqli_query($conn, $sql);	
	if ($result) {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Berhasil Diubah'); 
				window.location.href='data-petugas.php';
			  </script>"; 
	} else {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Gagal di Edit'); 
				window.location.href='data-petugas.php';
			  </script>"; 
	}
	header("location:data-petugas.php");
?>