<?php ob_start(); ?>
<html>
<head>
	<title>Cetak PDF</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/sticky-footer-navbar.css" rel="stylesheet">
    <link href="../assets/css/navbar-static-top.css" rel="stylesheet">
	<style>
		table {
			border-collapse:collapse; 
			table-layout:fixed;width: 630px;
		}
		table td {
			word-wrap:break-word;
			width: 20%;
		}
	</style>
</head>
<body>
	
<h1 style="text-align: center;">Data Surat Masuk</h1>
<table border="1" width="100%">
<tr>
	
	<td width="25%">Jenis Surat</td>
	<td width="15%">Tanggal Terima</td>
	<td width="35%">No Surat</td>
	<td width="25%">Pengirim</td>
	<td width="25%">Perihal</td>
</tr>
<?php
// Load file koneksi.php
include "../lib/koneksi.php";
 
$query = "SELECT * FROM tbl_surat_masuk"; // Tampilkan semua data gambar
$sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
        echo "<tr>";
        echo "<td>".$data['jenis_surat']."</td>";
        echo "<td>".$data['tgl_terima']."</td>";
        echo "<td>".$data['no_surat']."</td>";
        echo "<td>".$data['pengirim']."</td>";
        echo "<td>".$data['perihal']."</td>";
        echo "</tr>";
    }
}else{ // Jika data tidak ada
    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
</table>

</body>

</html>
<?php
$html = ob_get_contents();
ob_end_clean();
        
require_once('html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Data Surat masuk.pdf', 'D');
?>
