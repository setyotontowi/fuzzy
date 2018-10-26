<?php 
	include 'koneksi.php';

	$query = mysqli_query($conn, "SELECT * FROM rumah");

	$luas  = $_GET['luas'];
	$jarak = $_GET['jarak'];
	$harga = $_GET['harga'];
	$cicilan = $_GET['cicilan'];

	$query1 = mysqli_query($conn, "SELECT * FROM keanggotaan");
	$query2 = mysqli_query($conn, "SELECT * FROM keanggotaan");
	$query3 = mysqli_query($conn, "SELECT * FROM keanggotaan");
	$query4 = mysqli_query($conn, "SELECT * FROM keanggotaan");
	$rluas = array();
	$rjarak = array();
	$rharga = array();
	$rcicilan = array();

	$hehe = "TRUNCATE temp";
    $run_hehe = mysqli_query($conn, $hehe);

	// LUAS
	if($luas == 'Kecil'){
		$i = 0;
		while ($luas = mysqli_fetch_array($query1, MYSQLI_BOTH)) {
			$rluas[$i] = $luas['luas_kecil'];
			$i++;
		}
	}
	elseif($luas == 'Sedang'){
		$i = 0;
		while ($luas = mysqli_fetch_array($query1, MYSQLI_BOTH)) {
			$rluas[$i] = $luas['luas_sedang'];
			$i++;
		}
	}
	elseif($luas == 'Besar'){
		$i = 0;
		while ($luas = mysqli_fetch_array($query1, MYSQLI_BOTH)) {
			$rluas[$i] = $luas['luas_besar'];
			$i++;
		}
	}
	// echo "<pre>";
	// echo print_r($rluas);
	// echo "</pre>";

	// JARAK
	if($jarak == 'Dekat'){
		$i = 0;
		while ($jarak = mysqli_fetch_array($query2, MYSQLI_BOTH)) {
			$rjarak[$i] = $jarak['jarak_dekat'];
			$i++;
		}
	}
	elseif($jarak == 'Sedang'){
		$i = 0;
		while ($jarak = mysqli_fetch_array($query2, MYSQLI_BOTH)) {
			$rjarak[$i] = $jarak['jarak_sedang'];
			$i++;
		}
	}
	elseif ($jarak == 'Jauh') {
		$i = 0;
		while ($jarak = mysqli_fetch_array($query2, MYSQLI_BOTH)) {
			$rjarak[$i] = $jarak['jarak_jauh'];
			$i++;
		}
	}
	// echo "<pre>";
	// echo print_r($rjarak);
	// echo "</pre>";

	//HARGA
	if($harga == 'Murah'){
		$i = 0;
		while ($harga = mysqli_fetch_array($query3, MYSQLI_BOTH)) {
			$rharga[$i] = $harga['harga_murah'];
			$i++;
		}
	}
	elseif ($harga == 'Sedang') {
		$i = 0;
		while ($harga = mysqli_fetch_array($query3, MYSQLI_BOTH)) {
			$rharga[$i] = $harga['harga_sedang'];
			$i++;
		}
	}
	elseif($harga == 'Mahal'){
		$i = 0;
		while ($harga = mysqli_fetch_array($query3, MYSQLI_BOTH)) {
			$rharga[$i] = $harga['harga_mahal'];
			$i++;
		}
	}
	// echo "<pre>";
	// echo print_r($rharga);
	// echo "</pre>";


	//CICILAN
	if ($cicilan == 'Sedikit') {
		$i = 0;
		while ($cicilan = mysqli_fetch_array($query4, MYSQLI_BOTH)) {
			$rcicilan[$i] = $cicilan['cicilan_sedikit'];
			$i++;
		}
	}
	elseif ($cicilan == 'Sedang') {
		$i = 0;
		while ($cicilan = mysqli_fetch_array($query4, MYSQLI_BOTH)) {
			$rcicilan[$i] = $cicilan['cicilan_sedang'];
			$i++;
		}
	}
	elseif ($cicilan == 'Banyak') {
		$i = 0;
		while ($cicilan = mysqli_fetch_array($query4, MYSQLI_BOTH)) {
			$rcicilan[$i] = $cicilan['cicilan_banyak'];
			$i++;
		}
	}
	// echo "<pre>";
	// echo print_r($rcicilan);
	// echo "</pre>";

	$j = 0;
	while ($rumah = mysqli_fetch_array($query, MYSQLI_BOTH)) {
		$nr = ($rluas[$j] + $rjarak[$j] + $rharga[$j] + $rcicilan[$j])/4;

		$ins = mysqli_query($conn, "INSERT INTO temp VALUES('$rumah[id]','$rumah[nama]', $rluas[$j], $rjarak[$j], $rharga[$j], $rcicilan[$j], $nr)"); 
		if($ins){
				echo "berhasil";
		}
		else{
				echo "die";
		}
		$j++;
	}

	echo "
		<script>location.href = 'index.php';</script>
	";



 ?>