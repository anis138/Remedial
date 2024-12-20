<?php 

$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$id_kelas = $_POST['id_kelas'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$tahun = $_POST['tahun'];

include 'koneksi.php';
$sql = "INSERT INTO siswa(nisn,nis,id_kelas,alamat,no_telp,id_spp) VALUES('$nisn','$nis','$nama','$id_kelas','$alamat','$no_telp','$id_spp')";
$query = mysqli_query($koneksi, $sql);
if($query){
   header("location:?url=siswa");
}else{
    echo"<script>alert('maaf Data Tidak Tersimpan'); window.location.assign('?url=siswa');</script>";
}