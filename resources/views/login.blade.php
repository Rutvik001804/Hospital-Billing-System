<!DOCTYPE html>
<html lang="en">
<head>
	<title>Health Care - Sign In</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('Login/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('Login/fonts/iconic/css/material-design-iconic-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('Login/vendor/animate/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('Login/vendor/css-hamburgers/hamburgers.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('Login/vendor/animsition/css/animsition.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('Login/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('Login/css/main.css')}}">
</head>
<body>	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="signinval" method="post">
                    @csrf
					<span class="login100-form-title p-b-48">
						Health Care
					</span>

					<div class="wrap-input100">
						<input class="input100" type="text" name="uname">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="{{URL::asset('Login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{URL::asset('Login/vendor/animsition/js/animsition.min.js')}}"></script>
	<script src="{{URL::asset('Login/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{URL::asset('Login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{URL::asset('Login/js/main.js')}}"></script>
</body>
</html>