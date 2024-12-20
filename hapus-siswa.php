<?php

$nisn = $_GET['nisn'];

include'koneksi.php';
$sql = "DELETE FROM kelas WHERE nisn='$nisn'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("location:?url=kelas");
}else{
    echo"<script>alert('Maaf Data Tidak Terhapus'); window.location.assign('?url=kelas');</script>";
} 