<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="./styling.css">
  </head>
  <body>
    <header><h1>Daftar Calon Siswa</h1></header>
    <table border="3">
      <thead border="2">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Jenis Kelamin</th>
          <th>Agama</th>
          <th>Sekolah Asal</th>
          <th>Tindakan</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa["id"]."</td>";
            echo "<td>".$siswa["nama"]."</td>";
            echo "<td>".$siswa["alamat"]."</td>";
            echo "<td>".$siswa["jenis_kelamin"]."</td>";
            echo "<td>".$siswa["agama"]."</td>";
            echo "<td>".$siswa["sekolah_asal"]."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> |";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

      </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query)?></p>
    
  </body>
</html>