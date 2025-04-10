<?php 
$hostname= 'localhost'; 
$username= 'root'; 
$password=''; 
$database_name ='db_inventory_roni'; 

$conn = mysqli_connect($hostname, $username, $password, $database_name); 

if(!$conn){ 
die("Koneksi Gagal : " . mysqli_connect_error()); 
}