<?php
	include '../lib/koneksi.php';
	$no_disposisi = htmlentities(trim($_POST['no_disposisi']));
	$no_agenda_masuk = htmlentities(trim($_POST['no_agenda_masuk']));
	$no_surat = htmlentities(trim($_POST['no_surat']));
	$kepada = htmlentities(trim($_POST['kepada']));
	$keterangan = htmlentities(trim($_POST['keterangan']));
	$status_surat = htmlentities(trim($_POST['status_surat']));
	$tanggapan = htmlentities(trim($_POST['tanggapan']));
	

	$sql = ("INSERT INTO tbl_disposisi (no_disposisi, no_agenda_masuk, no_surat, kepada, keterangan, status_surat, tanggapan)VALUES ('$no_disposisi', '$no_agenda_masuk', '$no_surat', '$kepada', '$keterangan', '$status_surat','$tanggapan')") or die(mysql_error());
	$result = mysqli_query($conn, $sql);

	header("location: data-disposisi.php");
?>