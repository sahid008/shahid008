
<?php
$server		= "localhost";
$nama_depan	= "root";
$pass		= "";
$db			= "db_suratukom";

mysql_connect($server,$nama_depan,$pass) or die ("Koneksi Gagal");
mysql_select_db($db) or die ("Database tidak bisa dibuka");

if(isset($_POST['login'])){
	$nama_depan = $_POST['nama_depan'];
	$password = $_POST['password'];
	$sql	  = mysql_query("SELECT * FROM tbl_petugas WHERE nama_depan = '$nama_depan' && password = '$password'");
	$num	  = mysql_num_rows($sql);
	
	if($num == 1){
		$_SESSION['nama_depan'] = $nama_depan;
		$_SESSION['password'] = $password;
		
		header('location:index.php');
	}else{
		//echo "Tidak bisa Login";
		header('location:login.php');
	}
}
?>