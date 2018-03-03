<?php
	include '../lib/koneksi.php';
	$no_agenda_keluar = htmlentities(trim($_POST['no_agenda_keluar']));
	$id = htmlentities(trim($_POST['id']));
	$jenis_surat = htmlentities(trim($_POST['jenis_surat']));
	$tgl_kirim = htmlentities(trim($_POST['tgl_kirim']));
	$no_surat = htmlentities(trim($_POST['no_surat']));
	$pengirim = htmlentities(trim($_POST['pengirim']));
	$perihal = htmlentities(trim($_POST['perihal']));
		
		

	$sql = ("INSERT INTO tbl_surat_keluar (no_agenda_keluar, id, jenis_surat,  tgl_kirim, no_surat, pengirim, perihal)VALUES ('$no_agenda_keluar', '$id', '$jenis_surat','$tgl_kirim','$no_surat','$pengirim','$perihal')") or die(mysql_error());
	$result = mysqli_query($conn, $sql);

	header("location: data-surat-keluar.php");
?>