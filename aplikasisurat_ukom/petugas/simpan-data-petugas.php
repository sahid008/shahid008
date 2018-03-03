<?php
	include '../lib/koneksi.php';
	$id = htmlentities(trim($_POST['id']));
	$nama_depan = htmlentities(trim($_POST['nama_depan']));
	$nama_belakang = htmlentities(trim($_POST['nama_belakang']));
	$hak = htmlentities(trim($_POST['hak']));
	$password = htmlentities(trim($_POST['password']));
	

	$sql = ("INSERT INTO tbl_petugas (id, nama_depan, nama_belakang, hak, password)VALUES ('$id', '$nama_depan', '$nama_belakang', '$hak', '$password')") or die(mysql_error());
	$result = mysqli_query($conn, $sql);

	header("location: data-petugas.php");
?>