<?php
session_start();
if ($_SESSION['status'] != 'login' ) {
  echo "<script>
  alert('Anda belum Login');
  location.href='../index.php';
  </script>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Galery Photo</title>
    <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="index.php">Website Galeri Photo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
      <div class="navbar-nav me-auto">
       <a href="album.php" class="nav-link">Album</a>
      </div>
      
      <a href="../config/aksi_logout.php" class="btn btn-outline-danger m-1">Keluar</a>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="card mt-2">
        <div class="card-header">Tambah Album</div>
        <div class="card-body">
          <form action="../config/aksi_album.php" method="POST">
            <label class="form-label">Nama Album</label>
            <input type="text" name="NamaAlbum" class="form-control" required>
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="Deskripsi" required></textarea>
            <button type="submit" class="btn btn-primary" name="tambah">Tambah Data</button>
          </form>
        </div>
      </div>
    </div>

    <div class="col-md-8">
      <div class="card mt-2">
        <div class="card-header">Data Album</div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Nama Album</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>

                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>



<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
    <p>&copy; UKK RPL 2024 | Farhan Lesmana</p>
</footer>


<script type="text/javascript" src="../asset/js/bootsrap.min.js"></script>
</body>
</html>