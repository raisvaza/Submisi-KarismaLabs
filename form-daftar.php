<!DOCTYPE html>
<html>
    <head>
        <title>Pendaftaran Siswa Baru</title>
        <link rel="stylesheet" type="text/css" href="./styling.css">
    </head>
    <body>
        <h2>Formulir Pendaftaran</h2>
        <form action="./proses-daftar.php" method="POST">
          <fieldset>
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" />
              </p>
                <label for="Alamat">Alamat:</label>
                <textarea name="alamat"></textarea>
              <p>
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
              </p>
              <p>
                  <label for="agama">Agama: </label>
                  <select name="agama">
                      <option>Islam</option>
                      <option>Kristen</option>
                      <option>Hindu</option>
                      <option>Budha</option>
                      <option>Atheis</option>
                  </select>
              </p>
              <p>
                  <label for="sekolah_asal">Sekolah Asal: </label>
                  <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
              </p>
              <p>
                  <input type="submit" value="Daftar" name="daftar" />
              </p>      
          </fieldset>
        </form>
    </body>
</html>