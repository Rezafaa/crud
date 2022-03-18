<?php
include "inc/koneksi.php";

$id         = $_POST['id'];
$nama       = $_POST['nama'];
$nik        = $_POST['nik'];
$tgl        = $_POST['tgl'];
$tujuan     = $_POST['tujuan'];
$catatan    = $_POST['catatan'];

$sql = "INSERT INTO `catatan_perjalanan` (`id`,`nama`,`nik`,`tgl`,`tujuan`,`catatan`)
VALUES ('$id','$nama','$nik','$tgl','$tujuan','$catatan');";

$result = $koneksi->query($sql);
if ($result) {
    header("location: catatan.php");

} else {
    echo "not found";
}

$koneksi->close(); 