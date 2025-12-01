<?php
$host       ="localhost";
$user       ="root";
$pass       ="";
$db         ="companyrofil";

 $koneksi   = mysql_connect($host,$user,$pass,$db);
 $if($koneksi){
     die("Gagal terkoneksi");
}else{
    echo "koneksi berhasil";
} 