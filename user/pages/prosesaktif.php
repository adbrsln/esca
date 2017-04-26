<?php session_start();?>
<?php require "check.php";?>
<?php
$kelulusan = $_POST['kelulusan'];
$tujuan = $_POST['tujuan'];
$lokasi = $_POST['lokasi'];
$lokasi2 = $_POST['lokasi2'];
$tindakan = $_POST['Tindakan'];
$status = $_POST['status'];
$nama = $_SESSION['nama'];



$aktif  = date('d/m/Y H:i:s');
$nyahaktif = date('d/m/Y H:i:s');
$jenisplan
//


if $nyahaktif = "" {
$querynyahaktif = "UPDATE transaksi set nyahaktif ='$nyahaktif',status = '$status' 		
		WHERE id_pengguna = $nama";

		mysql_query($query) or die('Error: ' . mysql_error());
$queryaktif = "FLUSH PRIVILEGES";
}

else {
$queryaktif = "INSERT INTO transaksi (id_pengguna,lulus,aktif,tujuan,lokasi,lokasi2,plan_type,status,) 		
		VALUES ('$nama','$kelulusan','$aktif','$tujuan','$lokasi','$lokasi2','$tindakan','$status')";

		mysql_query($query) or die('Error: ' . mysql_error());
$queryaktif = "FLUSH PRIVILEGES";

}




?>