<?php
include 'server.php';
$query = "SELECT * FROM tbl_mhs;";
$sql = mysqli_query($conn, $query);
$no = 1;
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
        margin: 50px auto;
        padding: 30px;
        border: 2px solid #2F4F4F;
        border-radius: 20px;
        box-sizing: border-box;
        position: relative;
      }
      table thead {
        background-color: #DAA520;
      }
      .btn {
        margin: 2px;
      }
    </style>
</head>
<body>
    <div class="container">
      <h1 class="text-center">Tabel Data Mahasiswa</h1>
      <br>
      <div class="table-responsive">
        <table class="table align-middle table-bordered table-hover text-center">
          <thead>
            <tr>
              <th>No.</th>
              <th>NIM</th>
              <th>Nama Mahasiswa</th>
              <th>Jenis Kelamin</th>
              <th>Alamat</th>
              <th>Kota</th>
              <th>Email</th>
              <th>Foto</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($result = mysqli_fetch_assoc($sql)) : ?>
            <tr>
              <td><?= $no++; ?>. </td>
              <td><?= $result['nim']; ?></td>
              <td><?= $result['namamhs']; ?></td>
              <td><?= $result['jk']; ?></td>
              <td><?= $result['alamat']; ?></td>
              <td><?= $result['kota']; ?></td>
              <td><?= $result['email']; ?></td>
              <td>
                <img src="img/<?= $result['foto']; ?>" style="width: 100px">
              </td>
              <td>
                <a href="kelola.php?ubah=<?= $result['id']; ?>" type="button" class="btn btn-success btn-sm">Ubah</a>
                <a href="proses.php?hapus=<?= $result['id']; ?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
              </td>
            </form>
          </td>
              <?php endwhile; ?>
            </tr>
          </tbody>
        </table>
        <a href="kelola.php" type="button" class="btn btn-success btn-sm">Tambah</a>
      </div>
    </div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
