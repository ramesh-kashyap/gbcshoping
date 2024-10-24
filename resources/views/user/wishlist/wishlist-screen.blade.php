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
						<a href="#offcanvasExample" data-bs-toggle="offcanvas">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<mask id="mask0_330_6477" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
									<rect width="24" height="24" fill="white"/>
								</mask>
								<g mask="url(#mask0_330_6477)">
									<path d="M19 6.87301C19.3062 7.04981 19.5601 7.30464 19.7358 7.61153C19.9115 7.91843 20.0026 8.26641 20 8.62001V15.156C19.9999 15.5127 19.9045 15.8628 19.7235 16.1701C19.5426 16.4775 19.2828 16.7309 18.971 16.904L12.971 20.737C12.674 20.902 12.3398 20.9885 12 20.9885C11.6602 20.9885 11.326 20.902 11.029 20.737L5.029 16.904C4.71736 16.7309 4.45763 16.4777 4.27671 16.1706C4.0958 15.8634 4.00026 15.5135 4 15.157V8.62001C4.00008 8.26337 4.09553 7.91323 4.27646 7.60589C4.45739 7.29854 4.71721 7.04516 5.029 6.87201L11.029 3.30001C11.3348 3.12978 11.679 3.04044 12.029 3.04044C12.379 3.04044 12.7232 3.12978 13.029 3.30001L19.029 6.87301H19V6.87301Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</g>
							</svg>
						</a>
					</div>
					<div class="top-navbar-title">
						<p>Wishlist</p>
					</div>
					<div class="skip_btn notification-badge-btn">
						<a href="notification.html">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<mask id="mask0_330_3241" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
									<rect width="24" height="24" fill="white"/>
								</mask>
								<g mask="url(#mask0_330_3241)">
									<path d="M10 5C10 4.46957 10.2107 3.96086 10.5858 3.58579C10.9609 3.21071 11.4696 3 12 3C12.5304 3 13.0391 3.21071 13.4142 3.58579C13.7893 3.96086 14 4.46957 14 5C15.1484 5.54303 16.1274 6.38833 16.8321 7.4453C17.5367 8.50227 17.9404 9.73107 18 11V14C18.0753 14.6217 18.2954 15.2171 18.6428 15.7381C18.9902 16.2592 19.4551 16.6914 20 17H4C4.54494 16.6914 5.00981 16.2592 5.35719 15.7381C5.70457 15.2171 5.92474 14.6217 6 14V11C6.05956 9.73107 6.4633 8.50227 7.16795 7.4453C7.8726 6.38833 8.85159 5.54303 10 5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M9 17V18C9 18.7956 9.31607 19.5587 9.87868 20.1213C10.4413 20.6839 11.2044 21 12 21C12.7956 21 13.5587 20.6839 14.1213 20.1213C14.6839 19.5587 15 18.7956 15 18V17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</g>
							</svg>
							<div class="notification-badge"></div>
						</a>
					</div>
				</div>
			</div>
			<div class="navbar-boder"></div>
		</header>
		<!-- Header End -->
		<!--Wishlist Screen Start -->
		<section id="wishlist-section">
			<div class="container">
				<h1 class="d-none">Wishlist Page</h1>
				<h2 class="d-none">Wishlist</h2>
				<div class="wishlist-section-full mt-24">
					<div class="wishlist-wrapper">
						<div class="wishlist-wrapper-full">
							<div class="shoes-screen-wrapper electronic-redirect">
								<div class="shoes-screen-top">
									<div class="shoes-img wishlist-img">
										<img src="{{asset('')}}assets/images/wishlist/wishlist-1.png" alt="shoes-img">
									</div>
									<div class="clothes-favourite">
										<a href="javascript:void(0);" class="item-bookmark active" tabindex="-1">
											<img src="{{asset('')}}assets/images/icons/unfill-heart.svg" alt="unfill-heart">
										</a>
									</div>
								</div>
								<div class="shoes-screen-bottom">
									<div class="shoes-screen-bottom-full">
										<div class="shoes-screen-first">
											<h3>Fire-Boltt Phoenix Smart Watch with Bluetooth Calling </h3>
										</div>
										<div class="shoes-screen-second">
											<div class="cloth-txt1">
												<span>$150.00</span>
											</div>
											<div class="shoes-screen-second-full">
												<span class="cloth-star"><img src="{{asset('')}}assets/images/icons/orange-star.svg" alt="star-img"></span>
												<span class="cloth-txt2">4.8</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="shoes-screen-wrapper electronic-redirect">
								<div class="shoes-screen-top">
									<div class="shoes-img wishlist-img">
										<img src="{{asset('')}}assets/images/wishlist/wishlist-2.png" alt="shoes-img">
									</div>
									<div class="clothes-favourite">
										<a href="javascript:void(0);" class="item-bookmark active" tabindex="-1">
											<img src="{{asset('')}}assets/images/icons/unfill-heart.svg" alt="unfill-heart">
										</a>
									</div>
								</div>
								<div class="shoes-screen-bottom">
									<div class="shoes-screen-bottom-full">
										<div class="shoes-screen-first">
											<h3>All-in-One PC 12th Gen Intel Core i5-1235U 24-inch(60.5 cm) FHD Ant</h3>
										</div>
										<div class="shoes-screen-second">
											<div class="cloth-txt1">
												<span>$850.00</span>
											</div>
											<div class="shoes-screen-second-full">
												<span class="cloth-star"><img src="{{asset('')}}assets/images/icons/orange-star.svg" alt="star-img"></span>
												<span class="cloth-txt2">4.8</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="shoes-screen-wrapper cloth-redirect">
								<div class="shoes-screen-top">
									<div class="shoes-img wishlist-img">
										<img src="{{asset('')}}assets/images/wishlist/wishlist-3.png" alt="shoes-img">
									</div>
									<div class="clothes-favourite">
										<a href="javascript:void(0);" class="item-bookmark active" tabindex="-1">
											<img src="{{asset('')}}assets/images/icons/unfill-heart.svg" alt="unfill-heart">
										</a>
									</div>
								</div>
								<div class="shoes-screen-bottom">
									<div class="shoes-screen-bottom-full">
										<div class="shoes-screen-first">
											<h3>Western Dresses for Women | Short A-Line Dress for Girls | Maxi </h3>
										</div>
										<div class="shoes-screen-second">
											<div class="cloth-txt1">
												<span>$80.00</span>
											</div>
											<div class="shoes-screen-second-full">
												<span class="cloth-star"><img src="{{asset('')}}assets/images/icons/orange-star.svg" alt="star-img"></span>
												<span class="cloth-txt2">4.8</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="shoes-screen-wrapper cloth-redirect">
								<div class="shoes-screen-top">
									<div class="shoes-img wishlist-img">
										<img src="{{asset('')}}assets/images/wishlist/wishlist-4.png" alt="shoes-img">
									</div>
									<div class="clothes-favourite">
										<a href="javascript:void(0);" class="item-bookmark active" tabindex="-1">
											<img src="{{asset('')}}assets/images/icons/unfill-heart.svg" alt="unfill-heart">
										</a>
									</div>
								</div>
								<div class="shoes-screen-bottom">
									<div class="shoes-screen-bottom-full">
										<div class="shoes-screen-first">
											<h3>Girl's Alloy Rose Gold Plated Dual Heart Pendant for mom with </h3>
										</div>
										<div class="shoes-screen-second">
											<div class="cloth-txt1">
												<span>$450.00</span>
											</div>
											<div class="shoes-screen-second-full">
												<span class="cloth-star"><img src="{{asset('')}}assets/images/icons/orange-star.svg" alt="star-img"></span>
												<span class="cloth-txt2">4.8</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Wishlist Screen End -->
		<!--SideBar Setting Menu -->
		@include('layouts.upnl.header')
		<!--SideBar Setting Menu -->
		<!--Bottom TabBar Section Start -->
		@include('layouts.upnl.footer')