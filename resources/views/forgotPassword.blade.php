<!DOCTYPE html>
<html lang="en">
<head>
	<title>Forgot Password</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	  <!-- Site tab icon  -->

	<link rel="icon" type="image/png" href="{{ asset('/icon/favicon.ico') }}"/>

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

<!-- Local Css for Registration  -->
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
						Change Password 
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email" value="{{old('email')}}"/>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
                    
                    <div class="wrap-input100 validate-input" data-validate = " Re-Enter Password is required">
						<input class="input100" type="password" name="re_enter_password" placeholder="Re-enter Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                        <span class="symbol-input100 , align-iteam:right">
							<i class="fa fa-eye" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Change Password
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Hello 
						</span>
						<a class="txt2" href="/">
							 Sign in !!
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