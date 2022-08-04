<?php
//belajar koneksi database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_perpusweb";

//membuat koneksi
$connect = mysqli_connect($servername,$username,$password,$database);

//cek koneksi
if(!$connect){
    echo die("wakwaww tak koneq : " . mysqli_connect_error());
}else{
    echo "siko bagi duo koneq";
    mysqli_close($connect);
}
