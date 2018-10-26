<?php 
	include 'koneksi.php';

	$query = mysqli_query($conn, "SELECT * FROM temp ORDER BY nr DESC");

	while($nr = mysqli_fetch_array($query, MYSQLI_BOTH)){
		echo "<pre>";
		echo "$nr[nama] = $nr[nr]";
		echo "</pre>";
	}
 ?>