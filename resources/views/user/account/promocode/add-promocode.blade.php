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
						<p>Promocodes</p>
					</div>
				</div>
			</div>
			<div class="navbar-boder"></div>
		</header>
		<!-- Header End -->
		<!-- Promocode Section Start -->
		<section id="promocode2-screen">
			<div class="container">
				<h1 class="d-none">Promocode Details</h1>
				<h2 class="d-none">Promocode</h2>
				<div class="promocode2-screen-full">
					<div class="promocode-copon">
						<div class="input-group ">
							<span class="input-group-text coupon-iconn">
								<img src="{{asset('')}}assets/images/icons/promocode-icon.svg" alt="promocode-icon">
							</span>
							<input type="number" placeholder="Enter Your Coupon Code" class="form-control coupon-txt">
						</div>
					</div>
					<div class="apply-code-btn">
						<a href="{{route('with-promocode')}}">Apply Code</a>
					</div>
					<div class="promocode2-screen-third mt-32">
						<div class="promocode2-screen-third-full">
							<div class="promocode2-wrapper">
								<div>
									<div>
										<span>
											<img src="{{asset('')}}assets/images/icons/promocode-icon.svg" alt="promocode-icon">
										</span>
										<span class="apple-code-txt1">20%</span>
									</div>
									<p class="apple-code-txt2">Expire Dec 15, 2024</p>	
								</div>
								<div>
									<div>
										<span class="copied-img">
											<a href="javascript:void(0)">
												<img src="{{asset('')}}assets/images/icons/copy-icon.svg" alt="copy-icon">
											</a>
										</span>
									</div>
									<p class="apple-code-txt3">20firstorder</p>	
								</div>
							</div>
							<div class="promocode2-wrapper mt-16">
								<div>
									<div>
										<span>
											<img src="{{asset('')}}assets/images/icons/promocode-icon.svg" alt="promocode-icon">
										</span>
										<span class="apple-code-txt1">25%</span>
									</div>
									<p class="apple-code-txt2">Expire Sep 30, 2024</p>	
								</div>
								<div>
									<div>
										<span class="copied-img">
											<a href="javascript:void(0)">
												<img src="{{asset('')}}assets/images/icons/copy-icon.svg" alt="copy-icon">
											</a>
										</span>
									</div>
									<p class="apple-code-txt3">25fridaysale</p>	
								</div>
							</div>
							<div class="promocode2-wrapper mt-16">
								<div>
									<div>
										<span>
											<img src="{{asset('')}}assets/images/icons/promocode-icon.svg" alt="promocode-icon">
										</span>
										<span class="apple-code-txt1">10%</span>
									</div>
									<p class="apple-code-txt2 color-red">Expire in 3 days</p>	
								</div>
								<div>
									<div>
										<span class="copied-img">
											<a href="javascript:void(0)">
												<img src="{{asset('')}}assets/images/icons/copy-icon.svg" alt="copy-icon">
											</a>
										</span>
									</div>
									<p class="apple-code-txt3">20firstorder</p>	
								</div>
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