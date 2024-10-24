
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zoop Retails Store</title>
	<link rel="icon" href="{{asset('')}}assets/images/favicon/icon.png">
	<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('')}}assets/css/all.min.css">
	<link rel="stylesheet" href="{{asset('')}}assets/css/slick.css">
	<link rel="stylesheet" href="{{asset('')}}assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('')}}assets/css/style.css">
	<link rel="stylesheet" href="{{asset('')}}assets/css/media-query.css">
</head>
<body>
	<div class="site-content">
		<!-- Preloader Start -->
		<div class="loader-mask">
			<div class="circle">
			</div>
		</div>
		<!-- Preloader End -->
		<!-- Header Start -->
		<header id="top-header">
			<div class="container">
				<div class="top-header-full">
					<div class="back-btn">
						<a href="javascript:history.go(-1)">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<mask id="mask0_330_7385" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
									<rect width="24" height="24" fill="black"/>
								</mask>
								<g mask="url(#mask0_330_7385)">
									<path d="M15 18L9 12L15 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</g>
							</svg>
						</a>
					</div>
					<div class="header-title">
						<p>Enter Your PIN</p>
					</div>
				</div>
			</div>
			<div class="navbar-boder"></div>
		</header>
		<!-- Header End -->
		<!--Verify Screen Start -->
		<section id="verify-screen">
			<div class="container">
				<div class="sign-in-full-section">
					<h1 class="d-none">Sign In Page</h1>
					<div class="forget-password-screen-top">
						<p>Enter your PIN Number to confirm payment</p>
						<form  class="mt-32" method="get">
							<div id="otp" class="digit-group otp-section" data-group-name="digits" data-autosubmit="false">
								<input class="form-control otp" type="text" id="digit-1" name="digit-1"  data-next="digit-2" maxlength="1">
								<input class="form-control otp" type="text" id="digit-2" name="digit-2"  data-next="digit-3" data-previous="digit-1" maxlength="1">
								<input class="form-control otp" type="text" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2" maxlength="1">
								<input class="form-control otp" type="text" id="digit-4" name="digit-4"  data-next="digit-5" data-previous="digit-3" maxlength="1">
							</div>                
						</form>
					</div>
					<div class="verify-btn mt-32">
						<a href="order-successfull.html">Continue</a>
					</div>
				</div>
			</div>
		</section>
		<!--Verify Screen End -->
	</div>
	<script src="{{asset('')}}assets/js/jquery-min-3.6.0.js"></script>
	<script src="{{asset('')}}assets/js/slick.min.js"></script>
	<script src="{{asset('')}}assets/js/bootstrap.bundle.min.js"></script>
	<script src="{{asset('')}}assets/js/counter.js"></script>
	<script src="{{asset('')}}assets/js/custom.js"></script>
</body>
</html>