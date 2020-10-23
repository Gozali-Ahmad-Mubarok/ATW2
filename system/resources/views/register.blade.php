<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class=" container wrap-login100">
				<form class="login100-form validate-form">
					
					<span class="login100-form-title">
						Register
					</span>

					<div class="wrap-input100 ">
						<input class="input100" type="text" name="nama" placeholder="nama">
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 ">
						<input class="input100" type="test" name="email" placeholder="goza123@gmail.com">
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 ">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<a class="login100-form-btn"href="{{url("/Login")}}">create</a>
					</div>

					<div class="text-center p-t-10">
						<p class="message">Sudah Memiliki Akun? <a href="{{url("/Login")}}">Login</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>