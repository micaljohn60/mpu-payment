<?php

$email = $_POST['order_email'];
$name = $_POST['customer_name'];
$phone = $_POST['order_phone'];
$prodtitle = $_POST['prodtitle'];
$protcolor = $_POST['protcolor'];
$amount = $_POST['tamount'];
$address = $_POST["order_address"];
$quantity = $_POST["quantity"];
$order_title = $_POST["order_title"];





$price = str_replace( ',', '', $amount );




if( is_numeric( $price ) ) {
    $amount = $price;
}

if (empty($email)) {
    header('Location: https://m9estore.com/');
  }
  else 
  {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>m9estore</title>
    <link rel="stylesheet" type="text/css" href="https://m9estore.com/css/main.css">
    <link rel="stylesheet" type="text/css" href="https://m9estore.com/css/search.css">
    <link rel="stylesheet" type="text/css" href="https://m9estore.com/css/homecarousel.css">
    <link rel="stylesheet" type="text/css" href="https://m9estore.com/css/swipper-container.css">
    <link rel="stylesheet" type="text/css" href="https://m9estore.com/css/keyfeature.css">
    <link rel="stylesheet" type="text/css" href="https://m9estore.com/css/showcase.css">
    <link rel="stylesheet" type="text/css" href="https://m9estore.com/css/teaser.css">
    <link rel="stylesheet" type="text/css" href="https://m9estore.com/css/chatmsg.css">
    <link rel="stylesheet" type="text/css" href="https://m9estore.com/css/floatnavi.css">
    <link rel="stylesheet" type="text/css" href="https://m9estore.com/css/whatnews.css">
      <style>td span{font-size:20px;margin-right: 25px;}
            th span{font-size:30px;margin-right: 25px;}
            tr {height:50px;}
      </style> 
	<title>MPU Payment</title>
</head>
<body>

    <header>

    <div class="gnb js-mobile-open">
		<div class="gnb__dimmed open" style="display: block;"></div>
		<nav class="gnb__nav" role="navigation">
			<div class="gnb__bar">
				<div class="gnb__bar-inner">
					<a href="https://m9estore.com/" an-tr="nv00_gnb--text-logo" an-ca="navigation" an-ac="gnb" an-la="logo" class="gnb__logo">
                                                    <img src="https://m9estore.com/images/Alpha.png" id="logoImg" style="width: 100%; height: auto;">
                                            </a>

					<div class="gnb__mobile-menu">

							<div class="set_language_ph_area">
								<a href="https://m9estore.com/lang/en" class="-btn set_icon_image" role="link" data-cart-url="#">
								<span class="hidden">Language Choose</span>
								<div class="icon">
									<img src="https://m9estore.com/images/en.png">
									<span aria-hidden="true" class="set_language_chose_area">▼</span>

								</div>
							</a>

							<ul class="dropdown_language">
								<li>
									<a href="https://m9estore.com/lang/my"><img src="https://m9estore.com/images/myanmarflag.jpg">
										<span>Burmese</span></a>
								</li>
							</ul>

							</div>

							<a href="javascript:;" class="gnb__cart-btn js-global-cart-btn js-has-carturl js-layer-open" role="button" data-div-id="#layerEmptyCart" an-tr="nv00_gnb—text-depth1" an-ca="navigation" an-ac="gnb" an-la="cart" data-cart-url="#">
								<span class="hidden">Cart</span>
								<svg class="icon" id="cart-bold" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" focusable="false">
									<path d="M72.848 70.25c6.075 0 11 4.925 11 11s-4.925 11-11 11-11-4.925-11-11 4.925-11 11-11zm-35 0c6.075 0 11 4.925 11 11s-4.925 11-11 11-11-4.925-11-11c0-6.074 4.926-11 11-11zm35 7a4 4 0 10.002 8.001 4 4 0 00-.002-8.001zm-35 0a4 4 0 100 8 4 4 0 000-8zM13.892 3.75c2.287 0 4.376 1.55 5.058 3.72l.064.22 2.97 11.187h68.128a4.727 4.727 0 014.661 5.786l-.048.2-9.559 36.291c-.583 2.216-2.618 3.842-4.894 3.944l-.228.005H30.06c-2.287 0-4.377-1.55-5.06-3.72l-.063-.219-13.124-49.413-10.7.006-.004-8 12.782-.007zm72.03 23.127H24.108l8.027 30.226H77.96l7.962-30.226z"></path>
								</svg>
								<span class="badge badge-warning" id="lblCartCount"> 0 </span>
							</a>

						<a class="gnb__search-btn gnb__search-btn-js" href="javascript:void(0)" aria-haspopup="true" role="button" an-tr="nv00_gnb--image-search" an-ca="navigation" an-ac="gnb" an-la="search">
							<span class="hidden">Search</span>
							<svg class="icon" id="search-bold" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" focusable="false">
								<path d="M40.581 4.09c20.126 0 36.5 16.374 36.5 36.5a36.325 36.325 0 01-7.963 22.733l22.8 22.948-5.674 5.639-22.767-22.913a36.327 36.327 0 01-22.896 8.093c-20.126 0-36.5-16.374-36.5-36.5s16.374-36.5 36.5-36.5zm0 8c-15.715 0-28.5 12.785-28.5 28.5s12.785 28.5 28.5 28.5 28.5-12.785 28.5-28.5-12.785-28.5-28.5-28.5z"></path>
							</svg>
						</a>
						<a class="gnb__menu-btn js-gnb-menu-btn" href="javascript:void(0)" aria-haspopup="true" role="button" an-tr="nv00_gnb--image-action" an-ca="navigation" an-ac="gnb" an-la="gnb:open"><span>Open Menu</span>
							<svg class="icon" id="menu-bold" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" focusable="false">
								<path d="M83 70v8H13v-8h70zm0-26v8H13v-8h70zm0-26v8H13v-8h70z"></path>
							</svg>
						</a>
					</div>

					<div class="gnb__menu-wrap active" style="">
						<div class="gnb__depth1-container">
							<div class="gnb__main">
								<ul class="gnb__depth1" role="menubar">

			<li class="gnb__depth1-menu" role="presentation">
							<a class="gnb__depth1-link" href="https://m9estore.com/" role="menuitem" an-tr="nv00_gnb--click-depth1" an-ca="navigation" an-ac="gnb" an-la="promotions"><span class="gnb__depth1-link-text">Home</span></a>

						</li>

			<li class="gnb__depth1-menu has-depth-menu active" role="presentation">

				<a class="gnb__depth1-link active" href="javascript:void(0)" role="menuitem" an-tr="nv00_gnb--hover-depth1" an-ca="navigation" an-ac="gnb" an-la="mobile">
					<span class="gnb__depth1-link-text">Mobile Phone</span>
					<svg class="icon icon--next" id="next-bold" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" focusable="false">
						<path d="M35.757 84.389l-5.533-5.778 31.982-30.612L30.224 17.39l5.533-5.779 38.018 36.388z"></path>
					</svg>
				</a>
				<div class="gnb__depth2-wrap" style="visibility: visible;">
					<div class="gnb__depth-back-wrap">
						<a class="gnb__depth-back" href="javascript:;">
							<svg class="icon icon--back" id="backward-bold" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" focusable="false">
								<path d="M40.544 11.613l5.538 5.774L18.335 44l75.054.001v8H18.337l27.745 26.612-5.538 5.774L2.611 48l37.933-36.387z"></path>
							</svg>
							<span class="hidden">Back to 1 Depth Menu</span>
						</a>
					</div>
					<div class="gnb__depth2-inner active" style="height: 672px; transition-duration: 0.5s;">
						<div class="gnb__depth2-title-wrap">
							<strong class="gnb__depth2-title">
									<a class="gnb__depth2-title-link" href="#" an-tr="nv00_gnb--click-depth1" an-ca="navigation" an-ac="gnb" an-la="mobile">Mobile Phone</a>
							</strong>
						</div>
						<ul class="gnb__depth2 active" role="menu">

							<li class="gnb__depth2-menu has-depth-menu" role="presentation">
								<a class="gnb__depth2-link" href="javascript:void(0)" role="menuitem" an-tr="nv00_gnb--hover-depth2" an-ca="navigation" an-ac="gnb" an-la="mobile:what is new">
									<span class="gnb__depth2-link-text">
										What's&nbsp;New
									</span>
									<svg class="icon icon--next" id="next-regular" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" focusable="false" style="">
										<path d="M31.828 16.306l3.457-3.612L72.172 48 35.285 83.306l-3.457-3.612L64.941 48z"></path>
									</svg>
									<svg class="icon icon--dropdown" id="open-down-bold" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" focusable="false">
										<path d="M48 73.254L11.651 36.361l5.698-5.614L48 61.855l30.651-31.108 5.698 5.614z"></path>
									</svg>
								</a>
								<div class="gnb__depth3-wrap">
									<div class="gnb__depth3-inner">
										<ul class="gnb__depth3" role="menu">
																					</ul>
									</div>
								</div>
							</li>

															<li class="gnb__depth2-menu has-depth-menu" role="presentation" data-type-code="23150000" data-group-code="23000000">
									<a class="gnb__depth2-link" href="javascript:void(0)" role="menuitem" an-tr="nv00_gnb--hover-depth2" an-ca="navigation" an-ac="gnb" an-la="mobile:smartphones">
										<span class="gnb__depth2-link-text">
											Smart Phone
										</span>
										<svg class="icon icon--next" id="next-regular" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" focusable="false" style="">
											<path d="M31.828 16.306l3.457-3.612L72.172 48 35.285 83.306l-3.457-3.612L64.941 48z"></path>
										</svg>
										<svg class="icon icon--dropdown" id="open-down-bold" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" focusable="false">
											<path d="M48 73.254L11.651 36.361l5.698-5.614L48 61.855l30.651-31.108 5.698 5.614z"></path>
										</svg>
									</a>
									<div class="gnb__depth3-wrap">
										<div class="gnb__depth3-inner">
											<ul class="gnb__depth3" role="menu">
												<li class="gnb__depth3-menu" role="presentation">

														<a class="gnb__depth3-link" href="https://m9estore.com/overview/smart-phone" role="menuitem" an-tr="nv00_gnb--text-depth3" an-ca="navigation" an-ac="gnb" an-la="mobile:smartphones:overview">
															<span class="gnb__depth3-link-text">
																Overview
															</span>
														</a>

												</li>
																									<li class="gnb__depth3-menu" role="presentation">

														<a class="gnb__depth3-link" href="https://m9estore.com/shop_page/smart-phone/galaxy-z" role="menuitem" an-tr="nv00_gnb--text-depth3" an-ca="navigation" an-ac="gnb" an-la="mobile:smartphones:galaxy z">
															<span class="gnb__depth3-link-text">
																Galaxy Z
															</span>
														</a>
													</li>
																									<li class="gnb__depth3-menu" role="presentation">

														<a class="gnb__depth3-link" href="https://m9estore.com/shop_page/smart-phone/galaxy-s" role="menuitem" an-tr="nv00_gnb--text-depth3" an-ca="navigation" an-ac="gnb" an-la="mobile:smartphones:galaxy z">
															<span class="gnb__depth3-link-text">
																Galaxy S
															</span>
														</a>
													</li>
																									<li class="gnb__depth3-menu" role="presentation">

														<a class="gnb__depth3-link" href="https://m9estore.com/shop_page/smart-phone/galaxy-note" role="menuitem" an-tr="nv00_gnb--text-depth3" an-ca="navigation" an-ac="gnb" an-la="mobile:smartphones:galaxy z">
															<span class="gnb__depth3-link-text">
																Galaxy Note
															</span>
														</a>
													</li>
																									<li class="gnb__depth3-menu" role="presentation">

														<a class="gnb__depth3-link" href="https://m9estore.com/shop_page/smart-phone/galaxy-a" role="menuitem" an-tr="nv00_gnb--text-depth3" an-ca="navigation" an-ac="gnb" an-la="mobile:smartphones:galaxy z">
															<span class="gnb__depth3-link-text">
																Galaxy A
															</span>
														</a>
													</li>
																							</ul>
										</div>
									</div>
								</li>
															<li class="gnb__depth2-menu has-depth-menu" role="presentation" data-type-code="23150000" data-group-code="23000000">
									<a class="gnb__depth2-link" href="javascript:void(0)" role="menuitem" an-tr="nv00_gnb--hover-depth2" an-ca="navigation" an-ac="gnb" an-la="mobile:smartphones">
										<span class="gnb__depth2-link-text">
											Watches
										</span>
										<svg class="icon icon--next" id="next-regular" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" focusable="false" style="">
											<path d="M31.828 16.306l3.457-3.612L72.172 48 35.285 83.306l-3.457-3.612L64.941 48z"></path>
										</svg>
										<svg class="icon icon--dropdown" id="open-down-bold" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" focusable="false">
											<path d="M48 73.254L11.651 36.361l5.698-5.614L48 61.855l30.651-31.108 5.698 5.614z"></path>
										</svg>
									</a>
									<div class="gnb__depth3-wrap">
										<div class="gnb__depth3-inner">
											<ul class="gnb__depth3" role="menu">
												<li class="gnb__depth3-menu" role="presentation">

														<a class="gnb__depth3-link" href="https://m9estore.com/overview/watches" role="menuitem" an-tr="nv00_gnb--text-depth3" an-ca="navigation" an-ac="gnb" an-la="mobile:smartphones:overview">
															<span class="gnb__depth3-link-text">
																Overview
															</span>
														</a>

												</li>
																									<li class="gnb__depth3-menu" role="presentation">

														<a class="gnb__depth3-link" href="https://m9estore.com/shop_page/watches/galaxy-watch" role="menuitem" an-tr="nv00_gnb--text-depth3" an-ca="navigation" an-ac="gnb" an-la="mobile:smartphones:galaxy z">
															<span class="gnb__depth3-link-text">
																Galaxy Watch3
															</span>
														</a>
													</li>
																							</ul>
										</div>
									</div>
								</li>
															<li class="gnb__depth2-menu has-depth-menu" role="presentation" data-type-code="23150000" data-group-code="23000000">
									<a class="gnb__depth2-link" href="javascript:void(0)" role="menuitem" an-tr="nv00_gnb--hover-depth2" an-ca="navigation" an-ac="gnb" an-la="mobile:smartphones">
										<span class="gnb__depth2-link-text">
											Audio
										</span>
										<svg class="icon icon--next" id="next-regular" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" focusable="false" style="">
											<path d="M31.828 16.306l3.457-3.612L72.172 48 35.285 83.306l-3.457-3.612L64.941 48z"></path>
										</svg>
										<svg class="icon icon--dropdown" id="open-down-bold" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" focusable="false">
											<path d="M48 73.254L11.651 36.361l5.698-5.614L48 61.855l30.651-31.108 5.698 5.614z"></path>
										</svg>
									</a>
									<div class="gnb__depth3-wrap">
										<div class="gnb__depth3-inner">
											<ul class="gnb__depth3" role="menu">
												<li class="gnb__depth3-menu" role="presentation">

														<a class="gnb__depth3-link" href="https://m9estore.com/overview/audio" role="menuitem" an-tr="nv00_gnb--text-depth3" an-ca="navigation" an-ac="gnb" an-la="mobile:smartphones:overview">
															<span class="gnb__depth3-link-text">
																Overview
															</span>
														</a>

												</li>
																									<li class="gnb__depth3-menu" role="presentation">

														<a class="gnb__depth3-link" href="https://m9estore.com/shop_page/audio/Galaxy%20Buds%20Live" role="menuitem" an-tr="nv00_gnb--text-depth3" an-ca="navigation" an-ac="gnb" an-la="mobile:smartphones:galaxy z">
															<span class="gnb__depth3-link-text">
																Galaxy Buds Live
															</span>
														</a>
													</li>
																							</ul>
										</div>
									</div>
								</li>
															<li class="gnb__depth2-menu has-depth-menu active" role="presentation" data-type-code="23150000" data-group-code="23000000">
									<a class="gnb__depth2-link" href="javascript:void(0)" role="menuitem" an-tr="nv00_gnb--hover-depth2" an-ca="navigation" an-ac="gnb" an-la="mobile:smartphones">
										<span class="gnb__depth2-link-text">
											Accessories
										</span>
										<svg class="icon icon--next" id="next-regular" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" focusable="false" style="">
											<path d="M31.828 16.306l3.457-3.612L72.172 48 35.285 83.306l-3.457-3.612L64.941 48z"></path>
										</svg>
										<svg class="icon icon--dropdown" id="open-down-bold" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" focusable="false">
											<path d="M48 73.254L11.651 36.361l5.698-5.614L48 61.855l30.651-31.108 5.698 5.614z"></path>
										</svg>
									</a>
									<div class="gnb__depth3-wrap">
										<div class="gnb__depth3-inner">
											<ul class="gnb__depth3" role="menu">
												<li class="gnb__depth3-menu" role="presentation">

														<a class="gnb__depth3-link" href="https://m9estore.com/overview/accessories" role="menuitem" an-tr="nv00_gnb--text-depth3" an-ca="navigation" an-ac="gnb" an-la="mobile:smartphones:overview">
															<span class="gnb__depth3-link-text">
																Overview
															</span>
														</a>

												</li>
																							</ul>
										</div>
									</div>
								</li>
													

						</ul>
						<div class="gnb__feature-container">
							<a class="gnb__feature-container-link" href="#" an-tr="nv00_gnb--cta-feature" an-ca="navigation" an-ac="gnb" an-la="feature image:mobile:galaxy note20 and 20 ultra 5g:learn more">
								<div class="image">
									<img class="image__preview responsive-img" data-desktop-src="https://m9estore.com/images/All_GNB_624X624_canvas_featured.webp" data-mobile-src="https://m9estore.com/images/All_GNB_624X624_canvas_featured.webp" alt="" src="https://m9estore.com/images/All_GNB_624X624_canvas_featured.webp" style="visibility: hidden;">
									<img class="image__main responsive-img" data-desktop-src="https://m9estore.com/images/All_GNB_624X624_canvas_featured.webp" data-mobile-src="https://m9estore.com/images/All_GNB_624X624_canvas_featured.webp" alt="" style="" src="https://m9estore.com/images/All_GNB_624X624_canvas_featured.webp">
								</div>
								<div class="gnb__feature-container-contents">
									<p class="gnb__feature-container-description">Galaxy Note20 | 20 Ultra 5G</p>
									<span class="cta cta--underline cta--black" href="#">Learn more</span>
								</div>
							</a>

						</div>
						<a class="gnb__depth2-close" href="javascript:void(0)" role="button" an-tr="nv00_gnb--image-action" an-ca="navigation" an-ac="gnb" an-la="gnb:close" style="visibility: visible; opacity: 1;">
							<span class="hidden">Open Menu</span>
							<svg class="icon" id="delete-bold" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" focusable="false">
								<path d="M79.17 11.17L48 42.34 16.83 11.17l-5.66 5.66L42.34 48 11.17 79.17l5.66 5.66L48 53.66l31.17 31.17 5.66-5.66L53.66 48l31.17-31.17z"></path>
							</svg>
						</a>
					</div>
				</div>
			</li>




			<li class="gnb__depth1-menu has-depth-menu" role="presentation">
				<a class="gnb__depth1-link" href="javascript:void(0)" role="menuitem" an-tr="nv00_gnb--hover-depth1" an-ca="navigation" an-ac="gnb" an-la="tv and audio">
					<span class="gnb__depth1-link-text">Tablet</span>
					<svg class="icon icon--next" id="next-bold" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" focusable="false">
						<path d="M35.757 84.389l-5.533-5.778 31.982-30.612L30.224 17.39l5.533-5.779 38.018 36.388z"></path>
					</svg>
				</a>
				<div class="gnb__depth2-wrap">
					<div class="gnb__depth-back-wrap">
						<a class="gnb__depth-back" href="javascript:;">
							<svg class="icon icon--back" id="backward-bold" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" focusable="false">
								<path d="M40.544 11.613l5.538 5.774L18.335 44l75.054.001v8H18.337l27.745 26.612-5.538 5.774L2.611 48l37.933-36.387z"></path>
							</svg>
							<span class="hidden">Back to 1 Depth Menu</span>
						</a>
					</div>
					<div class="gnb__depth2-inner">
						<div class="gnb__depth2-title-wrap">
							<strong class="gnb__depth2-title">

									<span class="gnb__depth2-title-text">Tablet</span>

							</strong>
						</div>
						<ul class="gnb__depth2" role="menu">

							<li class="gnb__depth2-menu " role="presentation" data-group-code="26000000">
								<a class="gnb__depth2-link" href="https://m9estore.com/overview/tablet" role="menuitem" an-tr="nv00_gnb--hover-depth2" an-ca="navigation" an-ac="gnb" an-la="tv and audio:smart ways to buy">
									<span class="gnb__depth2-link-text">
										Overview
									</span>
								</a>
							</li>
														<li class="gnb__depth2-menu " role="presentation" data-group-code="26000000">
								<a class="gnb__depth2-link" href="https://m9estore.com/shop_page/tablet/galaxy-tab-s" role="menuitem" an-tr="nv00_gnb--hover-depth2" an-ca="navigation" an-ac="gnb" an-la="tv and audio:smart ways to buy">
									<span class="gnb__depth2-link-text">
										Galaxy Tab S
									</span>
								</a>
							</li>
														<li class="gnb__depth2-menu " role="presentation" data-group-code="26000000">
								<a class="gnb__depth2-link" href="https://m9estore.com/shop_page/tablet/galaxy-tab-a" role="menuitem" an-tr="nv00_gnb--hover-depth2" an-ca="navigation" an-ac="gnb" an-la="tv and audio:smart ways to buy">
									<span class="gnb__depth2-link-text">
										Galaxy Tab A
									</span>
								</a>
							</li>
														<li class="gnb__depth2-menu " role="presentation" data-group-code="26000000">
								<a class="gnb__depth2-link" href="https://m9estore.com/shop_page/tablet/tab_accessories" role="menuitem" an-tr="nv00_gnb--hover-depth2" an-ca="navigation" an-ac="gnb" an-la="tv and audio:smart ways to buy">
									<span class="gnb__depth2-link-text">
										Accessories
									</span>
								</a>
							</li>
													</ul>
						<div class="gnb__feature-container">
							<a class="gnb__feature-container-link" href="#" an-tr="nv00_gnb--cta-feature" an-ca="navigation" an-ac="gnb" an-la="feature image:tv and audio:unrivalled qled 8k:learn more">
								<div class="image">
									<img class="image__preview responsive-img" data-desktop-src="https://m9estore.com/images/2020-QLED-8K_624x624.webp" data-mobile-src="https://m9estore.com/images/2020-QLED-8K_624x624.webp" src="https://m9estore.com/images/2020-QLED-8K_624x624.webp" style="visibility: hidden;">
									<img class="image__main responsive-img" data-desktop-src="https://m9estore.com/images/2020-QLED-8K_624x624.webp" data-mobile-src="https://m9estore.com/images/2020-QLED-8K_624x624.webp" alt="" style="" src="https://m9estore.com/images/2020-QLED-8K_624x624.webp">
								</div>
								<div class="gnb__feature-container-contents">
									<p class="gnb__feature-container-description">Unrivalled QLED 8K</p>
									<span class="cta cta--underline cta--black" href="#">Learn more</span>
								</div>
							</a>

						</div>
						<a class="gnb__depth2-close" href="javascript:void(0)" role="button" an-tr="nv00_gnb--image-action" an-ca="navigation" an-ac="gnb" an-la="gnb:close" style="visibility: hidden;">
							<span class="hidden">Open Menu</span>
							<svg class="icon" id="delete-bold" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" focusable="false">
								<path d="M79.17 11.17L48 42.34 16.83 11.17l-5.66 5.66L42.34 48 11.17 79.17l5.66 5.66L48 53.66l31.17 31.17 5.66-5.66L53.66 48l31.17-31.17z"></path>
							</svg>
						</a>
					</div>
				</div>
			</li>



<li class="gnb__depth1-menu has-depth-menu" role="presentation">
				<a class="gnb__depth1-link" href="javascript:void(0)" role="menuitem" an-tr="nv00_gnb--hover-depth1" an-ca="navigation" an-ac="gnb" an-la="home appliances">
					<span class="gnb__depth1-link-text">Wearable &amp; Accessories</span>
					<svg class="icon icon--next" id="next-bold" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" focusable="false">
						<path d="M35.757 84.389l-5.533-5.778 31.982-30.612L30.224 17.39l5.533-5.779 38.018 36.388z"></path>
					</svg>
				</a>
				<div class="gnb__depth2-wrap">
					<div class="gnb__depth-back-wrap">
						<a class="gnb__depth-back" href="javascript:;">
							<svg class="icon icon--back" id="backward-bold" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" focusable="false">
								<path d="M40.544 11.613l5.538 5.774L18.335 44l75.054.001v8H18.337l27.745 26.612-5.538 5.774L2.611 48l37.933-36.387z"></path>
							</svg>
							<span class="hidden">Back to 1 Depth Menu</span>
						</a>
					</div>
					<div class="gnb__depth2-inner">
						<div class="gnb__depth2-title-wrap">
							<strong class="gnb__depth2-title">


									<a class="gnb__depth2-title-link" href="#" an-tr="nv00_gnb--click-depth1" an-ca="navigation" an-ac="gnb" an-la="home appliances">Wearable &amp; Accessories</a>


							</strong>
						</div>
						<ul class="gnb__depth2" role="menu">
							<li class="gnb__depth2-menu" role="presentation">
								<a class="gnb__depth2-link" href="https://m9estore.com/overview/wearable-accessories" role="menuitem" an-tr="nv00_gnb--hover-depth2" an-ca="navigation" an-ac="gnb" an-la="home appliances:smart ways to buy ">
									<span class="gnb__depth2-link-text">
										OverView
									</span>
								</a>
							</li>

							

						</ul>
						<div class="gnb__feature-container">
							<a class="gnb__feature-container-link" href="#" an-tr="nv00_gnb--cta-feature" an-ca="navigation" an-ac="gnb" an-la="feature image:home appliances:powerful and complete cleaning with the samsung jet trademark:learn more">
								<div class="image">
									<img class="image__preview responsive-img" data-desktop-src="https://m9estore.com/images/624x624_DA_GNB_JET.webp" data-mobile-src="https://m9estore.com/images/624x624_DA_GNB_JET.webp" alt="" src="https://m9estore.com/images/624x624_DA_GNB_JET.webp" style="visibility: hidden;">
									<img class="image__main responsive-img" data-desktop-src="https://m9estore.com/images/624x624_DA_GNB_JET.webp" data-mobile-src="https://m9estore.com/images/624x624_DA_GNB_JET.webp" alt="" style="" src="https://m9estore.com/images/624x624_DA_GNB_JET.webp">
								</div>
								<div class="gnb__feature-container-contents">
									<p class="gnb__feature-container-description">Powerful and complete cleaning with the Samsung Jet™</p>
									<span class="cta cta--underline cta--black" href="#">Learn more</span>
								</div>
							</a>

						</div>
						<a class="gnb__depth2-close" href="javascript:void(0)" role="button" an-tr="nv00_gnb--image-action" an-ca="navigation" an-ac="gnb" an-la="gnb:close" style="visibility: hidden;">
							<span class="hidden">Open Menu</span>
							<svg class="icon" id="delete-bold" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" focusable="false">
								<path d="M79.17 11.17L48 42.34 16.83 11.17l-5.66 5.66L42.34 48 11.17 79.17l5.66 5.66L48 53.66l31.17 31.17 5.66-5.66L53.66 48l31.17-31.17z"></path>
							</svg>
						</a>
					</div>
				</div>
			</li>

								</ul>
							</div>

				<div class="gnb__sub">

					<ul class="gnb__depth1" role="menubar">

						<li class="gnb__depth1-menu" role="presentation">
						<a class="gnb__depth1-link" href="https://m9estore.com/promotion" role="menuitem" an-tr="nv00_gnb--click-depth1" an-ca="navigation" an-ac="gnb" an-la="promotions"><span class="gnb__depth1-link-text">Promotions</span></a>
						</li>

					</ul>

					<ul class="gnb__utility">
						<li class="gnb__language" style="margin-right : 0px;">
							<a href="https://m9estore.com/lang/en" role="link" data-cart-url="#">
								<img src="https://m9estore.com/images/en.png">
							</a>
						</li>
						<li class="gnb__language" style="margin-right : 0px;">
							<a href="https://m9estore.com/lang/mm">
								<img src="https://m9estore.com/images/myanmarflag.jpg">
							</a>
						</li>
					
											<li class="gnb__login before-login-context">
							<a class="gnb__login-btn" href="javascript:void(0)" role="button" an-tr="nv00_gnb—text-depth1" an-ca="navigation" an-ac="gnb" an-la="login">
								<span class="hidden">Log-In</span>
								<svg class="icon" id="user-bold" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" focusable="false">
									<path d="M48 50c17.346 0 32 14.221 32 31.054V89c0 2.757-2.243 5-5 5H21c-2.757 0-5-2.243-5-5v-7.946C16 64.221 30.654 50 48 50zm0 8c-12.785 0-24 10.773-24 23.054V86h48v-4.946C72 68.773 60.785 58 48 58zm-.002-56c12.133 0 22.003 9.87 22.003 22.001C70 36.131 60.13 46 47.998 46c-12.13 0-21.997-9.869-21.997-21.999C26 11.87 35.867 2 47.998 2zm0 8c-7.718 0-13.997 6.281-13.997 14.001C34 31.72 40.28 38 47.998 38 55.718 38 62 31.72 62 24.001 62 16.281 55.719 10 47.998 10z"></path>
								</svg>
							</a>
							<div class="gnb__login-layer">
								<ul class="gnb__utility-menu">
									<li>
										<a href="https://m9estore.com/login/customer" class="gnb__utility-link " an-tr="nv00_gnb--text-depth2" an-ca="account" an-ac="login" an-la="account:login">Log-In</a>
									</li>
                                    <li>
                                        <a href="https://m9estore.com/register/customer" class="gnb__utility-link " an-tr="nv00_gnb--text-depth2" an-ca="account" an-ac="sign up" an-la="account:sign up">Sign-Up</a>
                                    </li>
								</ul>
							</div>
						</li>
					
					<li class="gnb__cart">

							<a href="javascript:;" class="gnb__cart-btn js-global-cart-btn js-has-carturl js-layer-open" role="link" data-div-id="#layerEmptyCart" an-tr="nv00_gnb—text-depth1" an-ca="navigation" an-ac="gnb" an-la="cart" data-cart-url="//shop.samsung.com/sg/cart">
								<span class="hidden">Cart</span>
								<svg class="icon" id="cart-bold" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" focusable="false">
									<path d="M72.848 70.25c6.075 0 11 4.925 11 11s-4.925 11-11 11-11-4.925-11-11 4.925-11 11-11zm-35 0c6.075 0 11 4.925 11 11s-4.925 11-11 11-11-4.925-11-11c0-6.074 4.926-11 11-11zm35 7a4 4 0 10.002 8.001 4 4 0 00-.002-8.001zm-35 0a4 4 0 100 8 4 4 0 000-8zM13.892 3.75c2.287 0 4.376 1.55 5.058 3.72l.064.22 2.97 11.187h68.128a4.727 4.727 0 014.661 5.786l-.048.2-9.559 36.291c-.583 2.216-2.618 3.842-4.894 3.944l-.228.005H30.06c-2.287 0-4.377-1.55-5.06-3.72l-.063-.219-13.124-49.413-10.7.006-.004-8 12.782-.007zm72.03 23.127H24.108l8.027 30.226H77.96l7.962-30.226z"></path>
								</svg>
								<span class="badge badge-warning" id="lblCartCount"> 0 </span>
							</a>

                    </li>
				
				</ul>

				<div class="gnb__utility-mobile">

					<ul class="gnb__utility-menu before-login-context">
						<li>
							<a href="#e" class="gnb__utility-link loginBtn" an-tr="nv00_gnb--text-depth2" an-ca="account" an-ac="login" an-la="account:login">Log-In</a>
						</li>

						<li>
							<a href="#" class="gnb__utility-link loginBtn" an-tr="nv00_gnb--text-depth2" an-ca="account" an-ac="sign up" an-la="account:sign up">Sign-Up</a>
						</li>
					</ul>

					<strong class="gnb__user-name after-login-context" style="display:none;"><span class="gnb__user-name-inner"></span></strong>
					<ul class="gnb__utility-menu after-login-context" style="display:none;">
						<li>
								<a href="#" class="gnb__utility-link" an-tr="nv00_gnb--text-depth2" an-ca="account" an-ac="my account" an-la="account:my account">My Account</a>

                        </li>
						<li>
								<a href="#" class="gnb__utility-link" an-tr="nv00_gnb--text-depth2" an-ca="account" an-ac="my orders" an-la="account:my orders">Orders</a>

						</li>
						<li>
							<a href="javascript:;" class="gnb__utility-link logoutBtn" an-tr="nv00_gnb--text-depth2" an-ca="account" an-ac="logout" an-la="account:logout">Log Out</a>
						</li>

					</ul>

				</div>

				</div>
						</div>

						<a class="gnb__menu-close" href="javascript:void(0)" role="button" an-tr="nv00_gnb--image-action" an-ca="navigation" an-ac="gnb" an-la="gnb:close">
							<span class="hidden">Open Menu</span>
							<svg class="icon" id="delete-bold" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" focusable="false">
								<path d="M79.17 11.17L48 42.34 16.83 11.17l-5.66 5.66L42.34 48 11.17 79.17l5.66 5.66L48 53.66l31.17 31.17 5.66-5.66L53.66 48l31.17-31.17z"></path>
						</svg>
						</a>
					</div>

					<div class="gnb__mobile-dimmed">
                      <!-- dimmed -->
                    </div>

					<div class="layer_popup" id="confirmPopup" style="display:none;">
						<div id="popup-type02" class="popAlign" style="top: 224px; left: 759px;">
							<div class="popup_wrap">


								<h2 class="pop-tit"></h2>
								<p class="msg-text tc"></p>

								<div class="pop-btn">
									<a href="javascript:void(0)" class="button login-leave-btn" title="No Access OK">OK</a>
								</div>
								<button class="close-button icon-close-x login-leave-btn" data-focus-id="shop-popover-close" data-tab-disable="true" tabindex="0">
									<span class="blind">No Access Close</span>
								</button>
							</div>
						</div>
					</div>
					<div class="layer_popup" style="display: none;">
						<div id="popup_alert" class="popup-nextgen-type popAlign" tabindex="0" data-focus-id="shop-popover-wrap" data-tab-previous="shop-popover-close" style="top: 224px; left: 759px;">
							<div class="popup_wrap">


								<p class="msg-text tc"></p>

								<div class="pop-btn">
									<a href="javascript:void(0);" class="button alert-ok-button" data-popup="close" title="">OK</a>
								</div>
								<button class="close-button icon-close-x" data-focus-id="shop-popover-close" data-tab-next="shop-popover-wrap" data-popup="close" data-tab-disable="true" tabindex="0">
									<span class="blind">Layer Popup Close</span>
								</button>
							</div>
						</div>
					</div>

		            <div class="gnb__mobile-dimmed">
		              <!-- dimmed -->
		            </div>
				</div>
			</div>
		</nav>

		<div class="layer-popup-dim" style="display:none">

		</div>



		<div class="layer-popup gnb-layer_popup-js" id="layerEmptyCart" role="dialog" style="display:none">
			<div class="layer-popup__inner">
								<div class="layer-popup__contents">
					<svg class="icon icon--information" id="info-regular" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" focusable="false">
						<path d="M48 2.5c25.129 0 45.5 20.371 45.5 45.501S73.13 93.5 48 93.5 2.5 73.13 2.5 48.001C2.5 22.871 22.871 2.5 48 2.5zm0 5C25.633 7.5 7.5 25.633 7.5 48.001S25.632 88.5 48 88.5s40.5-18.131 40.5-40.499C88.5 25.633 70.367 7.5 48 7.5zm2.5 31V75h-5V43.5H40v-5h10.5zm-3.502-16.595C49.209 21.905 51 23.737 51 26c0 2.262-1.791 4.095-4.002 4.095C44.79 30.095 43 28.262 43 26c0-2.263 1.79-4.095 3.998-4.095z"></path>
					</svg>
					<p class="layer-popup__information-text"> Your cart is empty.</p>

				</div>
				<div class="layer-popup__cta-wrap">
					<div class="layer-popup__cta">
						<a class="cta cta--contained cta--black gnb-js-layer-close" href="javascript:;" title="" an-tr="nv00_gnb--text-cart" an-ca="other interaction" an-ac="cart is empty:ok" an-la="cart is empty:ok">OK</a>
					</div>

				</div>
								<button type="button" class="layer-popup__close">
					<span class="hidden">Layer Popup Close</span>
					<svg class="icon" id="delete-bold" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" focusable="false">
						<path d="M79.17 11.17L48 42.34 16.83 11.17l-5.66 5.66L42.34 48 11.17 79.17l5.66 5.66L48 53.66l31.17 31.17 5.66-5.66L53.66 48l31.17-31.17z"></path>
					</svg>
				</button>
			</div>
		</div>

		<section class="gnb-search" tabindex="0" role="dialog" aria-modal="true" style="display: none;">
			<div class="gnb-search__dimmed"></div>

			<div class="gnb-search__contents">
				<h2 class="text-title">What are you looking for?</h2>

				<form action="javascript:;" class="gnb-search__form" role="search" autocomplete="off">
					<fieldset>
						<legend>Search form</legend>
						<div class="gnb-search__input-wrap">
						<button type="button" class="gnb-search__input-btn--close">Close</button>
						<input type="text" name="search" class="gnb-search__input" an-tr="search layer--search bar-submit" an-ca="search" an-ac="search layer" an-la="search bar:keyword submit">
						<span class="gnb-search__placeholder">Galaxy Note20</span>
						<button type="button" class="gnb-search__input-btn--cancel">Cancel</button>
						<button type="submit" class="gnb-search__input-btn--submit" an-tr="search layer--Image-submit" an-ca="search" an-ac="search layer" an-la="search bar:keyword submit">Search</button>
						</div>
					</fieldset>
				</form>

				<div class="gnb-search__result-wrap" style="max-height: 448px;">


					<div class="gnb-search__suggested gnb-search__suggested--hide">
						<div class="gnb-search__result-title-wrap">
							<p class="gnb-search__result-title">Suggested Searches</p>
						</div>
						<ul class="gnb-search__result-list">
							<li class="gnb-search__result-item">
								<a href="#">galaxy buds+ bts edition</a>
							</li>
						</ul>
					</div>



					<div class="gnb-search__no-suggestions gnb-search__no-suggestions--hide">
						<div class="gnb-search__result-title-wrap">
							<p class="gnb-search__result-title">No Suggestions</p>
						</div>
					</div>



					<div class="gnb-search__history gnb-search__history--hide">
						<div class="gnb-search__result-title-wrap">
							<p class="gnb-search__result-title">Search History</p>
							<button class="gnb-search__btn--history-clear" an-tr="search layer--text-link" an-ca="search" an-ac="search layer" an-la="search history:clear all">
								Clear All
							</button>
						</div>
						<ul class="gnb-search__result-list">

						</ul>
					</div>



					<div class="gnb-search__related gnb-search__related--hide">
						<div class="gnb-search__result-title-wrap">
							<p class="gnb-search__result-title">Related Searches</p>
						</div>
						<ul class="gnb-search__result-list">

						</ul>
					</div>



					<div class="gnb-search__matched gnb-search__matched--hide">
						<div class="gnb-search__result-title-wrap">
							<p class="gnb-search__result-title">Matched Contents</p>
						</div>
						<ul class="gnb-search__result-list">


						</ul>
					</div>

				</div>
				<button class="gnb-search__btn--close" an-tr="search layer--Image-link" an-ca="search" an-ac="search layer" an-la="close">Cancel</button>
			</div>
		</section>
	</div>
	<!-- content layout -->
</header>
<div style="margin-top: 100px;">
    <center>
<table>

	<tbody>
	<tr>
		<th><span>Your Order</span></th>
		<th><span>-</span></th>
		<th><span><?php echo $prodtitle; ?></span></th>
	</tr>
	<tr>
		<td><span>Product Color</span></td>
		<td><span>-</span></td>
		<td><span><?php echo $protcolor; ?></span></td>
	</tr>
	<tr>
		<td><span>Price</span></td>
		<td><span>-</span></td>
		<td><span><?php echo $amount; ?> MMK</span></td>
	</tr>
	<tr>
		<td><span>Name</span></td>
		<td><span>-</span></td>
		<td><span><?php echo $name; ?></span></td>
	</tr>
	
	<tr>
		<td><span>Your Phone No.</span></td>
		<td><span>-</span></td>
		<td><span><?php echo $phone; ?></span></td>
	</tr>
	<tr>
		<td><span>Your email</span></td>
		<td><span>-</span></td>
		<td><span><?php echo $email; ?></span></td>
	</tr>
	
	</tbody>


</table>

<div style="display:none;">
	<Form method="post" action="https://www.mpuecomuat.com:60145/UAT/Payment/Payment/pay">
	
	
	      <table>
	<tr>
		<td>Version</td>
		<td>:</td>
		<td><input type="text" id="merchantID" name="merchantID" value="203104001305218" /></td>
	</tr>
		      <tr>
		<td>Merchant ID</td>
		<td>:</td>
		<td><input type="text" id="Version" name="Version" value="2.0" /></td>
	</tr>
	<tr>
		<td>InvoiceNo.</td>
		<td>:</td>
		<td><input type="text" id="invoiceNo" name="invoiceNo" value="<?php
		$permitted_chars = 'm9estore2020INV';
		$inv = substr(str_shuffle($permitted_chars), 0, 20);
		echo $inv;
		?>" /></td>
	</tr>
	<tr>
		<td>ProductDesc</td>
		<td>:</td>
		<td><input type="text" id="productDesc" name="productDesc" value="M9Products" /></td>
	</tr>
	<tr>
		<td>Amount</td>
		<td>:</td>
		<td><input type="text" id="amount" name="amount" value="<?php
		$val = str_pad($price,10,"0", STR_PAD_LEFT);
		$ramonunt = $val."00";

		echo $ramonunt;?>" /> </td>
	</tr>
		      <tr>
		<td>CurrencyCode</td>
		<td>:</td>
		
	</tr>
	<tr>
		<td>CurrencyCode</td>
		<td>:</td>
		<td><input type="text" id="currencyCode" name="currencyCode" value="104" /> </td>
	</tr>
	<tr>
		<td>Name</td>
		<td>:</td>
		<td><input type="text" id="userDefined1" name="userDefined1" value="<?php echo $name; ?>"/></td>
	</tr>
	<tr>
		<td>Products</td>
		<td>:</td>
		<td><input type="text" id="userDefined2" name="userDefined2" value='<?php echo $phone; ?>'/></td>
	</tr>
	<tr>
		<td>Color</td>
		<td>:</td>
		<td><input type="text" id="userDefined3" name="userDefined3" value="<?php echo $prodtitle; ?>"/></td>
	</tr>
	<tr>
		<td>HashValue</td>
		<td>:</td>
		<td><input type="text" id="hashValue" name="hashValue" value="<?php 
			
			
		$_form_data1 = array(
		    'merchantID' => '201104000003541',
		    'invoiceNo' => $inv,
		    'productDesc' => 'M9Products',
		    'amount' => $ramonunt,
		    'currencyCode' => 104,
		    'userDefined1'=> $name,
		    'userDefined2' => $phone,
		    'userDefined3' => $prodtitle. $protcolor,
		    );
		function getHash($data)
		{
		    asort($data, SORT_STRING); // sorting values by ASCII
		    $str = implode('', $data);
		    $signData = hash_hmac('sha1', $str, 'T8WF3PMMYQEXK5DBZYRC4OHUE8CB44SG', false);
		    $signData = strtoupper($signData);
		    return urlencode($signData);
		}
		$hashValue = getHash($_form_data1);

		echo $hashValue;	
		?>" /></td>
	</tr>
</table>
	</div>
	<div style="max-width: 400px;">
	    <div>
	<input type="submit" name="Submit" value="Pay With MPU" style="
    background-color: #000 !important;
    color: #fff !important;
    padding: 10px 24px 11px 24px;
    border-radius: 20px;
    margin-right: 40px;
   float: right;
"></div>
</Form>
<div style="display:none;">
<form id="payment_form" action="payment_confirmation.php" method="post">
 <input type="hidden" name="user_name" value="<?php echo $name; ?>">
	<input type="hidden" name="quantity" value="<?php echo $quantity; ?>">
	<input type="hidden" name="order_title" value="<?php echo $order_title; ?>">
	 <input type="hidden" name="user_address" value="<?php echo $address; ?>">
    <input type="hidden" name="access_key" value="9d5568c01f83317bb1dc7ae74a3484ac">
    <input type="hidden" name="profile_id" value="037B9FFD-7D2D-4F25-B2C4-3E6C6D2D487E">
    <input type="hidden" name="transaction_uuid" value="<?php echo uniqid() ?>">
    <input type="hidden" name="signed_field_names" value="access_key,profile_id,transaction_uuid,signed_field_names,unsigned_field_names,signed_date_time,locale,transaction_type,reference_number,amount,currency">
<input type="hidden" name="unsigned_field_names">

         
    <input type="hidden" name="signed_date_time" value="<?php echo gmdate("Y-m-d\TH:i:s\Z"); ?>">
    <input type="hidden" name="locale" value="en">
    <fieldset>
        
        <div id="paymentDetailsSection" class="section">
 <input type="text" name="bill_to_forename" value="<?php echo $name; ?>"><br>
<input type="text" name="bill_to_surname" value="<?php echo $last_name; ?>"><br>
<input type="email" name="bill_to_email" value="<?php echo $email; ?>"><br>
 <input type="text" name="bill_to_address_line1" value="<?php echo $address; ?>"><br>
 <input type="text" name="bill_to_phone" value="<?php echo $phone; ?>"><br>
<input type="text" name="transaction_type" size="25" value="authorization"><br/>
<input type="text" name="reference_number" size="25" value="<?php 
		$permitted_chars = 'm9estore2020INV';
		$inv = substr(str_shuffle($permitted_chars), 0, 20);
		echo $inv;
		?>"><br/>
 <input type="text" name="item_#_name" value="<?php echo $prodtitle; ?>"><br>
 <input type="text" name="item_#_code" value="<?php echo $protcolor; ?>"><br>
 <input type="text" name="item_#_quantity" value="<?php echo $qty; ?>"><br>
 <input type="text" name="line_item_count" value="<?php echo $qty; ?>"><br>
 <input type="text" name="amount" size="25" value="<?php echo $amount; ?>"><br/>
            <span>currency:</span><input type="text" name="currency" size="25" value="MMK"><br/>
       </div>
    </fieldset>



</div>
    <div>
<input type="submit" id="submit" name="submit" value="Pay With Visa/Master" style="
    background-color: #000 !important;
    color: #fff !important;
    padding: 10px 24px 11px 24px;
    border-radius: 20px;
   
"/>
</div>
</form>
<div>
<button onclick="goBack()" style="
    background-color: #000 !important;
    color: #fff !important;
    padding: 10px 24px 11px 24px;
    border-radius: 20px;
    margin-top:20px;
">Go Back</button>
</div>
</div>
</div>
</center>
<footer class="footer" style="margin-top: 100px;">
	<div class="footer">
		<div class="footer-column">
			<div class="footer-column__item footer-column__item--flex ">
				<div class="footer-category">
					<strong class="footer-category__title">Product &amp; Service</strong>
					<a class="footer-category__anchor" href="javascript:void(0);" role="button">
						<span class="hidden">open</span>
						<svg class="icon" focusable="false" viewBox="0 0 96 96">
							<path d="M79.719 32.342l3.562 3.509L48 71.658 12.719 35.851l3.562-3.509L48 64.534z"></path>
						</svg>
					</a>
					<div class="footer-category__list-wrap">
						<ul class="footer-category__list" style="height: 226.8px;">
							<li class="footer-category__item">
								<a class="footer-category__link" href="https://m9estore.com/sg/smartphones/" title="Smartphones" an-tr="nv01_footer sitemap--cta-menu" an-ca="navigation" an-ac="footer" an-la="products and service:smartphones ">Smartphones</a>

							</li>

							<li class="footer-category__item">
								<a class="footer-category__link" href="https://m9estore.com/sg/tablets/" title="Tablets" an-tr="nv01_footer sitemap--cta-menu" an-ca="navigation" an-ac="footer" an-la="products and service:tablets">Tablets</a>

							</li>

							<li class="footer-category__item">
								<a class="footer-category__link" href="https://m9estore.com/sg/audio-sound/" title="Audio Sound" an-tr="nv01_footer sitemap--cta-menu" an-ca="navigation" an-ac="footer" an-la="products and service:audio sound">Audio Sound</a>
							</li>

							<li class="footer-category__item">
								<a class="footer-category__link" href="https://m9estore.com/sg/watches/" title="Watches" an-tr="nv01_footer sitemap--cta-menu" an-ca="navigation" an-ac="footer" an-la="products and service:watches">Watches</a>

							</li>

							<li class="footer-category__item">
								<a class="footer-category__link" href="https://m9estore.com/sg/apps/smart-switch/" title="Smart Switch" an-tr="nv01_footer sitemap--cta-menu" an-ca="navigation" an-ac="footer" an-la="products and service:smart switch">Smart Switch</a>

							</li>

							<li class="footer-category__item">
								<a class="footer-category__link" href="https://m9estore.com/sg/tvs/" title="TVs" an-tr="nv01_footer sitemap--cta-menu" an-ca="navigation" an-ac="footer" an-la="products and service:tvs">TVs</a>

							</li>

							<li class="footer-category__item">
								<a class="footer-category__link" href="https://m9estore.com/sg/lifestyle-tvs/" title="Lifestyle TVs" an-tr="nv01_footer sitemap--cta-menu" an-ca="navigation" an-ac="footer" an-la="products and service:lifestyle tvs">Lifestyle TVs</a>

							</li>
						</ul>
						<ul class="footer-category__list" style="height: 226.8px;">

							<li class="footer-category__item">
								<a class="footer-category__link" href="https://m9estore.com/sg/refrigerators/" title="Refrigerators" an-tr="nv01_footer sitemap--cta-menu" an-ca="navigation" an-ac="footer" an-la="products and service:refrigerators ">Refrigerators</a>
							</li>

							<li class="footer-category__item">
								<a class="footer-category__link" href="https://m9estore.com/sg/washers-and-dryers/" title="Laundry" an-tr="nv01_footer sitemap--cta-menu" an-ca="navigation" an-ac="footer" an-la="products and service:laundry">Laundry</a>

							</li>

							<li class="footer-category__item">
								<a class="footer-category__link" href="https://m9estore.com/sg/air-conditioners/" title="Air Solutions" an-tr="nv01_footer sitemap--cta-menu" an-ca="navigation" an-ac="footer" an-la="products and service:air solutions">Air Solutions</a>

							</li>

							<li class="footer-category__item">
								<a class="footer-category__link" href="https://m9estore.com/sg/memory-storage/" title="Memory Storage" an-tr="nv01_footer sitemap--cta-menu" an-ca="navigation" an-ac="footer" an-la="products and service:memory storage">Memory Storage</a>

							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="footer-column__item">
				<div class="footer-category">
					<strong class="footer-category__title">Shop</strong>
					<a class="footer-category__anchor" href="javascript:void(0);" role="button">
						<span class="hidden">open</span>
						<svg class="icon" focusable="false" viewBox="0 0 96 96">
							<path d="M79.719 32.342l3.562 3.509L48 71.658 12.719 35.851l3.562-3.509L48 64.534z"></path>
						</svg>
					</a>
					<div class="footer-category__list-wrap">
						<ul class="footer-category__list">


							<li class="footer-category__item">
								<a class="footer-category__link" href="https://m9estore.com/shop" title="Shop FAQ" an-tr="nv01_footer sitemap--cta-menu" an-ca="navigation" an-ac="footer" an-la="shop:shop faq">Store Locator</a>
							</li>
						</ul>

					</div>
				</div>
			</div>

			<div class="footer-column__item">
				<div class="footer-category">
					<strong class="footer-category__title">Support</strong>
					<a class="footer-category__anchor" href="javascript:void(0);" role="button">
						<span class="hidden">open</span>
						<svg class="icon" focusable="false" viewBox="0 0 96 96">
							<path d="M79.719 32.342l3.562 3.509L48 71.658 12.719 35.851l3.562-3.509L48 64.534z"></path>
						</svg>
					</a>
					<div class="footer-category__list-wrap">
						<ul class="footer-category__list">

							<li class="footer-category__item">

								<a class="footer-category__link new-window" href="https://m9estore.com/contact-us" target="_blank" title="Open in a New Window : General Enquiry" an-tr="nv01_footer sitemap--cta-menu" an-ca="navigation" an-ac="footer" an-la="support:general enquiry">
									Contact Us
									<svg class="icon" focusable="false" viewBox="0 0 96 96">
										<path d="M81.436 14.564v54.285h-8V28.221L18.22 83.436l-5.656-5.656L67.78 22.563l-40.629.001v-8z"></path>
									</svg>
								</a>
							</li>

							<li class="footer-category__item">
								<a class="footer-category__link" href="https://m9estore.com/service-center" title="Shop FAQ" an-tr="nv01_footer sitemap--cta-menu" an-ca="navigation" an-ac="footer" an-la="shop:shop faq">Service Center Locator</a>
							</li>

						</ul>

					</div>
				</div>
			</div>

			<div class="footer-column__item footer_item_right_side_column"></div>
		</div>

		<div class="footer-bottom">
		<div class="footer-copyright-wrap">
			<div class="footer-language">

					<a class="footer-language__anchor" href="#" role="button" an-tr="nv02_footer bottom--cta-locallist" an-ca="navigation" an-ac="footer" an-la="bottom:country selector:locallist">
						Singapore/English
						<svg class="icon" focusable="false" viewBox="0 0 96 96">
							<path d="M35.757 84.389l-5.533-5.778 31.982-30.612L30.224 17.39l5.533-5.779 38.018 36.388z"></path>
						</svg>
					</a>

			</div>

		</div>

		<div class="footer-language-wrap" an-tr="nv02_footer bottom--text-scroll" an-ca="scroll" an-ac="scroll:100" an-la="scroll:100">
			<div class="footer-language">


					<a class="footer-language__anchor" href="https://m9estore.com/#" an-tr="nv02_footer bottom--cta-locallist" an-ca="navigation" an-ac="footer" an-la="bottom:country selector:locallist">
						Singapore/English
						<svg class="icon" focusable="false" viewBox="0 0 96 96">
							<path d="M35.757 84.389l-5.533-5.778 31.982-30.612L30.224 17.39l5.533-5.779 38.018 36.388z"></path>
						</svg>
					</a>

			</div>
			<div class="footer-terms">
				<ul class="footer-terms__list">
					<li class="footer-terms__item">
						<a id="accHelp" class="footer-terms__link" href="https://m9estore.com/sg/accessibility/overview/" title="Accessibility Help" an-tr="nv02_footer bottom--cta-bottom" an-ca="navigation" an-ac="footer" an-la="bottom:legal menu:accessibility help">Accessibility Help</a>

					</li>

						<li class="footer-terms__item">
							<a class="footer-terms__link" href="https://m9estore.com/sg/info/privacy/" title="Privacy" an-tr="nv02_footer bottom--cta-bottom" an-ca="navigation" an-ac="footer" an-la="bottom:legal menu:privacy">Privacy</a>



						</li>

						<li class="footer-terms__item">
							<a class="footer-terms__link" href="https://m9estore.com/sg/info/legal/" title="Legal" an-tr="nv02_footer bottom--cta-bottom" an-ca="navigation" an-ac="footer" an-la="bottom:legal menu:legal">Legal</a>



						</li>
				</ul>
			</div>
			<div class="footer-sns">
				<span class="footer-sns__title">Stay in the Loop?</span>
				<ul class="footer-sns__list">
					<li class="footer-sns__item">

						<a class="footer-sns__link" href="//www.facebook.com/SamsungSingapore" target="_blank" title="Open in a New Window : Facebook" an-tr="nv02_footer bottom--cta-sns" an-ca="navigation" an-ac="footer" an-la="bottom:sns:facebook">
							<svg class="icon" focusable="false" viewBox="0 0 96 96">
								<path d="M92 48.267c0-24.3-19.699-44-44-44s-44 19.7-44 44C4 70.23 20.09 88.433 41.125 91.733V60.987H29.953v-12.72h11.172v-9.694c0-11.026 6.569-17.117 16.619-17.117 4.815 0 9.85.858 9.85.858v10.828h-5.549c-5.465 0-7.17 3.392-7.17 6.871v8.255h12.203l-1.951 12.718H54.875v30.747C75.91 88.433 92 70.228 92 48.267"></path>
							</svg>
						</a>
					</li>

					<li class="footer-sns__item">


						<a class="footer-sns__link" href="//www.instagram.com/samsung_sg/" target="_blank" title="Open in a New Window : Instagram" an-tr="nv02_footer bottom--cta-sns" an-ca="navigation" an-ac="footer" an-la="bottom:sns:instagram">
							<svg class="icon" focusable="false" viewBox="0 0 96 96">
								<path d="M41.56 5.004h12.88c6.046.022 7.725.088 11.289.25 4.577.21 7.703.936 10.438 1.999 2.827 1.099 5.225 2.57 7.616 4.96 2.39 2.39 3.86 4.789 4.96 7.616 1.019 2.625 1.73 5.611 1.97 9.896l.15 3.428c.101 2.775.133 5.555.136 13.312l-.009 8.204c-.022 5.858-.088 7.54-.25 11.056-.208 4.577-.935 7.703-1.997 10.438-1.1 2.827-2.57 5.225-4.96 7.616-2.391 2.39-4.79 3.86-7.616 4.96-2.626 1.02-5.612 1.73-9.896 1.97l-3.429.15c-2.775.102-5.555.133-13.312.137l-8.204-.01c-5.857-.022-7.538-.088-11.055-.25-4.577-.208-7.703-.934-10.438-1.997-2.827-1.1-5.225-2.57-7.616-4.96-2.39-2.391-3.861-4.79-4.96-7.616-1.02-2.626-1.73-5.612-1.97-9.896l-.12-2.62c-.119-2.915-.159-5.323-.166-12.71l.007-9.381c.021-6.047.087-7.726.25-11.29.21-4.576.937-7.702 1.999-10.437 1.099-2.827 2.57-5.225 4.96-7.616 2.39-2.39 4.789-3.861 7.616-4.96 2.625-1.02 5.611-1.73 9.895-1.97l2.621-.12c2.397-.097 4.45-.142 9.21-.159zm13.468 7.75H40.971c-5.353.023-6.969.087-10.347.24-4.192.192-6.47.892-7.984 1.48-2.007.78-3.44 1.713-4.944 3.218-1.505 1.504-2.437 2.937-3.217 4.944l-.186.496c-.522 1.452-1.079 3.56-1.274 7.062l-.138 3.177c-.09 2.447-.123 4.828-.131 10.757l.008 10.896c.022 5.353.086 6.969.24 10.347.192 4.193.892 6.47 1.48 7.985.78 2.007 1.713 3.44 3.218 4.944 1.504 1.505 2.937 2.437 4.944 3.217l.495.186c1.395.5 3.393 1.034 6.648 1.247l.84.047c4.328.197 5.764.247 15.872.25l8.475-.01c5.4-.022 7.015-.085 10.406-.24l.84-.047c3.662-.24 5.733-.885 7.144-1.433 2.007-.78 3.44-1.712 4.944-3.217 1.505-1.504 2.437-2.937 3.217-4.944l.185-.496c.522-1.453 1.079-3.56 1.274-7.062l.136-3.131c.091-2.466.125-4.84.133-10.814l-.008-10.827c-.022-5.4-.085-7.015-.24-10.405-.191-4.193-.891-6.47-1.48-7.985-.78-2.007-1.712-3.44-3.217-4.944-1.504-1.505-2.937-2.437-4.944-3.217l-.496-.186c-1.453-.522-3.56-1.078-7.062-1.273l-3.36-.145c-1.896-.068-3.806-.101-7.414-.117zM48 25.914c12.195 0 22.08 9.886 22.08 22.082 0 12.194-9.885 22.081-22.08 22.081-12.195 0-22.081-9.887-22.081-22.08 0-12.197 9.886-22.083 22.08-22.083zm0 7.748c-7.916 0-14.333 6.417-14.333 14.334 0 7.916 6.417 14.333 14.333 14.333s14.333-6.417 14.333-14.333c0-7.917-6.417-14.334-14.333-14.334zm22.953-13.78a5.16 5.16 0 110 10.32 5.16 5.16 0 010-10.32z"></path>
							</svg>
						</a>
					</li>

				</ul>
			</div>
		</div>
		<!-- /* // Footer Bottom Component */ -->
		</div>
    </div>
	<div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div><div class="fb-customerchat fb_invisible_flow fb_iframe_widget" attribution="setup_tool" page_id="1916394051943432" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;attribution=setup_tool&amp;container_width=0&amp;local_state=%7B%22path%22%3A2%2C%22chatState%22%3A1%2C%22visibility%22%3A%22hidden%22%2C%22showUpgradePrompt%22%3A%22not_shown%22%2C%22v%22%3A0%7D&amp;locale=en_US&amp;page_id=1916394051943432&amp;request_time=1601032280150&amp;sdk=joey"><span style="vertical-align: bottom; width: 0px; height: 0px;"><iframe name="f35abfb4c24d1e" width="1000px" height="1000px" title="" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v8.0/plugins/customerchat.php?app_id=&amp;attribution=setup_tool&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df2026d095da3468%26domain%3Dm9estore.com%26origin%3Dhttps%253A%252F%252Fm9estore.com%252Ff195495341b1978%26relation%3Dparent.parent&amp;container_width=0&amp;local_state=%7B%22path%22%3A2%2C%22chatState%22%3A1%2C%22visibility%22%3A%22hidden%22%2C%22showUpgradePrompt%22%3A%22not_shown%22%2C%22v%22%3A0%7D&amp;locale=en_US&amp;page_id=1916394051943432&amp;request_time=1601032280150&amp;sdk=joey" style="padding: 0px; position: fixed; z-index: 2147483646; border-radius: 16px; bottom: 85px; top: auto; width: 399px; max-height: 0px; right: 4px; margin-right: 12px; visibility: visible; min-height: 0px;" __idm_frm__="859" class=" fb_customer_chat_bounce_out_v2" data-testid="dialog_iframe"></iframe></span></div><div class="fb_dialog  fb_dialog_advanced" style="overflow: visible; z-index: 2147483644;"><div class="fb_dialog_content"><iframe name="blank_f35abfb4c24d1e" width="60px" tabindex="-1" data-testid="bubble_iframe" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v8.0/plugins/customer_chat/bubble" style="margin: 0px 12px; padding: 0px; position: fixed; z-index: 2147483644; bottom: 24px; top: auto; height: 60px; width: 60px; border-radius: 29px; box-shadow: rgba(0, 0, 0, 0.15) 0px 4px 12px 0px; background: none; display: block; right: 12px;"></iframe><iframe name="unread_f35abfb4c24d1e" tabindex="-1" data-testid="unread_iframe" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v8.0/plugins/customer_chat/bubble" style="bottom: 68px; position: fixed; width: 20px; height: 24px; z-index: 2147483645; border-radius: 4pt; right: 22px;"></iframe></div></div></div>
     <!-- Your Chat Plugin code -->
    
</footer>
<script type="text/javascript" src="https://m9estore.com/js/swipper-container.js"></script>
    <script type="text/javascript" src="https://m9estore.com/js/main.js"></script>

    <!-- custom js for what's news page -->
	<script type="text/javascript" src="https://m9estore.com/js/floatnavi.js"></script>
	<script type="text/javascript" src="https://m9estore.com/js/pagetemplate.js"></script>
	<script type="text/javascript" src="https://m9estore.com/js/pagevideo.js"></script>
    <script type="text/javascript" src="https://m9estore.com/js/whatnews.js"></script>

    <script type="text/javascript" src="https://m9estore.com/js/search.js"></script>
	<script type="text/javascript" src="https://m9estore.com/js/homecarousel.js"></script>
	<script type="text/javascript" src="https://m9estore.com/js/keyfeature.js"></script>
	<script type="text/javascript" src="https://m9estore.com/js/showcase.js"></script>
	<script type="text/javascript" src="https://m9estore.com/js/teaser.js"></script>

    
<script type="text/javascript" src="https://m9estore.com/js/search.js"></script>
<script type="text/javascript" src="https://m9estore.com/js/homecarousel.js"></script>

<script type="text/javascript" src="https://m9estore.com/js/keyfeature.js"></script>
<script type="text/javascript" src="https://m9estore.com/js/showcase.js"></script>
<script type="text/javascript" src="https://m9estore.com/js/teaser.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script>
function goBack() {
  window.history.back();
}
</script>
</body>
</html>
<?php } ?>
