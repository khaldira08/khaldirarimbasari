<?php include 'koneksi/koneksi.php' ?>

<?php 
$query = mysqli_query($koneksi, "select * from tbl_user order by id_user desc");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Daftar Programmer</title>
	<link rel="stylesheet" type="text/css" href="assets/css/programmer.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="wrapper">
		<?php include 'navbar/navbar.php' ?>
		<div class="konten margin-top-50">
			<div class="container">
				<div class="row" style="margin-top: 40px;">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Daftar Programmer</h5>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
										<div class="card">
											<h3 class="text-center">Tambah Programmer Baru</h3>
										</div>
									</div>
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<a href="tambah-programmer.php" class="btn btn-primary">Tambah</a>	
										
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered table-striped">
										<thead>
											<tr>

												<th>No</th>
												<th>Nama Lengkap</th>
												<th>Skills</th>

											</tr>
										</thead>
										<!-- mysqli_fetch_assoc : untuk menginput si database -->
										<tbody>
											<?php $no=1; while ($row=mysqli_fetch_assoc($query)){ ?>
												<tr>

													<td><?php echo $no++ ?></td>
													<td><?php echo $row['nama_programmer'] ?></td>
													<td>
														<?php echo $row['skill'] ?>
														<div class="table-responsive">
															<div class="table table-bordered table-stripped">
																<a href="tambah-programmer.php?edit=<?php echo $row['id_user'] ?>" class="border">Tambah</a>
															</div>
														</div>
													</td>

												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="" src="../data/jquery/jquery.min.js"></script>
<script type="" src="../data/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>





?>