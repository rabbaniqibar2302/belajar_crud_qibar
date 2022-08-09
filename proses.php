<?php
//panggil dulu koneksi.php
include 'koneksi.php';

//ambil data yang ada di form tambah.php
$nama = $_POST['nama'];
$no_tlp = $_POST['no_tlp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$password = $_POST['password'];

//menginput data dari from ke database
$test = mysqli_query($conn, "insert into anggota values('','$nama','$no_tlp','$alamat','$email','$password')");

var_dump($test);
