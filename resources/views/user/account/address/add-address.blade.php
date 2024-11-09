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
						<p>Add New Address</p>
					</div>
				</div>
			</div>
			<div class="navbar-boder"></div>
		</header>
		<!-- Header End -->
		<!-- Address Section Start -->
		<section id="add-new-address-screen">
			<div class="container">
				<h1 class="d-none">Address</h1>
				<h2 class="d-none">Add Address</h2>
				<div class="add-new-address-screen-full mt-32">
					<div class="map-section">
						<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3022.832392577118!2d-73.98823622342887!3d40.74371343567267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s71%20Madison%20Ave%2C%20New%20York%20-10013%20%2C%20USA!5e0!3m2!1sen!2sin!4v1693217771698!5m2!1sen!2sin" width="343" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
					<div class="map-bottom-sec mt-32">
						<div class="map-bottom-sec-full">
						<form action="{{ route('store-address') }}" method="POST" class="map-section-form">
								@csrf
								<div class="title-sec">
									<label for="title">Title</label>
									<input type="text" name="title" id="title" class="mt-8">
								</div>
								<div class="title-sec mt-16">
									<label for="address">Address</label>
									<input type="text" name="address" id="address" class="mt-8">
								</div>
								<div class="footer-checkbox-sec mt-16">
									<input class="checkbox-input-add" name="default" id="footer-checkbox" type="checkbox" value="1">
									<label for="footer-checkbox" class="footer-chec-txt1">Make this as the default address</label>
								</div>
								<div class="add-address-btn">
									<button type="submit">Add Address</button>
								</div>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</section>
		<!-- Address Section End -->
	</div>
	<script src="{{asset('')}}assets/js/jquery-min-3.6.0.js"></script>
	<script src="{{asset('')}}assets/js/slick.min.js"></script>
	<script src="{{asset('')}}assets/js/bootstrap.bundle.min.js"></script>
	<script src="{{asset('')}}assets/js/custom.js"></script>
</body>
</html>