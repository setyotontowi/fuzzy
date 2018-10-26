<?php 
  include 'koneksi.php';

  $id = $_GET['id'];
  $query = mysqli_query($conn, "DELETE FROM rumah WHERE id = $id");
  $query2 = mysqli_query($conn, "DELETE FROM keanggotaan WHERE id = $id");

  if($query && $query2){
  	echo "<script>alert('data berhasil di hapus');</script>";
	echo "<meta http-equiv='refresh' content='0; url=data.php'>";
  }
  else{
  	echo "<script>alert('data gagal di hapus');</script>";
	echo "<meta http-equiv='refresh' content='0; url=data.php'>";
  }

 ?>