<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	  <!-- Site tab icon  -->

	<link rel="icon" type="image/png" href="{{ asset('/icon/img-01') }}"/>

	<!--bootstrap link -->

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<!-- Animation link -->

	<link rel="stylesheet" type="text/css" href="{{ asset('/animate/animate.css') }}">

	<!--   -->	

	<link rel="stylesheet" type="text/css" href="{{ asset('/css-hamburgers/hamburgers.min.css') }}"/>

	<!-- -->


	<link rel="stylesheet" type="text/css" href="{{ asset('/vendor/select2/select2.min.css') }}">

	<!--Font awsome icon link -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

<!-- Local Css for login -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}">
	<!-- <link rel="stylesheet" href="{{ asset('css/all.min.css') }}"> -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/util.css') }}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{ asset('images/loginpage.png') }}" type="" alt="IMG">
				</div>

				<form class="login100-form validate-form" >
				@csrf 
					<span class="login100-form-title">
						 Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email" value="{{old('email')}}" class = " @error('email') is-invalid @enderror"/>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
						 @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password" class = "@error('password') is-invalid @enderror">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						 @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="/forgetpassword">
							 Password ?
						</a>
</br>
						<a class="txt2" href="/registration">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('public/js/main.js') }}"></script>

</body>
</html>