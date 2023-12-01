<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Online Shop | Dashboard</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="http://localhost/website-sepatu/template/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="http://localhost/website-sepatu/template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="http://localhost/website-sepatu/template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<!-- SweetAlert2 -->
	<link rel="stylesheet" href="http://localhost/website-sepatu/template/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="http://localhost/website-sepatu/template/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

	<!-- jQuery -->
	<script src="http://localhost/website-sepatu/template/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="http://localhost/website-sepatu/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- DataTables -->
	<script src="http://localhost/website-sepatu/template/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="http://localhost/website-sepatu/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="http://localhost/website-sepatu/template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="http://localhost/website-sepatu/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
	<!-- AdminLTE App -->
	<script src="http://localhost/website-sepatu/template/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="http://localhost/website-sepatu/template/dist/js/demo.js"></script>

</head>
<body class="hold-transition sidebar-mini">
<!-- Content Wrapper. Contains page content -->
	<!-- /.content-header -->
	<!-- Main content -->
	<div class="content">
		<div class="container-fluid">
			<div class="row"><div class="col-lg-3 col-6">
	<!-- small box -->
	<div class="small-box bg-info">
		<div class="inner">
			<h3>6</h3>

			<p>Total Orderan</p>
		</div>
		<div class="icon">
			<i class="ion ion-bag"></i>
		</div>
		<a href="http://localhost/toko_online/admin/invoice" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
	</div>
</div>

<div class="col-lg-3 col-6">
	<!-- small box -->
	<div class="small-box bg-success">
		<div class="inner">
			<h3>1</h3>

			<p>Data Barang</p>
		</div>
		<div class="icon">
			<i class="fas  fa-birthday-cake"></i>
		</div>
		<a href="http://localhost/toko_online/admin/data_barang" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
	</div>
</div>

<div class="col-lg-3 col-6">
	<!-- small box -->
	<div class="small-box bg-warning">
		<div class="inner">
			<h3>8</h3>

			<p>Pelanggan</p>
		</div>
		<a href="http://localhost/website-sepatu/pelanggan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
		<div class="icon">
			<i class="fas fa-users"></i>
		</div>
		<a href="#" class="small-box-footer"></a>
	</div>
</div>

<div class="col-lg-3 col-6">
	<!-- small box -->
	<div class="small-box bg-danger">
		<div class="inner">
			<h3>3</h3>

			<p>Kategori</p>
		</div>
		<div class="icon">
			<i class="fas fa-list"></i>
		</div>
		<a href="http://localhost/toko_online/admin/kategori" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
	</div>
</div>
</div>
<!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->
<footer class="main-footer">
	<!-- To the right -->

	<!-- Default to the left -->
	<strong>Copyright &copy; 2023 <a href="">Cake Store</a>.</strong> All rights reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script>
	$(function () {
		$("#example1").DataTable({
			"responsive": true,
			"autoWidth": false,
		});
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": true,
			"searching": true,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
		});
	});
</script>
<script>
	window.setTimeout(function () {
		$(".alert").fadeTo(500, 0).slideUp(500, function () {
			$(this).remove();
		});
	}, 3000)
</script>
</body>

</html>