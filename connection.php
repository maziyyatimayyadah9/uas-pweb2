<?php
session_start();
$host = 'ec2-34-200-35-222.compute-1.amazonaws.com';
$port = '5432';
$user = 'xjyqwvqlvtijqz'; 
$password = '02b53c366d3d71bfe1617ff4deb9991227f9356ad7b025f0f8f30a7c8c711d97';
$db   = 'd7ittsc20rdpov';

$connection = pg_connect("host=$host port =$port dbname=$db user=$user password=$password");
// if($connection){
// echo 'Koneksi Berhasil';
// }
// else{
// echo 'Koneksi Gagal';
// }
?>