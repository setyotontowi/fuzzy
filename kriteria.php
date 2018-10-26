<!DOCTYPE html>
<html>
<head>
		<title>Penentuan Pembelian Rumah | Fuzzy Database</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" type="text/css" href="admin/bootstrap/css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="admin/dist/css/AdminLTE.css"/>
		<link rel="stylesheet" href="assets/css/main.css"/>
</head>
<body>
	<?php 
	include 'koneksi.php';
	$data = mysqli_query($conn, "SELECT * FROM keanggotaan");
	$data2 = mysqli_query($conn, "SELECT * FROM keanggotaan");
	$data3 = mysqli_query($conn, "SELECT * FROM keanggotaan");
	$data4 = mysqli_query($conn, "SELECT * FROM keanggotaan");
	


	?>
	<section id="header">
		<?php include "navbar.php" ?>
	</section>

	<section class="container main">
		<div class="row content">
			<div class="col-md-6">
				<div class="box box-info">
					<div class="box-header">
						<h4 style="margin :5px; color: #fff">Derajat Keanggotaan Luas</h4>
					</div>
					<div class="box-body" style="font-size: 14px; color=black">
						<table id="data" class="table-responsive" >
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Kecil</th>
									<th>Sedang</th>
									<th>Besar</th>
								</tr>
							</thead>	
							<tbody>
								<?php 
									$i = 1;
									while ($listdata = mysqli_fetch_array($data, MYSQLI_BOTH)) {
										echo "
										<tr>
											<td>$i</td>
											<td><b>$listdata[nama]</b></td>
											<td>$listdata[luas_kecil]</td>
											<td>$listdata[luas_sedang]</td>
											<td>$listdata[luas_besar]</td>
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
			<div class="col-md-6">
				<div class="box box-info">
					<div class="box-header">
						<h4 style="margin :5px; color: #fff">Derajat Keanggotaan Jarak</h4>
					</div>
					<div class="box-body" style="font-size: 14px; color=black">
						<table id="data2" class="table-responsive">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Dekat</th>
									<th>Sedang</th>
									<th>Jauh</th>
								</tr>
							</thead>	
							<tbody>
								<?php 
									$j = 1;
									while ($listdata = mysqli_fetch_array($data2, MYSQLI_BOTH)) {
										echo "
										<tr>
											<td>$j</td>
											<td><b>$listdata[nama]</b></td>
											<td>$listdata[jarak_dekat]</td>
											<td>$listdata[jarak_sedang]</td>
											<td>$listdata[jarak_jauh]</td>
										</tr>
										";

										$j += 1;
									}
								 ?>
							</tbody>						
						</table>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="box box-info">
					<div class="box-header">
						<h4 style="margin :5px; color: #fff">Derajat Keanggotaan Harga</h4>
					</div>
					<div class="box-body" style="font-size: 14px; color=black">
						<table id="data3" class="table-responsive">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Murah</th>
									<th>Sedang</th>
									<th>Mahal</th>
								</tr>
							</thead>	
							<tbody>
								<?php 
									$k = 1;
									while ($listdata = mysqli_fetch_array($data3, MYSQLI_BOTH)) {
										echo "
										<tr>
											<td>$k</td>
											<td><b>$listdata[nama]</b></td>
											<td>$listdata[harga_murah]</td>
											<td>$listdata[harga_sedang]</td>
											<td>$listdata[harga_mahal]</td>
										</tr>
										";

										$k += 1;
									}
								 ?>
							</tbody>						
						</table>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="box box-info">
					<div class="box-header">
						<h4 style="margin :5px; color: #fff">Derajat Keanggotaan Cicilan</h4>
					</div>
					<div class="box-body" style="font-size: 14px; color=black">
						<table id="data4" class="table-responsive">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Sedikit</th>
									<th>Sedang</th>
									<th>Banyak</th>
								</tr>
							</thead>	
							<tbody>
								<?php 
									$l = 1;
									while ($listdata = mysqli_fetch_array($data4, MYSQLI_BOTH)) {
										echo "
										<tr>
											<td>$l</td>
											<td><b>$listdata[nama]</b></td>
											<td>$listdata[cicilan_sedikit]</td>
											<td>$listdata[cicilan_sedang]</td>
											<td>$listdata[cicilan_banyak]</td>
										</tr>
										";

										$l += 1;
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
			    $('#data2').DataTable({
			      'paging' : true,
			      'searching' : true,
			      'info' : true
			    });
			    $('#data3').DataTable({
			      'paging' : true,
			      'searching' : true,
			      'info' : true
			    });
			    $('#data4').DataTable({
			      'paging' : true,
			      'searching' : true,
			      'info' : true
			    });

			  });
			</script>
</body>
</html>