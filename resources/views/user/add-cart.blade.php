
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
		<header id="top-navbar" class="top-navbar"> 
			<div class="container">
				<div class="top-navbar_full">
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
					<div class="top-navbar-title">
						<p>Clothes</p>
					</div>
					<div class="skip_btn notification-badge-btn">
						<a href="cart-without-promocode.html">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<mask id="mask0_330_4055" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
									<rect width="24" height="24" fill="white"/>
								</mask>
								<g mask="url(#mask0_330_4055)">
									<path d="M4 18.6667C4 19.1971 4.21071 19.7058 4.58579 20.0809C4.96086 20.4559 5.46957 20.6667 6 20.6667C6.53043 20.6667 7.03914 20.4559 7.41421 20.0809C7.78929 19.7058 8 19.1971 8 18.6667C8 18.1362 7.78929 17.6275 7.41421 17.2524C7.03914 16.8774 6.53043 16.6667 6 16.6667C5.46957 16.6667 4.96086 16.8774 4.58579 17.2524C4.21071 17.6275 4 18.1362 4 18.6667Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M15 18.6667C15 19.1971 15.2107 19.7058 15.5858 20.0809C15.9609 20.4559 16.4696 20.6667 17 20.6667C17.5304 20.6667 18.0391 20.4559 18.4142 20.0809C18.7893 19.7058 19 19.1971 19 18.6667C19 18.1362 18.7893 17.6275 18.4142 17.2524C18.0391 16.8774 17.5304 16.6667 17 16.6667C16.4696 16.6667 15.9609 16.8774 15.5858 17.2524C15.2107 17.6275 15 18.1362 15 18.6667Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M17 16.6667H6V2.66666H4" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M6 4.66666L20 5.66666L19 12.6667H6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</g>
							</svg>
							<div class="notification-badge">1</div>
						</a>
					</div>
				</div>
			</div>
			<div class="navbar-boder"></div>
		</header>
		<!-- Header End -->
		<!-- Single Cloths Section Start -->
		<section id="single-clothes-page">
			<div class="single-clothes-page-full">
				<div class="cloths-first-sec">
					<div id="carouselExampleIndicators" class="carousel slide single-clothes-slider" data-bs-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="single-clothes-slide-img">
									<img src="{{asset('')}}assets/images/single-clothes/clothes-1.png" alt="clothes-img">
								</div>
								<div class="single-clothes-favourite">
									<a href="javascript:void(0);" class="item-bookmark" tabindex="-1">
										<img src="{{asset('')}}assets/images/icons/unfill-heart.svg" alt="unfill-heart">
									</a>
								</div>
							</div>
							<div class="carousel-item">
								<div class="single-clothes-slide-img">
									<img src="{{asset('')}}assets/images/single-clothes/clothes-1.png" alt="clothes-img">
								</div>
								<div class="single-clothes-favourite">
									<a href="javascript:void(0);" class="item-bookmark" tabindex="-1">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
											<mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20">
												<rect width="20" height="20" fill="white"></rect>
											</mask>
											<g mask="url(#mask0_330_6192)">
												<path d="M15.7608 10.1528L9.51083 16.3428L3.26083 10.1528C2.84858 9.75168 2.52387 9.26952 2.30712 8.7367C2.09037 8.20389 1.9863 7.63196 2.00144 7.05695C2.01659 6.48194 2.15063 5.91629 2.39513 5.39562C2.63962 4.87495 2.98928 4.41055 3.42207 4.03166C3.85486 3.65276 4.36142 3.36758 4.90984 3.19407C5.45826 3.02057 6.03667 2.96249 6.60864 3.02351C7.18061 3.08452 7.73375 3.2633 8.23323 3.54859C8.73271 3.83389 9.1677 4.21951 9.51083 4.68117C9.85544 4.22286 10.2909 3.84061 10.7901 3.55834C11.2892 3.27608 11.8412 3.09988 12.4116 3.04077C12.982 2.98166 13.5584 3.04092 14.1048 3.21483C14.6512 3.38874 15.1559 3.67357 15.5871 4.05148C16.0184 4.42938 16.367 4.89224 16.6112 5.41108C16.8553 5.92992 16.9898 6.49358 17.0061 7.06676C17.0224 7.63995 16.9202 8.21033 16.7059 8.74221C16.4917 9.2741 16.1699 9.75602 15.7608 10.1578" stroke="#707070" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</g>
										</svg>
									</a>
								</div>
							</div>
							<div class="carousel-item">
								<div class="single-clothes-slide-img">
									<img src="{{asset('')}}assets/images/single-clothes/clothes-1.png" alt="clothes-img">
								</div>
								<div class="single-clothes-favourite">
									<a href="javascript:void(0);" class="item-bookmark" tabindex="-1">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
											<mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20">
												<rect width="20" height="20" fill="white"></rect>
											</mask>
											<g mask="url(#mask0_330_6192)">
												<path d="M15.7608 10.1528L9.51083 16.3428L3.26083 10.1528C2.84858 9.75168 2.52387 9.26952 2.30712 8.7367C2.09037 8.20389 1.9863 7.63196 2.00144 7.05695C2.01659 6.48194 2.15063 5.91629 2.39513 5.39562C2.63962 4.87495 2.98928 4.41055 3.42207 4.03166C3.85486 3.65276 4.36142 3.36758 4.90984 3.19407C5.45826 3.02057 6.03667 2.96249 6.60864 3.02351C7.18061 3.08452 7.73375 3.2633 8.23323 3.54859C8.73271 3.83389 9.1677 4.21951 9.51083 4.68117C9.85544 4.22286 10.2909 3.84061 10.7901 3.55834C11.2892 3.27608 11.8412 3.09988 12.4116 3.04077C12.982 2.98166 13.5584 3.04092 14.1048 3.21483C14.6512 3.38874 15.1559 3.67357 15.5871 4.05148C16.0184 4.42938 16.367 4.89224 16.6112 5.41108C16.8553 5.92992 16.9898 6.49358 17.0061 7.06676C17.0224 7.63995 16.9202 8.21033 16.7059 8.74221C16.4917 9.2741 16.1699 9.75602 15.7608 10.1578" stroke="#707070" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</g>
										</svg>
									</a>
								</div>
							</div>
						</div>
						<button class="carousel-control-prev single-slider-btn-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
							<span>
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<mask id="mask0_330_4105" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
										<rect width="24" height="24" fill="white"/>
									</mask>
									<g mask="url(#mask0_330_4105)">
										<path d="M15 18L9 12L15 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									</g>
								</svg>
							</span>
						</button>
						<button class="carousel-control-next single-slider-btn-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
							<span>
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<mask id="mask0_330_4109" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
										<rect width="24" height="24" fill="white"/>
									</mask>
									<g mask="url(#mask0_330_4109)">
										<path d="M9 6L15 12L9 18" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									</g>
								</svg>
							</span>
						</button>
					</div>
				</div>
				<div class="cloths-second-sec">
					<div class="container">
						<div class="cloths-second-sec-full">
							<div class="cloths-second-wrapper">
								<h1 class="clo-txt1">Preneum Women's Georgette a-line Knee-Long Dress</h1>
								<div class="cloths-review-sec">
									<div class="cloths-sold-sec">
										<p>9,742 sold</p>
									</div>
									<div class="cloths-star-sec">
										<span>
											<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
												<mask id="mask0_330_6287" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="18" height="18">
													<rect width="18" height="18" fill="white"/>
												</mask>
												<g mask="url(#mask0_330_6287)">
													<path d="M8.46199 2.58999C8.63485 2.23978 8.72128 2.06468 8.83862 2.00874C8.94071 1.96006 9.05932 1.96006 9.1614 2.00874C9.27874 2.06468 9.36517 2.23978 9.53804 2.58999L11.178 5.91246C11.2291 6.01585 11.2546 6.06754 11.2919 6.10768C11.3249 6.14322 11.3645 6.17201 11.4085 6.19247C11.4582 6.21557 11.5152 6.22391 11.6293 6.24058L15.2977 6.77678C15.684 6.83324 15.8772 6.86148 15.9666 6.95583C16.0444 7.03792 16.0809 7.15072 16.0661 7.26283C16.0491 7.39168 15.9093 7.52788 15.6296 7.80029L12.9761 10.3848C12.8934 10.4654 12.852 10.5057 12.8253 10.5536C12.8017 10.596 12.7865 10.6427 12.7807 10.6909C12.7741 10.7453 12.7838 10.8022 12.8034 10.9161L13.4295 14.5666C13.4955 14.9516 13.5285 15.1441 13.4665 15.2584C13.4125 15.3578 13.3165 15.4275 13.2053 15.4481C13.0775 15.4718 12.9046 15.3809 12.5588 15.1991L9.27928 13.4744C9.1771 13.4206 9.12601 13.3938 9.07218 13.3832C9.02452 13.3739 8.9755 13.3739 8.92784 13.3832C8.87402 13.3938 8.82293 13.4206 8.72074 13.4744L5.44119 15.1991C5.09544 15.3809 4.92256 15.4718 4.79473 15.4481C4.68351 15.4275 4.58754 15.3578 4.53355 15.2584C4.4715 15.1441 4.50452 14.9516 4.57056 14.5666L5.19666 10.9161C5.21618 10.8022 5.22594 10.7453 5.21934 10.6909C5.21349 10.6427 5.19833 10.596 5.1747 10.5536C5.14802 10.5057 5.10666 10.4654 5.02394 10.3848L2.37042 7.80029C2.09075 7.52788 1.95091 7.39168 1.93389 7.26283C1.91909 7.15072 1.95567 7.03792 2.03344 6.95583C2.12283 6.86148 2.31598 6.83324 2.70228 6.77678L6.37073 6.24058C6.48482 6.22391 6.54186 6.21557 6.59154 6.19247C6.63552 6.17201 6.67512 6.14322 6.70814 6.10768C6.74543 6.06754 6.77095 6.01585 6.82198 5.91246L8.46199 2.58999Z" fill="#FF4C3B"/>
												</g>
											</svg>
										</span>
										<span>4.8 (4,749 reviews)</span>
									</div>
								</div>
							</div>
							<div class="single-cloth-border"></div>
						</div>
					</div>
				</div>
				<div class="cloth-third-sec">
					<div class="container">
						<h2 class="d-none">Clothse Details</h2>
						<div class="cloth-third-sec-full">
							<h3 class="des-txt1">Description</h3>
							<div>
								<p class="des-txt2">This casual basic Dress fits most ladies and it's easy to pair with as well as heels or sneakers. You
									<span class="moretext">
										1.3",120+ Sports Modes, 240 * 240 PX High Res with SpO2, Heart Rate Monitoring & IP67 Rating, Rs 100 Off on UPI
									</span>
								</p>
								<a class="moreless-button" href="javascript:void(0)">Read More</a>
							</div>
							<div class="single-cloth-border"></div>
						</div>
					</div>
				</div>
				<div class="cloths-fourth-sec">
					<div class="container">
						<div class="cloths-fourth-sec-full">
							<h3 class="des-txt1">Additional Info:</h3>
							<div class="additional-deatils">
								<ul>
									<li>
										<span class="add-txt1">Care Instructions:</span>
										<span class="add-txt2">Dry Clean Only</span>
									</li>
									<li>
										<span class="add-txt1">Fit Type: </span>
										<span class="add-txt2">Slim</span>
									</li>
									<li>
										<span class="add-txt1">Dress Fabric : </span>
										<span class="add-txt2">Georgette</span>
									</li>
									<li>
										<span class="add-txt1">Style : </span>
										<span class="add-txt2">Flare A-line</span>
									</li>
									<li>
										<span class="add-txt1">Length :</span>
										<span class="add-txt2">Ankle Length</span>
									</li>
									<li>
										<span class="add-txt1">Sleeves : </span>
										<span class="add-txt2">3/4th Sleeve</span>
									</li>
									<li>
										<span class="add-txt1">Neck :</span>
										<span class="add-txt2">Round Neck</span>
									</li>
									<li>
										<span class="add-txt1">Print or Pattern Type : </span>
										<span class="add-txt2">Floral</span>
									</li>
									<li>
										<span class="add-txt1">Length : </span>
										<span class="add-txt2">Maxi</span>
									</li>
								</ul>
								<div class="single-cloth-border"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="cloths-fifth-sec">
					<div class="container">
						<div class="cloths-fifth-sec-full">
							<div class="size-section">
								<div class="size-section-full">
									<h3 class="des-txt1">Size</h3>
									<div class="clothes-size-sec">
										<div class="clothes-size">
											<input type="radio"  id="clothes-size1" name="select-language" >
											<label class="custom-radio-sel-size" for="clothes-size1">S</label>
										</div>
										<div class="clothes-size">
											<input type="radio"  id="clothes-size2" name="select-language" checked>
											<label class="custom-radio-sel-size" for="clothes-size2">M</label>
										</div>
										<div class="clothes-size">
											<input type="radio"  id="clothes-size3" name="select-language" >
											<label class="custom-radio-sel-size" for="clothes-size3">L</label>
										</div>
										<div class="clothes-size">
											<input type="radio"  id="clothes-size4" name="select-language" >
											<label class="custom-radio-sel-size" for="clothes-size4">XL</label>
										</div>
									</div>
								</div>
							</div>
							<div class="color-section">
								<div class="color-section-full">
									<h3 class="des-txt1">Color</h3>
									<div class="cloths-color-sec">
										<div class="color-wrap">
											<label for="green" class="color1">
												<input type="radio" name="color" id="green" class="col-deatils" checked>
											</label>
										</div>
										<div class="color-wrap">
											<label for="red" class="color2">
												<input type="radio" name="color" id="red"  class="col-deatils">
											</label>
										</div>
										<div class="color-wrap">
											<label for="blue" class="color3">
												<input type="radio" name="color" id="blue"  class="col-deatils">
											</label>
										</div>
										<div class="color-wrap">
											<label for="light-green" class="color4">
												<input type="radio" name="color" id="light-green"  class="col-deatils">
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clothes-sixth-sec">
					<div class="container">
						<div class="clothes-sixth-wrap">
							<div class="clothes-sixth-full">
								<div class="cloth-price-sec">
									<span class="price-sec1">Price:</span>
									<span class="price-sec2">$150.00</span>
								</div>
								<div class="cloths-increment-sec">
									<div class="product-incre">
										<a href="javascript:void(0)" class="product__minus sub">
											<span>
												<svg width="8" height="8" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M1 1H7" stroke="#707070" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</span>
										</a>
										<input name="quantity" type="text" class="product__input" value="1">
										<a href="javascript:void(0)" class="product__plus add">
											<span>
												<svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M1 4H7" stroke="#707070" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													<path d="M4 7V1" stroke="#707070" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</span>
										</a>
									</div>
								</div>
							</div>
							<div class="add-to-cart-cloth-btn">
								<a href="cart-without-promocode.html">Add To Cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Single Cloths Section End -->
	</div>
	<script src="{{asset('')}}assets/js/jquery-min-3.6.0.js"></script>
	<script src="{{asset('')}}assets/js/slick.min.js"></script>
	<script src="{{asset('')}}assets/js/bootstrap.bundle.min.js"></script>
	<script src="{{asset('')}}assets/js/custom.js"></script>
</body>
</html>