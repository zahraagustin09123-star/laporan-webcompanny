<?php include("inc_header.php") ?>
<?php
$judul = "";
$kutipan = "";
$isi = "";
$error = "";
$sukses = "";

if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $kutipan = $_POST['kutipan'];
    $isi = $_POST['isi'];

    if ($judul == '' or $isi == '') {
        $error = "Silahkan masukkan semua data yakni adalah data isi dan judul.";
    }

    if (empty($error)) {
        $sql1 = "INSERT INTO halaman(judul, kutipan, isi) 
             VALUES ('$judul', '$kutipan', '$isi')";

        $sq1 = mysqli_query($koneksi, $sql1);

        if ($sq1) {
            $sukses = "Sukses memasukkan data";
        } else {
            $error = "Gagal cuy masukkan data: " . mysqli_error($koneksi);
        }
    }

}
?>
<h1>Halaman Admin Input Data</h1>
<div class="mb-3 row">
    <a href="halaman.php">
        << Kembali Ke Halaman</a>
</div>
<?php
if ($error) {
    ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error ?>
    </div>
    <?php
}
?>
<?php
if ($sukses) {
    ?>
    <div class="alert alert-primary" role="alert">
        <?php echo $sukses ?>
    </div>
    <?php
}
?>
<form action="" method="post">
    <div class="mb-3 row">
        <label for="Judul" class="col-sm-2 col-form-label">Judul</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="Judul" value="<?php echo $judul ?>" name="judul">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="Kutipan" class="col-sm-2 col-form-label">Kutipan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="Kutipan" value="<?php echo $kutipan ?>" name="kutipan">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="Isi" class="col-sm-2 col-form-label">Isi</label>
        <div class="col-sm-10">
            <textarea name="isi" class="form-control" id="summernote"><?php echo $isi ?></textarea>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
        </div>
        </from>
        <?php include("inc_footer.php") ?>