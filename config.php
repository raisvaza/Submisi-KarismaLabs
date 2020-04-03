<?php

$server = "localhost";
$user = "id13084350_raisvaza";
$pass = "Kucingrumah12!";
$nama_database = "id13084350_pendaftaran_siswa";

$db = mysqli_connect($server, $user, $pass, $nama_database);

if(!$db){
    die("Gagal Terhubung dengan database: ".mysqli_connect_error());
}

?>