<?php

$koneksi = mysqli_connect('localhost','root','','ukk');

if(!$koneksi){
    echo"Koneksi Anda Gagal";
}