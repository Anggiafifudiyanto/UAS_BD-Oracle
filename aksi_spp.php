<?php
include("koneksi.php");
$hari_ini = date("dmY");

$act=$_GET['act'];

if ($act=='input'){

echo	$ID_SISWA = $_POST['ID_SISWA'];
echo	$ID_KELAS = $_POST['ID_KELAS'];
echo	$ID_ADMIN = $_POST['ID_ADMIN'];
echo	$BULAN = $_POST['BULAN'];
echo	$JUMLAH = $_POST['JUMLAH'];
echo	$TGLBAYAR = $_POST['TGLBAYAR'];

	$sql = "INSERT INTO transaksi VALUES ('','$ID_SISWA', '$ID_KELAS', '$ID_ADMIN', '$BULAN', '$JUMLAH', '$TGLBAYAR')";
	$prepare = ociparse($koneksi, $sql);
    ociexecute($prepare);
    oci_commit($koneksi);
   

	if($prepare)
	{
	header('location:laporan.php');
	}
	else {echo "gagal";} 

}

?>
