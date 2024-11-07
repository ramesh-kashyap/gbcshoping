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
						<p>My Promocodes</p>
					</div>
				</div>
			</div>
			<div class="navbar-boder"></div>
		</header>
		<!-- Header End -->
		<!-- Promocode Section Start -->
		<section id="Promocode-screen">
			<div class="container">
				<div class="oder-success-screen-full">
					<div class="oder-success-img">
						<img src="{{asset('')}}assets/images/promocode/promocode-img.png" alt="Promocode-img" class="img-fluid">
					</div>
					<div class="oder-success-content mt-32">
						<div class="oder-success-content-full">
							<h1>You don’t have Promocodes Yet!</h1>
							<p>Qui ex aute ipsum duis. Incididunt adipisicing voluptate laborum.</p>
							<div class="promocode-copon">
								<div class="input-group ">
									<span class="input-group-text coupon-iconn">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<mask id="mask0_330_1003" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
												<rect width="24" height="24" fill="white"/>
											</mask>
											<g mask="url(#mask0_330_1003)">
												<path d="M19.5 12.9083C19.5 11.462 20.62 10.2882 22 10.2882V9.24015C22 5.04803 21 4 17 4H7C3 4 2 5.04803 2 9.24015V9.76416C3.38 9.76416 4.5 10.938 4.5 12.3842C4.5 13.8305 3.38 15.0043 2 15.0043V15.5283C2 19.7204 3 20.7685 7 20.7685H17C21 20.7685 22 19.7204 22 15.5283C20.62 15.5283 19.5 14.3545 19.5 12.9083Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M9 15.2663L15 8.97813" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M14.9945 15.2663H15.0035" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M8.99451 9.50215H9.00349" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											</g>
										</svg>
									</span>
									<input type="number" placeholder="Enter Your Coupon Code" class="form-control coupon-txt">
								</div>
							</div>
							<div class="procode-btn">
								<a href="{{route('add-promocode')}}">Add Promocode</a>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</section>
		<!-- Promocode Section End -->
	</div>
	<script src="{{asset('')}}assets/js/jquery-min-3.6.0.js"></script>
	<script src="{{asset('')}}assets/js/slick.min.js"></script>
	<script src="{{asset('')}}assets/js/bootstrap.bundle.min.js"></script>
	<script src="{{asset('')}}assets/js/custom.js"></script>
</body>
</html>