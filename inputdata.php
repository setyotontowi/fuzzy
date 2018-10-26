<?php  
	include 'koneksi.php';

	$nama 		= $_GET['nama'];
	$luas 		= $_GET['luas'];
	$jarak 		= $_GET['jarak'];
	$harga 		= $_GET['harga'];
	$cicilan 	= $_GET['cicilan'];
	$alamat 	= $_GET['alamat'];
	$telepon	= $_GET['telepon'];


	if(empty($nama) || empty($luas) || empty($jarak) || empty($harga) || empty($cicilan) || empty($alamat) || empty($telepon)){
		echo "<script>alert('Fields Empty!');
	 	location.href = 'data.php';
		</script>";
		
	}
	else {

	$inp	= mysqli_query($conn, "INSERT into rumah(nama, luas, jarak, harga, cicilan, alamat, telepon) VALUES('$nama', '$luas', '$jarak', '$harga', '$cicilan', '$alamat', '$telepon')");

	$max 	= mysqli_query($conn, "SELECT max(id) id, nama FROM rumah WHERE id = (SELECT max(id) FROM rumah)");
	$rumah  = mysqli_fetch_array($max, MYSQLI_BOTH);


		$count_lkecil = 0;
		$count_lsedang = 0;
		$count_lbesar = 0;
		$count_jdekat = 0;
		$count_jsedang = 0;
		$count_jjauh = 0;
		$count_hmurah = 0;
		$count_hsedang = 0;
		$count_hmahal = 0;
		$count_csedikit = 0;
		$count_csedang = 0;
		$count_cbanyak = 0;

			for($i = 1; $i < 5; $i++){

				$datas = mysqli_query($conn, "SELECT * FROM kriteria WHERE id = $i");
				$data = mysqli_fetch_array($datas);

				if($i == 1){
					echo "HARGA <br>";
					if($harga > $data['s_b'] && $harga < $data['e_b']){
						$count_hmurah = ($data['e_b'] - $harga)/($data['e_b'] - $data['s_b']);
						echo "murah = $count_hmurah ";
					}
					if($harga > $data['s_sb'] && $harga < $data['e_sb']){
						$count_hsedang = ($harga - $data['s_sb'])/($data['e_sb'] - $data['s_sb']);
						echo "sedang = $count_hsedang ";
					}
					if($harga > $data['s_sa'] && $harga < $data['e_sa']){
						$count_hsedang = ($data['e_sa'] - $harga)/($data['e_sa'] - $data['s_sa']);
						echo "sedang = $count_hsedang ";
					}
					if($harga > $data['s_a'] && $harga < $data['e_a']){
						$count_hmahal = ($harga - $data['s_a'])/($data['e_a'] - $data['s_a']);
						echo "mahal = $count_hmahal ";
					}
					if($harga == $data['e_sb']){
						$count_hsedang = 1;
						echo "sedang = $count_hsedang ";
					}
					if($harga <= $data['s_b']){
						$count_hmurah = 1;
						echo "murah = $count_hmurah ";
					}
					if($harga >= $data['e_a']){
						$count_hmahal = 1;
						echo "mahal = $count_hmahal ";
					}
					echo "<br>";
				}
				else if($i == 2){
					echo "LUAS <br>";
					if($luas > $data['s_b'] && $luas < $data['e_b']){
						$count_lkecil = ($data['e_b'] - $luas)/($data['e_b'] - $data['s_b']);
						echo "kecil = $count_lkecil ";
					}
					if($luas > $data['s_sb'] && $luas < $data['e_sb']){
						$count_lsedang = ($luas - $data['s_sb'])/($data['e_sb'] - $data['s_sb']);
						echo "sedang = $count_lsedang ";
					}
					if($luas > $data['s_sa'] && $luas < $data['e_sa']){
						$count_lsedang = ($data['e_sa'] - $luas)/($data['e_sa'] - $data['s_sa']);
						echo "sedang = $count_lsedang ";
					}
					if($luas > $data['s_a'] && $luas < $data['e_a']){
						$count_lbesar = ($luas - $data['s_a'])/($data['e_a'] - $data['s_a']);
						echo "besar = $count_lbesar ";
					}
					if($luas == $data['e_sb']){
						$count_lsedang = 1;
						echo "sedang = $count_lsedang ";
					}
					if($luas <= $data['s_b']){
						$count_lkecil = 1;
						echo "kecil = $count_lkecil ";
					}
					if($luas >= $data['e_a']){
						$count_lbesar = 1;
						echo "besar = $count_lbesar ";
					}
					echo "<br>";
				}
				else if($i == 3){
					echo "JARAK <br>";
					if($jarak > $data['s_b'] && $jarak < $data['e_b']){
						$count_jdekat = ($data['e_b'] - $jarak)/($data['e_b'] - $data['s_b']);
						echo "dekat = $count_jdekat ";
					}
					if($jarak > $data['s_sb'] && $jarak < $data['e_sb']){
						$count_jsedang = ($jarak - $data['s_sb'])/($data['e_sb'] - $data['s_sb']);
						echo "sedang = $count_jsedang ";
					}
					if($jarak > $data['s_sa'] && $jarak < $data['e_sa']){
						$count_jsedang = ($data['e_sa'] - $jarak)/($data['e_sa'] - $data['s_sa']);
						echo "sedang = $count_jsedang ";
					}
					if($jarak > $data['s_a'] && $jarak < $data['e_a']){
						$count_jjauh = ($jarak - $data['s_a'])/($data['e_a'] - $data['s_a']);
						echo "jauh = $count_jjauh ";
					}
					if($jarak == $data['e_sb']){
						$count_jsedang = 1;
						echo "sedang = $count_jsedang";
					}
					if($jarak <= $data['s_b']){
						$count_jdekat = 1;
						echo "dekat = $count_jdekat ";
					}
					if($jarak >= $data['e_a']){
						$count_jjauh = 1;
						echo "jauh = $count_jjauh ";
					}
					echo "<br>";
				}
				else if($i == 4){
					echo "CICILAN <br>";
					if($cicilan > $data['s_b'] && $cicilan< $data['e_b']){
						$count_csedikit = ($data['e_b'] - $cicilan)/($data['e_b'] - $data['s_b']);
						echo "sedikit = $count_csedikit ";
					}
					if($cicilan > $data['s_sb'] && $cicilan < $data['e_sb']){
						$count_csedang = ($cicilan - $data['s_sb'])/($data['e_sb'] - $data['s_sb']);
						echo "sedang = $count_csedang ";
					}
					if($cicilan > $data['s_sa'] && $cicilan < $data['e_sa']){
						$count_csedang = ($data['e_sa'] - $cicilan)/($data['e_sa'] - $data['s_sa']);
						echo "sedang = $count_csedang ";
					}
					if($cicilan > $data['s_a'] && $cicilan < $data['e_a']){
						$count_cbanyak = ($cicilan - $data['s_a'])/($data['e_a'] - $data['s_a']);
						echo "besar = $count_cbanyak ";
					}
					if($cicilan == $data['e_sb']){
						$count_csedang = 1;
						echo "sedang = $count_csedang ";
					}
					if($cicilan <= $data['s_b']){
						$count_csedikit = 1;
						echo "sedikit = $count_csedikit ";
					}
					if($cicilan >= $data['e_a']){
						$count_cbanyak = 1;
						echo "besar = $count_cbanyak ";
					}
					echo "<br>";
				}

			}

			$insert = mysqli_query($conn, "INSERT into keanggotaan
				VALUES('$rumah[id]', '$rumah[nama]', $count_lkecil, $count_lsedang, $count_lbesar, $count_jdekat, $count_jsedang, $count_jjauh, $count_hmurah, $count_hsedang, $count_hmahal, $count_csedikit, $count_csedang, $count_cbanyak)");

			if($insert){
				echo "<script>alert('data berhasil disimpan');
				location.href = 'data.php'
				</script>";			
			}
			else{
				echo "<script>alert('Maaf, data gagal disimpan');</script>";
			}
		}

?>