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
	$data = mysqli_query($conn, "SELECT * FROM rumah ORDER by id")

	?>
	<section id="header">
		<?php include "navbar.php" ?>
	</section>

	<section class="container main">
		<div class="row content">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header">
						<h4 style="margin :5px; color: #fff">Data</h4>
					</div>
					<div class="box-body" style="font-size: 15px;">
						<table id="data" class="table-responsive">
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
									<th>Aksi</th>
								</tr>
							</thead>	
							<tbody>
								<?php 
									$i = 1;
									while ($listdata = mysqli_fetch_array($data, MYSQLI_BOTH)) {
										echo "
										<tr>
											<td>$i</td>
											<td>$listdata[nama]</td>
											<td>$listdata[luas]</td>
											<td>$listdata[jarak]</td>
											<td>$listdata[harga]</td>
											<td>$listdata[cicilan]</td>
											<td>$listdata[alamat]</td>
											<td>$listdata[telepon]</td>
											<td>
												<a href='delete.php?id=$listdata[id]'  onclick='return confirm('Apakah anda yakin akan menghapus data ini?')'>
													Hapus
												</a>
											</td>
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
						<h4 style="margin :5px; color: #fff">Input Data</h4>
					</div>
					<div class="box-body">
						<form action="inputdata.php" method="get" class="form-horizontal">
								<div class="form-group" style="margin-bottom: 1em">
									<label class="col-sm-2">Nama</label>
									<div class="col-sm-10">
										<input type="text" name="nama" class="form-control">
									</div>
								</div>
								<div class="form-group" style="margin-bottom: 1em">
									<label class="col-sm-2">Luas</label>
									<div class="col-sm-10">
										<input type="text" name="luas" class="form-control"> 
									</div>
								</div>
								<div class="form-group" style="margin-bottom: 1em">
									<label class="col-sm-2">Jarak</label>
									<div class="col-sm-10">
										<input type="text" name="jarak" class="form-control">
									</div>
								</div>
								<div class="form-group" style="margin-bottom: 1em">
									<label class="col-sm-2">Harga</label>
									<div class="col-sm-10">
										<input type="text" name="harga" class="form-control">
									</div>
								</div>
								<div class="form-group" style="margin-bottom: 1em">
									<label class="col-sm-2">Cicilan</label>
									<div class="col-sm-10">
										<input type="text" name="cicilan" class="form-control">
									</div>
								</div>
								<div class="form-group" style="margin-bottom: 1em">
									<label class="col-sm-2">Alamat</label>
									<div class="col-sm-10">
										<textarea name="alamat" class="form-control"></textarea>
									</div>
								</div>
								<div class="form-group" style="margin-bottom: 1em">
									<label class="col-sm-2">Telepon</label>
									<div class="col-sm-10">
										<input type="text" name="telepon" class="form-control">
									</div>
								</div>
							<input type="submit" name="submit" class="btn btn-default" style="float: right;" value="Submit Value">

						</form>
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