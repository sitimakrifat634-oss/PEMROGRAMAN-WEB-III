<?php 
//koneksi
include "connectdb.php";
//ambil data dari form
$namatamu   =mysqli_real_escape_string($sambung, $_POST["namatamu"]);
$hptamu     =mysqli_real_escape_string($sambung, $_POST["hptamu"]);
$emailtamu  =mysqli_real_escape_string($sambung, $_POST["emailtamu"]);
$alamattamu =mysqli_real_escape_string($sambung, $_POST["alamattamu"]);

//echo $namatamu.'-'.$hptamu.'-'.$emailtamu.'-'.$alamattamu;
//prosessimpan data tabel tamu
$simpan=mysqli_query($sambung,"INSERT INTO tamu(namatamu,hptamu,emailtamu,alamattamu) VALUES ('$namatamu','$hptamu','$emailtamu','$alamattamu')");
//pindah halaman
echo "<script>alert('Data Berhasil disimpan');document.location='tampiltamu.php';</script>";
?>