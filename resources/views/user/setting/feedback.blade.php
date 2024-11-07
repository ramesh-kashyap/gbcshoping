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
						<p>FeedBack</p>
					</div>
				</div>
			</div>
			<div class="navbar-boder"></div>
		</header>
		<!-- Header End -->
		<!-- Feedback Screen Start -->
		<section id="feedback-screen">
			<div class="container">
				<div class="sign-in-full-section ">
					<h1 class="d-none">Feedback Page</h1>
					<form class="forget-password-screen-form">
						<div class="feedback-sec">
							<label class="feedback-lbl"> Your Email Address</label>
							<input type="email" id="Email" placeholder="Write here" class="feedback-sec-txt">
						</div>
						<div class="single-input-form-menupage1 mt-16">
							<label class="feedback-lbl">Select Subject (Optional)</label>
							<div class="menupage1-form-custom ">
								<select name="persons" class="arrow-icon">
									<option disabled selected>Choose Your Subject</option>
									<option>Subject 1</option>
									<option>Subject 2</option>
									<option>Subject 3</option>
								</select>
							</div>
						</div>
						<div class="feedback-text mt-16">
							<label class="feedback-lbl">Description</label>
							<textarea rows="4" class="feedback-tp" placeholder="Write here"></textarea>
							
						</div>

					</form>
					<div class="feedback-btn">
						<a href="javascript:void(0)">Submit</a>
					</div>
				</div>
			</div>
		</section>
		<!-- Feedback Screen End -->
	</div>
	<script src="{{asset('')}}assets/js/jquery-min-3.6.0.js"></script>
	<script src="{{asset('')}}assets/js/slick.min.js"></script>
	<script src="{{asset('')}}assets/js/bootstrap.bundle.min.js"></script>
	<script src="{{asset('')}}assets/js/custom.js"></script>
</body>
</html>