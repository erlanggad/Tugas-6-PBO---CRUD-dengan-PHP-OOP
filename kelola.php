<?php
include 'server.php';
$id = '';
$nim = '';
$namamhs = '';
$jeniskelamin = '';
$alamat = '';
$kota = '';
$email = '';

if (isset($_GET['ubah']))
{
    $id = $_GET['ubah'];
    $query = "SELECT * FROM tbl_mhs WHERE id = '$id';";
    $sql = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($sql);

    $nim = $result['nim'];
    $namamhs = $result['namamhs'];
    $jeniskelamin = $result['jk'];
    $alamat = $result['alamat'];
    $kota = $result['kota'];
    $email = $result['email'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Tugas PBO CRUD OOP</title>
    <style>
      body {
        background-color: #F0FFFF;
      }
      .container {
        background-color: #EEE8AA;
        margin: 10px auto;
        padding: 30px;
        border: 2px solid #eaeaea;
        border-radius: 20px;
        box-sizing: border-box;
        position: relative;
      }
      img {
        position: absolute;
        right: 30px;
        top: 30px;
      }
    </style>
</head>
<body>
      <div class="container md">
        <h1 class="text-center">Form Input Data Mahasiswa</h1>
        <img src="img/logo.png" alt="" width="65px">
        <br>
        <form method="POST" action="proses.php" class="font-weight-bold">
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="mb-3 row">
                <label for="Nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="text" name="nim" class="form-control" id="Nim" placeholder="Input NIM Anda !" required value="<?php echo $nim; ?>">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="Namamhs" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                <div class="col-sm-10">
                    <input type="text" name="namamhs" class="form-control" id="Namamhs" placeholder="Input nama Anda !" required value="<?php echo $namamhs; ?>">
                </div>
            </div>

            <div class="mb-3 row">
            <label for="Jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <div class="form-check form-check-inline font-weight-normal">
                    <input class="form-check-input" type="radio" name="jk" id="laki-laki" required value="L" <?php if($jeniskelamin=="L") {
                        echo "checked=\"checked\" ";} ?>>
                    <label class="form-check-label" for="laki-laki">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline font-weight-normal">
                    <input class="form-check-input" type="radio" name="jk" id="perempuan" required value="P" <?php if($jeniskelamin=="P") {
                        echo "checked=\"checked\" ";} ?>>
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
            </div>
            </div>

            <div class="mb-3 row">
                <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text"  name="alamat" class="form-control" id="Alamat" placeholder="Input alamat Anda !" required value="<?php echo $alamat; ?>">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="Kota" class="col-sm-2 col-form-label">Kota</label>
                <div class="col-sm-10">
                    <input type="text" name="kota" class="form-control" id="Kota" placeholder="Input kota Anda!" required value="<?php echo $kota; ?>">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="Email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" name="email" class="form-control" id="Email" placeholder="Input email Anda !" required value="<?php echo $email; ?>">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="Foto" class="col-sm-2 col-form-label">Foto Mahasiswa</label>
                <div class="col-sm-10">
                  <input type="file" name="foto" class="form-control" id="Foto" required value="<?php echo $foto; ?>">
                </div>
            </div>

            <div class ="col">

                  <?php
            if (isset($_GET['ubah']))
            {
            ?>
                <button type="submit" name="submit" value="edit" class="btn btn-success btn-sm">Simpan</button>
                <?php
            }
            else
            {
            ?>
                <button type="submit" name="submit" value="add" class="btn btn-success btn-sm">Tambah</button>  
               <?php
            }
            ?>
                <a href="index.php" type="button" class="btn btn-danger btn-sm">Batal</a>
            </div>
        </form>

    <script src="js/bootstrap.min.js"></script>

</body>
</html>
