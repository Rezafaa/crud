<?php 
// koneksi database
include 'inc/koneksi.php';
 
// menangkap data yang di kirim dari form
$id         = $_POST['id'];
$nama       = $_POST['nama'];
$nik        = $_POST['nik'];
$tgl        = $_POST['tgl'];
$tujuan     = $_POST['tujuan'];
$catatan    = $_POST['catatan'];

// update data ke database
mysqli_query($koneksi , "UPDATE catatan_perjalanan set nama='$nama', nik='$nik', tgl='$tgl', tujuan='$tujuan', catatan='$catatan' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:catatan.php");
 
?>b 