<?php include 'koneksi/koneksi.php' ?>

<?php 

if (isset($_POST['tambah'])) {
	$id_user = $_POST['id_user'];
	$nama_programmer = $_POST['nama_programmer'];
	$skill = $_POST['skill'];

	$query = mysqli_query($koneksi, "INSERT into tbl_user (nama_programmer, skill) values ('$nama_programmer', '$skill')");

	if ($query) {
		header("location:programmer.php?tambah=berhasil");
		
	}else{
		header("location:tambah-programmer.php?tambah=gagal");
	}
}

if (isset($_GET['edit'])) {
	$id = $_GET['edit'];
	$query = mysqli_query($koneksi, "SELECT * from tbl_user where id_user ='id'");
	$row = mysqli_fetch_assoc($query);

	if (isset($_POST['ubah'])) {
		$id_user = $_POST['id_user'];
		$skill = $_POST['skill'];

		$id = $_GET['edit'];
		$query = mysqli_query($koneksi, "UPDATE tbl_user set skill='$skill' where id_user='$id'");

		if ($query) {
			header("location:programmer.php?tambah=berhasil");

		}else{
			header("location:tambah-programmer.php?tambah=gagal");
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Programmer</title>
	<link rel="stylesheet" type="text/css" href="assets/css/programmer.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
	<?php include 'navbar/navbar.php' ?>
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12" style="margin-top: 40px;">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">
								<?php if (isset($_GET['edit'])): ?>
									Tambah Skill
									<?php else: ?>
										Tambah Programmer 	
									<?php endif ?>
								</h5>
							</div>
							<div class="card-body">
								<?php if (isset($_GET['edit'])): ?>
									<form action="" method="post">
										<div class="form-group row">
											<label for="" class="col-md-2 col-form-label">Skills</label>
											
											<div class="col-md-10">
												<input type="text" class="form-control" name="skill" placeholder="masukan ulang skill anda/pilih skill yang sudah terdaftar" value="<?php echo $row['skill'] ?>">
											</div>
										</div>
										<div class="form-group row">		
											<div class="col-md-10 offset-md-2">
												<input type="submit" class="btn btn-primary"  name="ubah" value="simpan">
											</div>
										</div>
									</form>	
									<?php else: ?>
										<form action="" method="post">
											<div class="form-group row">
												<label for="" class="col-md-2 col-form-label">Nama Programmer</label>
												
												<div class="col-md-10">
													<input type="text" class="form-control" placeholder="nama proggrammer" name="nama_programmer">
												</div>
											</div>
											<div class="form-group row">
												<label for="" class="col-md-2 col-form-label">Skills</label>
												
												<div class="col-md-10">
													<input type="text" class="form-control" placeholder="Tambahkan Skill" name="skill" >
												</div>
												<div class="form-group row">		
													<div class="col-md-10 offset-md-2">
														<input type="submit" class="btn btn-primary"  name="tambah" value="Simpan">
													</div>
												</div>
											</form>
										<?php endif ?>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<script type="" src="assets/jquery/jquery.min.js"></script>
				<script type="" src="assets/bootstrap/js/bootstrap.min.js"></script>
			</body>
			</html>