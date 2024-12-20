<?php
$id_petugas = $_GET['id_petugas'];
include'.../koneksi.php';
$sql = "SELECT*FROM petugas WHERE id_petugas='$id_petugas'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>
<h5>Halaman edit data Siswa.</h5>
<a href="?url=siswa" class="btn btn-primary"> KEMBALI </a>
<hr>
<form method="post" action="?url=proses-edit-siswa&nisn=<?= $nisn; ?>">">
    <div class="form-group mb-2">
        <label>NISN</label>
        <input value="<?= $data['nisn'] ?>" readonly type="number" name="nisn" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <tabel>NIS</label>
        <input value="<?= $data['nis'] ?>" type="number" name="nis" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <tabel>Nama</label>
        <input value="<?= $data['nama'] ?>" type="text" name="nama" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>kelas</label>
        <select name="id_kelas" class="form-control" required>
            <option value="<?= $data['id_kelas'] ?> <?= $data['nama_kelas'] ?> </option>
            <?php
            include'../koneksi.php';
            $kelas = mysqli_query($koneksi,"SELECT*FROM kelas ORDER BY nama_kelas ASC");
            foreach($kelas as $data_kelas){
            ?>
            <option value="<?= $data_kelas['id_kelas'] ?>"> <?= $data_kelas['nama_kelas']; ?> </option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group mb-2">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control" required><?= $data['alamat'] ?></textarea>
    </div>
    <div class="form-group mb-2">
    <label>No Telepon</label>
    <input value="<?= $data['no_telp'] ?>" type="number" name="no_telp" class="form-control" required>
    <div class="form-group mb-2">
        <label>SPP</label>
        <select name="id_kelas" class="form-control" required>
             <option value="<?= $data_spp['id_spp'] ?>"> <?= $data['tahun']; ?> | <?= number_format($data['nominal'],2,',','.'); ?> </option>
            <?php
            include'../koneksi.php';
            $spp = mysqli_query($koneksi,"SELECT*FROM spp ORDER BY nama_spp ASC");
            foreach($spp as $data_spp){
            ?>
            <option value="<?= $data_spp['id_spp'] ?>"> <?= $data_spp['nama_spp']; ?> | <?= number_format($data_spp['nominal'],2,',','.'); ?> </option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success"> SIMPAN </button>
        <button type="reset" class="btn btn-warning"> KOSONGKAN </button>
    </div>
</form>