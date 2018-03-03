<?php
	if(!isset($_SESSION['nama_depan']) || !isset($_SESSION['password'])){
		header('location:login.php');
	}else{
		unset($_SESSION);
	}
?>