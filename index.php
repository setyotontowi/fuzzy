<!DOCTYPE html>
<html>
<head>
		<title>Penentuan Pembelian Rumah | Fuzzy Database</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="admin/bootstrap/css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="admin/dist/css/AdminLTE.css"/>
		<link rel="stylesheet" href="assets/css/main.css"/>

</head>
<body>
	<section id="header">
		<?php include "navbar.php" ?>
		<?php include 'koneksi.php'; ?>
	</section>

	<section class="container main">
		<div class="row content">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header">
						<h4 style="margin :5px; color: #fff">Input Kriteria</h4>
					</div>
					<div class="box-body">
						<form class="form-horizontal" action="coba2.php">
							<div class="form-group" method="get" >
								<label for='luas' class="col-sm-4 control-label">Luas Bangunan</label>
								<div class="col-sm-8">
									<select class="form-control" name="luas">
										<option value="" selected="">-Tidak Ada Pilihan-</option>
										<option value="Kecil">Kecil</option>
										<option value="Sedang">Sedang</option>
										<option value="Besar">Besar</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for='jarak' class="col-sm-4 control-label">Jarak Rumah Ke Kota</label>
								<div class="col-sm-8">
									<select class="form-control" name="jarak">
										<option value="" selected="">-Tidak Ada Pilihan-</option>
										<option value="Dekat">Dekat</option>
										<option value="Sedang">Sedang</option>
										<option value="Jauh">Jauh</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for='harga' class="col-sm-4 control-label">Harga Rumah</label>
								<div class="col-sm-8">
									<select class="form-control" name="harga">
										<option value="" selected="">-Tidak Ada Pilihan-</option>
										<option value="Murah">Murah</option>
										<option value="Sedang">Sedang</option>
										<option value="Mahal">Mahal</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for='cicilan' class="col-sm-4 control-label">Cicilan Rumah per Bulan</label>
								<div class="col-sm-8">
									<select class="form-control" name="cicilan">
										<option value="" selected="">-Tidak Ada Pilihan-</option>
										<option value="Sedikit">Sedikit</option>
										<option value="Sedang">Sedang</option>
										<option value="Banyak">Banyak</option>
									</select>
								</div>
							</div>
							<div style="float: right;">
								<input type="submit" name="submit" class="btn btn-primary" value="Cari">
							</div>
							
							
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header">
						<h4 style="margin :5px; color: #fff">Hasil</h4>
					</div>
					<div class="box-body">
						<table id="data" class="table-responsive" style="font-size: 14px;">
							<?php 
								$data = mysqli_query($conn, "SELECT * FROM rumah JOIN temp USING(id) ORDER BY nr DESC");
								$query = mysqli_query($conn, "SELECT * FROM temp JOIN rumah USING(id) ORDER BY nr DESC");
							 ?>
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Luas</th>
									<th>Jarak</th>
									<th>Harga</th>
									<th>Cicilan</th>
									<th>Alamat</th>
									<th>Telepon</th>
									<td>Nilai Rekomendasi</td>
								</tr>
							</thead>	
							<tbody>
								<?php 
									$i = 1;
									while ($listdata = mysqli_fetch_array($data, MYSQLI_BOTH)) {
										$rumah = mysqli_fetch_array($query, MYSQLI_BOTH);
										echo "
										<tr>
											<td><b>$i</b></td>
											<td><b>$listdata[nama]</b></td>
											<td><b>$rumah[luas]</b></td>
											<td><b>$rumah[jarak]</b></td>
											<td><b>$rumah[harga]</b></td>
											<td><b>$rumah[cicilan]</b></td>
											<td><b>$listdata[alamat]</b></td>
											<td><b>$listdata[telepon]</b></td>
											<td><b>$listdata[nr]</b></td>
										</tr>
										";

										$i += 1;
									}
								 ?>
							</tbody>						
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

			<script src="assets/js/jquery.min.js"></script>
			<script src="admin/bootstrap/js/bootstrap.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script src="admin/plugins/datatables/jquery.dataTables.min.js"></script>
			<script src="admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
			<script type="text/javascript">
			  $(function(){
			    $('#data').DataTable({
			      'paging' : true,
			      'searching' : true,
			      'info' : true
			    });

			  });
			</script>

</body>
</html>