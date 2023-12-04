<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--favicon-->
<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
<!--plugins-->
<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
<!-- loader-->
<link href="assets/css/pace.min.css" rel="stylesheet" />
<script src="assets/js/pace.min.js"></script>
<!-- Bootstrap CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
<link href="assets/css/app.css" rel="stylesheet">
<link href="assets/css/icons.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<title>KOPWAR INTENS</title>
</head>

<body class="bg-login" style="overflow: hidden">
<!--wrapper-->
<div class="wrapper">
<header class="login-header shadow">
<nav class="navbar navbar-expand-lg navbar-light bg-white rounded fixed-top rounded-0 shadow-sm">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">
			<div class="img-logo">
			<img src="assets/images/kopwar/logo_intens_full.png" width="200" alt="" class="rounded mx-auto d-block"/>
			
			</div>
		</a>
		{{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
		</button> --}}
		{{-- <div class="collapse navbar-collapse" id="navbarSupportedContent1"> --}}
			{{-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> --}}
				<img src="assets/images/kopwar/sekolah.png" width="35" alt="" class="nav-item"/>
			{{-- </ul> --}}
		</div>
	</div>
</nav>
</header>
<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-4">
<div class="container-fluid">
<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
<div class="col mx-auto">
<div class="card mt-5 mt-lg-0">
<div class="card-body">					
<div class="border p-4 rounded">
	<div class="text-center">
		<h3 class="">Sign in</h3>
	</div>
	<div class="form-body">
		<form class="row g-3" action="/login" method="POST">
			@csrf
			<div class="col-12">
				<label for="Username" class="form-label">Username</label>
				<input type="Username" class="form-control" id="Username" placeholder="Masukan Username" name="username">
			</div>
			@error('username')
			<div class="invalid-feedback text-start">
				{{ $message }}
			</div>
			@enderror
			<div class="col-12">
				<label for="inputChoosePassword" class="form-label">Password</label>
				<div class="input-group" id="show_hide_password">
					<input type="password" class="form-control border-end-0" id="inputChoosePassword"  placeholder="Masukan Password" name="password">
					 <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-check form-switch">
					<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
					<label class="form-check-label" for="flexSwitchCheckChecked">Ingat Saya</label>
				</div>
			</div>
			<div class="col-md-6 text-end">	<a href="">Lupa Password?</a>
			</div>
			<div class="col-12">
				<div class="d-grid">
					<button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Sign in</button>
				</div>
			</div>
		</form>
	</div>
</div>
</div>
</div>
</div>
</div>
<!--end row-->
</div>
</div>
<footer class="bg-white shadow-sm border-top p-2 text-center fixed-bottom">
<p class="mb-0">KOPWAR INTENS | Copyright © 2023. All right reserved.</p>
</footer>
</div>
<!--end wrapper-->
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<!--Password show & hide js -->
<script>
$(document).ready(function () {
$("#show_hide_password a").on('click', function (event) {
	event.preventDefault();
	if ($('#show_hide_password input').attr("type") == "text") {
		$('#show_hide_password input').attr('type', 'password');
		$('#show_hide_password i').addClass("bx-hide");
		$('#show_hide_password i').removeClass("bx-show");
	} else if ($('#show_hide_password input').attr("type") == "password") {
		$('#show_hide_password input').attr('type', 'text');
		$('#show_hide_password i').removeClass("bx-hide");
		$('#show_hide_password i').addClass("bx-show");
	}
});
});
</script>
<!--app JS-->
<script src="assets/js/app.js"></script>
</body>

</html>