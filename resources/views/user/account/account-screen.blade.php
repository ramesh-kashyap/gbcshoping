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
		<!--Header Start -->
		<header id="top-navbar" class="top-navbar">
			<div class="container">
				<div class="top-navbar_full">
					<div class="back-btn">
						<a href="#offcanvasExample" data-bs-toggle="offcanvas">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<mask id="mask0_330_6477" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
									<rect width="24" height="24" fill="white" />
								</mask>
								<g mask="url(#mask0_330_6477)">
									<path d="M19 6.87301C19.3062 7.04981 19.5601 7.30464 19.7358 7.61153C19.9115 7.91843 20.0026 8.26641 20 8.62001V15.156C19.9999 15.5127 19.9045 15.8628 19.7235 16.1701C19.5426 16.4775 19.2828 16.7309 18.971 16.904L12.971 20.737C12.674 20.902 12.3398 20.9885 12 20.9885C11.6602 20.9885 11.326 20.902 11.029 20.737L5.029 16.904C4.71736 16.7309 4.45763 16.4777 4.27671 16.1706C4.0958 15.8634 4.00026 15.5135 4 15.157V8.62001C4.00008 8.26337 4.09553 7.91323 4.27646 7.60589C4.45739 7.29854 4.71721 7.04516 5.029 6.87201L11.029 3.30001C11.3348 3.12978 11.679 3.04044 12.029 3.04044C12.379 3.04044 12.7232 3.12978 13.029 3.30001L19.029 6.87301H19V6.87301Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								</g>
							</svg>
						</a>
					</div>
					<div class="top-navbar-title">
						<p>My Account</p>
					</div>
					<div class="skip_btn notification-badge-btn">
						<a href="{{route('notification')}}">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<mask id="mask0_330_3241" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
									<rect width="24" height="24" fill="white" />
								</mask>
								<g mask="url(#mask0_330_3241)">
									<path d="M10 5C10 4.46957 10.2107 3.96086 10.5858 3.58579C10.9609 3.21071 11.4696 3 12 3C12.5304 3 13.0391 3.21071 13.4142 3.58579C13.7893 3.96086 14 4.46957 14 5C15.1484 5.54303 16.1274 6.38833 16.8321 7.4453C17.5367 8.50227 17.9404 9.73107 18 11V14C18.0753 14.6217 18.2954 15.2171 18.6428 15.7381C18.9902 16.2592 19.4551 16.6914 20 17H4C4.54494 16.6914 5.00981 16.2592 5.35719 15.7381C5.70457 15.2171 5.92474 14.6217 6 14V11C6.05956 9.73107 6.4633 8.50227 7.16795 7.4453C7.8726 6.38833 8.85159 5.54303 10 5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M9 17V18C9 18.7956 9.31607 19.5587 9.87868 20.1213C10.4413 20.6839 11.2044 21 12 21C12.7956 21 13.5587 20.6839 14.1213 20.1213C14.6839 19.5587 15 18.7956 15 18V17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								</g>
							</svg>
							<div class="notification-badge"></div>
						</a>
					</div>
				</div>
			</div>
			<div class="navbar-boder"></div>
		</header>
		<!--Header End -->
		<!--Account Screen Start -->
		<section id="accout-screen-page">
			<h1 class="d-none">Account Screen</h1>
			<h2 class="d-none">Account</h2>
			<div class="container">
				<div class="accout-screen-page-full mt-32">
					<div class="accout-screen-first">
						<div class="accout-screen-img">
							<img src="{{asset('')}}assets/images/account-screen/client-img.png" alt="client-img">
						</div>
						<div class="accout-screen-content">
							<h3>Jessica Smith</h3>
							<p>Freelancer</p>
						</div>
						<div class="accout-screen-edit">
							<a href="{{route('profile-edit')}}">
								<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
									<mask id="mask0_330_2067" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="18" height="18">
										<rect width="18" height="18" fill="white" />
									</mask>
									<g mask="url(#mask0_330_2067)">
										<path d="M6 15L13.875 7.125C14.072 6.92802 14.2282 6.69416 14.3348 6.43679C14.4415 6.17942 14.4963 5.90357 14.4963 5.625C14.4963 5.34642 14.4415 5.07057 14.3348 4.8132C14.2282 4.55583 14.072 4.32198 13.875 4.125C13.678 3.92802 13.4442 3.77176 13.1868 3.66515C12.9294 3.55855 12.6536 3.50368 12.375 3.50368C12.0964 3.50368 11.8206 3.55855 11.5632 3.66515C11.3058 3.77176 11.072 3.92802 10.875 4.125L3 12V15H6Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M10.125 4.875L13.125 7.875" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M12 13.5H15M13.5 12V15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									</g>
								</svg>
							</a>
						</div>
					</div>
					<div class="accout-screen-second">
						<div class="accout-screen-second-full">
							<a href="{{route('wallet')}}">
								<div class="account-wrapper">
									<div class="account-img">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<mask id="mask0_330_2163" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
												<rect width="24" height="24" fill="white" />
											</mask>
											<g mask="url(#mask0_330_2163)">
												<path d="M17 8V5C17 4.73478 16.8946 4.48043 16.7071 4.29289C16.5196 4.10536 16.2652 4 16 4H6C5.46957 4 4.96086 4.21071 4.58579 4.58579C4.21071 4.96086 4 5.46957 4 6C4 6.53043 4.21071 7.03914 4.58579 7.41421C4.96086 7.78929 5.46957 8 6 8H18C18.2652 8 18.5196 8.10536 18.7071 8.29289C18.8946 8.48043 19 8.73478 19 9V12M19 16V19C19 19.2652 18.8946 19.5196 18.7071 19.7071C18.5196 19.8946 18.2652 20 18 20H6C5.46957 20 4.96086 19.7893 4.58579 19.4142C4.21071 19.0391 4 18.5304 4 18V6" stroke="#FF4C3B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M20 12V16H16C15.4696 16 14.9609 15.7893 14.5858 15.4142C14.2107 15.0391 14 14.5304 14 14C14 13.4696 14.2107 12.9609 14.5858 12.5858C14.9609 12.2107 15.4696 12 16 12H20Z" stroke="#FF4C3B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											</g>
										</svg>
									</div>
									<div class="account-content">
										<p>My Wallet</p>
									</div>
									<div class="account-back-btn">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
												<rect width="24" height="24" fill="white" />
											</mask>
											<g mask="url(#mask0_330_777)">
												<path d="M9 18L15 12L9 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											</g>
										</svg>
									</div>
								</div>
							</a>
							<a href="{{route('my-order')}}">
								<div class="account-wrapper">
									<div class="account-img">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<mask id="mask0_330_2132" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
												<rect width="24" height="24" fill="white" />
											</mask>
											<g mask="url(#mask0_330_2132)">
												<path d="M12 3L20 7.5V16.5L12 21L4 16.5V7.5L12 3Z" stroke="#FF4C3B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M12 12L20 7.5" stroke="#FF4C3B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M12 12V21" stroke="#FF4C3B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M12 12L4 7.5" stroke="#FF4C3B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M16 5.25L8 9.75" stroke="#FF4C3B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											</g>
										</svg>
									</div>
									<div class="account-content">
										<p>My Orders</p>
									</div>
									<div class="account-back-btn">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
												<rect width="24" height="24" fill="white" />
											</mask>
											<g mask="url(#mask0_330_777)">
												<path d="M9 18L15 12L9 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											</g>
										</svg>
									</div>
								</div>
							</a>
							<a href="{{route('payment')}}">
								<div class="account-wrapper">
									<div class="account-img">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<mask id="mask0_330_2148" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
												<rect width="24" height="24" fill="white" />
											</mask>
											<g mask="url(#mask0_330_2148)">
												<path d="M3 8C3 7.20435 3.31607 6.44129 3.87868 5.87868C4.44129 5.31607 5.20435 5 6 5H18C18.7956 5 19.5587 5.31607 20.1213 5.87868C20.6839 6.44129 21 7.20435 21 8V16C21 16.7956 20.6839 17.5587 20.1213 18.1213C19.5587 18.6839 18.7956 19 18 19H6C5.20435 19 4.44129 18.6839 3.87868 18.1213C3.31607 17.5587 3 16.7956 3 16V8Z" stroke="#FF4C3B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M3 10H21" stroke="#FF4C3B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M7 15H7.01" stroke="#FF4C3B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M11 15H13" stroke="#FF4C3B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											</g>
										</svg>
									</div>
									<div class="account-content">
										<p>Payment Methods</p>
									</div>
									<div class="account-back-btn">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
												<rect width="24" height="24" fill="white" />
											</mask>
											<g mask="url(#mask0_330_777)">
												<path d="M9 18L15 12L9 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											</g>
										</svg>
									</div>
								</div>
							</a>
							<a href="{{route('address')}}">
								<div class="account-wrapper">
									<div class="account-img">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<mask id="mask0_330_2104" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
												<rect width="24" height="24" fill="white" />
											</mask>
											<g mask="url(#mask0_330_2104)">
												<path d="M9 10.9997C9 11.7954 9.31607 12.5584 9.87868 13.121C10.4413 13.6836 11.2044 13.9997 12 13.9997C12.7956 13.9997 13.5587 13.6836 14.1213 13.121C14.6839 12.5584 15 11.7954 15 10.9997C15 10.2041 14.6839 9.441 14.1213 8.87839C13.5587 8.31578 12.7956 7.99971 12 7.99971C11.2044 7.99971 10.4413 8.31578 9.87868 8.87839C9.31607 9.441 9 10.2041 9 10.9997Z" stroke="#FF4C3B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M17.657 16.6567L13.414 20.8997C13.039 21.2743 12.5306 21.4848 12.0005 21.4848C11.4704 21.4848 10.962 21.2743 10.587 20.8997L6.343 16.6567C5.22422 15.5379 4.46234 14.1124 4.15369 12.5606C3.84504 11.0087 4.00349 9.40022 4.60901 7.93844C5.21452 6.47665 6.2399 5.22725 7.55548 4.34821C8.87107 3.46918 10.4178 3 12 3C13.5822 3 15.1289 3.46918 16.4445 4.34821C17.7601 5.22725 18.7855 6.47665 19.391 7.93844C19.9965 9.40022 20.155 11.0087 19.8463 12.5606C19.5377 14.1124 18.7758 15.5379 17.657 16.6567Z" stroke="#FF4C3B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											</g>
										</svg>
									</div>
									<div class="account-content">
										<p>Delivery Address</p>
									</div>
									<div class="account-back-btn">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
												<rect width="24" height="24" fill="white" />
											</mask>
											<g mask="url(#mask0_330_777)">
												<path d="M9 18L15 12L9 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											</g>
										</svg>
									</div>
								</div>
							</a>
							<a href="{{route('my-promocode')}}">
								<div class="account-wrapper">
									<div class="account-img">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<mask id="mask0_330_2117" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
												<rect width="24" height="24" fill="white" />
											</mask>
											<g mask="url(#mask0_330_2117)">
												<path d="M3 9C3 8.73478 3.10536 8.48043 3.29289 8.29289C3.48043 8.10536 3.73478 8 4 8H20C20.2652 8 20.5196 8.10536 20.7071 8.29289C20.8946 8.48043 21 8.73478 21 9V11C21 11.2652 20.8946 11.5196 20.7071 11.7071C20.5196 11.8946 20.2652 12 20 12H4C3.73478 12 3.48043 11.8946 3.29289 11.7071C3.10536 11.5196 3 11.2652 3 11V9Z" stroke="#FF4C3B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M12 8V21" stroke="#FF4C3B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M19 12V19C19 19.5304 18.7893 20.0391 18.4142 20.4142C18.0391 20.7893 17.5304 21 17 21H7C6.46957 21 5.96086 20.7893 5.58579 20.4142C5.21071 20.0391 5 19.5304 5 19V12" stroke="#FF4C3B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M7.5 7.99999C6.83696 7.99999 6.20107 7.7366 5.73223 7.26776C5.26339 6.79892 5 6.16304 5 5.49999C5 4.83695 5.26339 4.20107 5.73223 3.73223C6.20107 3.26339 6.83696 2.99999 7.5 2.99999C8.46469 2.98319 9.41003 3.45125 10.2127 4.34316C11.0154 5.23506 11.6383 6.5094 12 7.99999C12.3617 6.5094 12.9846 5.23506 13.7873 4.34316C14.59 3.45125 15.5353 2.98319 16.5 2.99999C17.163 2.99999 17.7989 3.26339 18.2678 3.73223C18.7366 4.20107 19 4.83695 19 5.49999C19 6.16304 18.7366 6.79892 18.2678 7.26776C17.7989 7.7366 17.163 7.99999 16.5 7.99999" stroke="#FF4C3B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											</g>
										</svg>
									</div>
									<div class="account-content">
										<p>Promocodes & Gift Cards</p>
									</div>
									<div class="account-back-btn">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
												<rect width="24" height="24" fill="white" />
											</mask>
											<g mask="url(#mask0_330_777)">
												<path d="M9 18L15 12L9 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											</g>
										</svg>
									</div>
								</div>
							</a>
							<a href="{{route('logouts')}}">
								<div class="account-wrapper">
									<div class="account-img">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<mask id="mask0_330_2091" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
												<rect width="24" height="24" fill="white" />
											</mask>
											<g mask="url(#mask0_330_2091)">
												<path d="M14 8V6C14 5.46957 13.7893 4.96086 13.4142 4.58579C13.0391 4.21071 12.5304 4 12 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6V18C3 18.5304 3.21071 19.0391 3.58579 19.4142C3.96086 19.7893 4.46957 20 5 20H12C12.5304 20 13.0391 19.7893 13.4142 19.4142C13.7893 19.0391 14 18.5304 14 18V16" stroke="#FF4C3B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M7 12H21L18 9M18 15L21 12" stroke="#FF4C3B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											</g>
										</svg>
									</div>
									<div class="account-content">
										<p>Logout</p>
									</div>
									<div class="account-back-btn">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
												<rect width="24" height="24" fill="white" />
											</mask>
											<g mask="url(#mask0_330_777)">
												<path d="M9 18L15 12L9 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											</g>
										</svg>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--SideBar Setting Menu -->
		@include('layouts.upnl.header')
		<!--SideBar Setting Menu -->
		
<div class="bottom-tabbar">
			<div class="bottom-tabbar-full">
				<nav>
					<a href="{{route('Index')}}">
						<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<mask id="mask0_330_3221" style="mask-type:alpha"   1maskUnits="userSpaceOnUse" x="0" y="0" width="18" height="18">
								<rect width="18" height="18" fill="white"/>
							</mask>
							<g mask="url(#mask0_330_3221)">
								<path d="M6.09451 10.5C6.42755 11.7939 7.60212 12.75 9 12.75C10.3979 12.75 11.5725 11.7939 11.9055 10.5M8.26327 2.073L3.17654 6.02934C2.83652 6.29381 2.6665 6.42604 2.54402 6.59164C2.43552 6.73833 2.3547 6.90359 2.30552 7.07929C2.25 7.27764 2.25 7.49302 2.25 7.92379V13.35C2.25 14.1901 2.25 14.6101 2.41349 14.931C2.5573 15.2132 2.78677 15.4427 3.06901 15.5865C3.38988 15.75 3.80992 15.75 4.65 15.75H13.35C14.1901 15.75 14.6101 15.75 14.931 15.5865C15.2132 15.4427 15.4427 15.2132 15.5865 14.931C15.75 14.6101 15.75 14.1901 15.75 13.35V7.92379C15.75 7.49302 15.75 7.27764 15.6945 7.07929C15.6453 6.90359 15.5645 6.73833 15.456 6.59164C15.3335 6.42604 15.1635 6.29381 14.8235 6.02934L9.73673 2.073C9.47324 1.86806 9.34149 1.76559 9.19601 1.7262C9.06765 1.69145 8.93235 1.69145 8.80399 1.7262C8.65851 1.76559 8.52677 1.86806 8.26327 2.073Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</g>
						</svg>
						<span>
							Home
						</span>
					</a>
					<a href="{{route('search-product')}}">
						<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<mask id="mask0_330_5977" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="18" height="18">
								<rect width="18" height="18" fill="white"/>
							</mask>
							<g mask="url(#mask0_330_5977)">
								<path d="M7.5 12.75C10.3995 12.75 12.75 10.3995 12.75 7.5C12.75 4.60051 10.3995 2.25 7.5 2.25C4.60051 2.25 2.25 4.60051 2.25 7.5C2.25 10.3995 4.60051 12.75 7.5 12.75Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M15.75 15.75L11.25 11.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</g>
						</svg>
						<span>
							Search
						</span>
					</a>
					<a href="{{route('user.cart')}}" class="active">
						<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<mask id="mask0_330_5464" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="18" height="18">
								<rect width="18" height="18" fill="white"/>
							</mask>
							<g mask="url(#mask0_330_5464)">
								<path d="M3 14C3 14.3978 3.15804 14.7794 3.43934 15.0607C3.72064 15.342 4.10218 15.5 4.5 15.5C4.89782 15.5 5.27936 15.342 5.56066 15.0607C5.84196 14.7794 6 14.3978 6 14C6 13.6022 5.84196 13.2206 5.56066 12.9393C5.27936 12.658 4.89782 12.5 4.5 12.5C4.10218 12.5 3.72064 12.658 3.43934 12.9393C3.15804 13.2206 3 13.6022 3 14Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M11.25 14C11.25 14.3978 11.408 14.7794 11.6893 15.0607C11.9706 15.342 12.3522 15.5 12.75 15.5C13.1478 15.5 13.5294 15.342 13.8107 15.0607C14.092 14.7794 14.25 14.3978 14.25 14C14.25 13.6022 14.092 13.2206 13.8107 12.9393C13.5294 12.658 13.1478 12.5 12.75 12.5C12.3522 12.5 11.9706 12.658 11.6893 12.9393C11.408 13.2206 11.25 13.6022 11.25 14Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M12.75 12.5H4.5V2H3" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M4.5 3.5L15 4.25L14.25 9.5H4.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</g>
						</svg>
						<span>
							Cart(2)
						</span>
					</a>
					<a href="{{route('user.wishlist')}}" >
						<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<mask id="mask0_330_5965" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="18" height="18">
								<rect width="18" height="18" fill="white"/>
							</mask>
							<g mask="url(#mask0_330_5965)">
								<path d="M14.3847 9.43755L8.75975 15.0086L3.13475 9.43755C2.76373 9.07652 2.47148 8.64257 2.27641 8.16303C2.08134 7.6835 1.98767 7.16877 2.0013 6.65126C2.01493 6.13374 2.13557 5.62466 2.35562 5.15606C2.57566 4.68746 2.89035 4.2695 3.27986 3.92849C3.66938 3.58748 4.12528 3.33082 4.61886 3.17467C5.11244 3.01851 5.633 2.96624 6.14777 3.02116C6.66255 3.07607 7.16037 3.23697 7.6099 3.49374C8.05944 3.7505 8.45093 4.09756 8.75975 4.51306C9.0699 4.10057 9.46185 3.75655 9.91107 3.50251C10.3603 3.24847 10.8571 3.08989 11.3704 3.0367C11.8838 2.9835 12.4026 3.03683 12.8943 3.19335C13.3861 3.34987 13.8403 3.60621 14.2284 3.94633C14.6166 4.28645 14.9303 4.70302 15.1501 5.16997C15.3698 5.63693 15.4908 6.14422 15.5055 6.66009C15.5202 7.17596 15.4282 7.6893 15.2353 8.16799C15.0425 8.64669 14.7529 9.08042 14.3847 9.44206" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</g>
						</svg>
						<span>
							Wishlist
						</span>
					</a>
					<a href="{{route('user.account-screen')}}">
						<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<mask id="mask0_330_5961" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="18" height="18">
								<rect width="18" height="18" fill="white"/>
							</mask>
							<g mask="url(#mask0_330_5961)">
								<path d="M15 15.75C15 14.7033 15 14.18 14.8708 13.7541C14.58 12.7953 13.8297 12.045 12.8709 11.7542C12.445 11.625 11.9217 11.625 10.875 11.625H7.125C6.07833 11.625 5.55499 11.625 5.12914 11.7542C4.17034 12.045 3.42003 12.7953 3.12918 13.7541C3 14.18 3 14.7033 3 15.75M12.375 5.625C12.375 7.48896 10.864 9 9 9C7.13604 9 5.625 7.48896 5.625 5.625C5.625 3.76104 7.13604 2.25 9 2.25C10.864 2.25 12.375 3.76104 12.375 5.625Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</g>
						</svg>
						<span>
							Account
						</span>
					</a>
				</nav>
			</div>
		</div>
		<!--Bottom TabBar Section End -->
	</div>
	<script src="{{asset('')}}assets/js/jquery-min-3.6.0.js"></script>
	<script src="{{asset('')}}assets/js/slick.min.js"></script>
	<script src="{{asset('')}}assets/js/bootstrap.bundle.min.js"></script>
	<script src="{{asset('')}}assets/js/custom.js"></script>
</body>
</html>