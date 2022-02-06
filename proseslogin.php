<?php @session_start();
 //koneksi database
include ("admin/server.php");
$username = $_POST['NAMA_ADMIN'];
$password = $_POST['NO_HP'];
$query = "SELECT * FROM admin_tu WHERE NAMA_ADMIN='$username' and NO_HP='$password' ";
$hasil = oci_parse($koneksi,$query);
$data  = oci_execute($hasil,OCI_DEFAULT);

//Validasi Data dari form dengan database
if ($data >= 1)
 {
  $_SESSION['NAMA_ADMIN']=$username;
  header("location:admin/index.php");
 }
else
 {
  echo "<script type='text/javascript'>alert('Maaf! Data yang anda masukan tidak benar');document.location='login.php'</script>";
  }
?>