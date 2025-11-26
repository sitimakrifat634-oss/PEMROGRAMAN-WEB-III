<?php 
$server ="localhost";
$username ="root";
$password ="";
$database ="dbnonreg";
//perintah koneksii
$sambung=mysqli_connect("$server","$username","$password","$database");
//jika server tidak aktif
if(mysqli_connect_errno()){
    echo "Tidak Terhubung Ke Server !!!".
    mysqli_connect_error();
}
?>