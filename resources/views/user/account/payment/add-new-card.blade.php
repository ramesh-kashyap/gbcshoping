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
						<p>Add New Card</p>
					</div>
				</div>
			</div>
			<div class="navbar-boder"></div>
		</header>
		<!-- Header End -->
		<!-- Add New Card Screen Start -->
		<section id="add-newcard-screen">
			<h1 class="d-none">Add Card</h1>
			<div class="container">
				<div class="add-newcard-screen-full mt-32">
					<div class="new-card-first">
						<img src="{{asset('')}}assets/images/payment-icon/visa-img.png" alt="visa-img" class="img-fluid w-100" >	
					</div>
					<div class="new-card-second mt-32">
						<div class="map-bottom-sec-full">
							<form class="map-section-form">
								<div class="title-sec">
									<label for="title">Card Name</label>
									<input type="text" value="Jessica Smith" id="title" class="mt-8">
								</div>
								<div class="title-sec mt-16">
									<label for="address">Card NUMBER</label>
									<input type="number" value="2672478914520890" id="address" class="mt-8" autocomplete="off">
								</div>
								<div class="date-sec-card">
									<div class="title-sec mt-16 ">
										<label for="address">EXPIRY DATE</label>
										<input type="text" id="datepicker" autocomplete="off" value="07/26" class="mt-8">
									</div>
									<div class="title-sec mt-16 ">
										<label for="address">CVV</label>
										<input type="number" value="787" id="cvv" class="mt-8" autocomplete="off">
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="add-my-card-btn">
						<a href="payment-method.html">Add My Card</a>	
					</div>
				</div>
			</div>	
		</section>
		<!-- Add New Card Screen End -->
	</div>
	<script src="{{asset('')}}assets/js/jquery-min-3.6.0.js"></script>
	<script src="{{asset('')}}assets/js/slick.min.js"></script>
	<script src="{{asset('')}}assets/js/bootstrap.bundle.min.js"></script>
	<script src="{{asset('')}}assets/js/jquery-ui.min.js"></script>
	<script src="{{asset('')}}assets/js/datepicker.js"></script>
	<script src="{{asset('')}}assets/js/custom.js"></script>
</body>
</html>