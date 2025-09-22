<?php

$host="localhost";
$nama_database="tb";
$username_database="root";
$password_database="";


$koneksi = mysqli_connect($host,$username_database,$password_database,$nama_database);

if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}


?>