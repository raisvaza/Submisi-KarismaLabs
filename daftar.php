<!DOCTYPE html>

<html>
  <head>
    <title>Pendaftaran Siswa</title>
    <link rel="stylesheet" type="text/css" href="./styling.css">
  </head>
  <body>
    <h1>Pendaftaran Siswa</h1>
    <h3>SMA PGII 1 Bandung Tahun Ajaran 2020/2021</h3>
    <p><a href="./form-daftar.php">Daftar</a> | <a href="./list-siswa.php">List Calon Siswa</a></p>

    <?php if(isset($_GET['status'])): ?> 
    <p>
    <?php
        if($_GET['status'] == 'sukses'){
            echo "Pendaftaran siswa baru berhasil!";
        } else {
            echo "Pendaftaran gagal!";
        }
    ?>
    </p>
    <?php endif; ?>
</body>
</html>

<?php


