<?php
$id_petugas = $_GET['id_petugas'];
include'.../koneksi.php';
$sql = "SELECT*FROM petugas WHERE id_petugas='$id_petugas'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>
<h5>Halaman Edit Data Petugas.</h5>
<a href="?url=petugas" class="btn btn-primary"> KEMBALI </a>
<hr>
<form method="post" action="?url=proses-edit&id_petugas=<?= $id_petugas; ?>">
      <div.class="form-group.mb-2">
      <div><label>Username</label>
        <input type="text" name="username" class="form-control"required>
    </div>
      <div.class="form-group.mb-2">
      <div><label>Password</label>
        <input type="text" name="password" class="form-control"required>
    </div>
    <div><label>Nama Petugas</label>
        <input type="text" name="nama_petugas" class="form-control"required>
    </div>
    <div class="form-group mb-2">
      <label>Level Petugas</lebel>
        <select name="level" class="from-control" required>
           <option value="<?= $data['level'] ?>" <?= $data['level'] ?> </option>
           <option value="admin"> Admin </option>
           <option value="petugas"> Petugas </option>
        </select>
    <div.class="form-group">
    <button type="submit" class="btn btn-success"> SIMPAN </button>
   <button type="reset" class="btn btn-warning"> KOSONGKAN </button>
</div>
</form>