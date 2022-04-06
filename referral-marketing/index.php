<?php
require_once('../incs-marketing/config.php');
require_once('../incs-marketing/gen_serv_con.php');
//include('../incs-marketing/cookie-session.php');
if(isset($_SESSION['user_id_marketer'])) {
    header('Location:'.GEN_WEBSITE.'/my_account.php');
       exit;
}
if(isset($_SESSION['non_ref_users_id'])) {
    header('Location:'.GEN_WEBSITE.'/dashboard.php');
       exit();
}

if(isset($_SESSION['user_id'])) {
    header('Location:'.GEN_WEBSITE.'/referred-to-buy.php');
       exit();
}
include('../incs-marketing/header.php');
?>
    
    <!-- Hero Slider Area 
	============================================= -->
	
	<section class="aplpg-hero-slider-area" id="banner">
		<div class="aplpg-hero-single-slide" data-background="img/app-landing//betasouk_banner-slide.png">
			<div class="aplpg-social-left">
				<div class="aplpg-social-links">
				<a href="https://facebook.com/betasoukafrica"><i class="fab fa-facebook-f"></i></a>
							<a href="https://twitter.com/betasoukafrica"><i class="fab fa-twitter"></i></a>
							<a href="https://instagram.com/betasoukafrica"><i class="fab fa-instagram"></i></a>
							<a href="https://linkedin.com/company/betasoukafrica"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<div class="aplpg-scroll-btn">
					<a href="#process"><i class="fas fa-arrow-left"></i>Scroll Down</a>
				</div>
			</div>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-7">
						<div class="aplpg-slide-left">
							<div class="aplpg-headline">
								<h1 style="font-size:30px; color:#ca4e28">Time To Make Sales</h1>
								<h2 style="font-size:60px; color:#fff">CREATE, PROMOTE,<br> START SELLING!!</h2>
							</div>
							<div class="aplpg-pera-txt">
								<p>Utilizing Digital Platforms For Businesses To Promote Their Products<br> And Services, Create A Great First Impression And Generate More Sales.</p>
							</div>
							<div class="aplpg-slider-form">
								<a href="/beta-souk-marketing/referral-marketing/buy.php" class="aplpg-primary-btn">See All Feature</a>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="aplpg-mobile-mockup">
							<img src="img/app-landing/betasouk_banner-mockup.png" alt="">
							<!-- <div class="aplpg-clients-count">
								<div class="aplpg-headline">
									<h6>Happy clients</h6>
								</div>
								<div class="aplpg-clients-thumb">
									<img src="img/app-landing/clients.png" alt="">
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="aplpg-hero-single-slide" data-background="img/app-landing/betasouk_banner-slide.png">
			<div class="aplpg-social-left">
				<div class="aplpg-social-links">
					<a href="https://facebook.com/betasoukafrica"><i class="fab fa-facebook-f"></i></a>
					<a href="https://twitter.com/betasoukafrica"><i class="fab fa-twitter"></i></a>
					<a href="https://instagram.com/betasoukafrica"><i class="fab fa-instagram"></i></a>
					<a href="https://linkedin.com/company/betasoukafrica"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<div class="aplpg-scroll-btn">
					<a href="#process"><i class="fas fa-arrow-left"></i>Scroll Down</a>
				</div>
			</div>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-7">
						<div class="aplpg-slide-left">
							<div class="aplpg-headline">
								<h1 style="font-size:30px; color:#ca4e28">Time To Make Sales</h1>
								<h2 style="font-size:55px; color:#fff">GET YOUR WEBSITE <br>RUNNING IN 24 HOURS</h2>
							</div>
							<div class="aplpg-pera-txt">
								<p>BetaSouk provides a ready-made e-commerce website for business <br> owners to make more sales</p>
							</div>
							<div class="aplpg-slider-form">
								<a href="/beta-souk-marketing/referral-marketing/buy.php" class="aplpg-primary-btn">See All Feature</a>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="aplpg-mobile-mockup">
							<img src="img/app-landing/betasouk_banner-mockup 2.png" alt="">
							<!-- <div class="aplpg-clients-count">
								<div class="aplpg-headline">
									<h6>Happy clients</h6>
								</div>
								<div class="aplpg-clients-thumb">
									<img src="img/app-landing/clients.png" alt="">
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero Slider End 
	============================================= -->
	


	<!-- Process Section 
	============================================= -->
	
	<section class="aplpg-process-section" id="process">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-2">
					<div class="aplpg-title-area text-center wow fadeInUp">
						<span class="aplpg-subtitle">Benefits</span>
						<div class="aplpg-headline p-30">
							<h3>Improved design and performance of high level ecommerce platform</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="aplpg-process-content">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="aplpg-process-column wow fadeInUp">
							<div class="aplpg-icon-wrapper">
								<i class="fas fa-rocket"></i>
							</div>
							<div class="aplpg-headline">
								<h5>Boost your sales</h5>
							</div>
							<div class="aplpg-pera-txt">
								<p>The highest eCommerce company generated a revenue of $22million in 2021 of the global $6.9billion. Maximize this opportunity and boost your sales enormously and enjoy global market benefits.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="aplpg-process-column wow fadeInUp" data-wow-delay="0.2s">
							<div class="aplpg-icon-wrapper">
								<i class="flaticon-customize"></i>
							</div>
							<div class="aplpg-headline">
								<h5>Easy to customize</h5>
							</div>
							<div class="aplpg-pera-txt">
								<p>Betasouk offers you endless possibilities to customize your shop with eye catching banner images. Betasouk is compatible with Paystack and flutterwave for secure payment.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="aplpg-process-column wow fadeInUp" data-wow-delay="0.4s">
							<div class="aplpg-icon-wrapper">
								<i class="flaticon-home"></i>
							</div>
							<div class="aplpg-headline">
								<h5>Connect your store</h5>
							</div>
							<div class="aplpg-pera-txt">
								<p>Enjoy the massive opportunity with eCommerce with your website running. Share product on your various social media platforms and get to reach over 4.66 billion active internet users worldwide.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Process Section End 
	============================================= -->
	

	<!-- About Section 
	============================================= -->
	
	<section class="aplpg-about-section" id="about">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="aplpg-about-left wow flipInY">
						<img src="img/app-landing/betasouk_mobile-mockup.png" alt="">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="aplpg-about-right">
						<div class="aplpg-title-area wow fadeInUp">
							<span class="aplpg-subtitle">About BetaSouk</span>
							<div class="aplpg-headline pr-30">
								<h3>Enjoy amaizing sales with <br>betasouk ecommerce website</h3>
							</div>
							<div class="aplpg-pera-txt">
								<p>Beta souk provides a ready made e-commerce website for business owners to expand their market base and make more sales.</p>
								<br>
								<p>The aim is to give business owners an edge by offering them a digital solution platform with the use of social media marketing and a user friendly website. Customers have the opportunity to patronize your business while you make more profits on sales.</P>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About Section End 
	============================================= -->
	

	<!-- Video Section 
	============================================= -->
	
	<div class="aplpg-video-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="aplpg-video-content">
						<img src="img/app-landing/video-bg.jpg" alt="">
						<div class="aplpg-video-btn">
							<a href="https://www.youtube.com/watch?v=myjEoDypUD8"><i class="fas fa-play"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Video Section End 
	============================================= -->
	

	<!-- Counter Section 
	============================================= -->
	
	<!-- <section class="aplpg-counter-section" data-background="img/app-landing/counter-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
					<div class="aplpg-counter-column wow fadeInUp">
						<div class="aplpg-icon-wrapper">
							<i class="flaticon-projects"></i>
						</div>
						<div class="aplpg-counter-content">
							<div class="aplpg-headline">
								<h2 class="aplpg-counter">2870</h2><span>+</span>
							</div>
							<div class="aplpg-subtitle">
								<span>Complete project</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
					<div class="aplpg-counter-column wow fadeInUp" data-wow-delay="0.2s">
						<div class="aplpg-icon-wrapper">
							<i class="flaticon-planet-earth"></i>
						</div>
						<div class="aplpg-counter-content">
							<div class="aplpg-headline">
								<h2 class="aplpg-counter">70</h2><span>+</span>
							</div>
							<div class="aplpg-subtitle">
								<span>Available Country</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
					<div class="aplpg-counter-column wow fadeInUp" data-wow-delay="0.4s">
						<div class="aplpg-icon-wrapper">
							<i class="flaticon-customer"></i>
						</div>
						<div class="aplpg-counter-content">
							<div class="aplpg-headline">
								<h2 class="aplpg-counter">100</h2><span>+</span>
							</div>
							<div class="aplpg-subtitle">
								<span>Team Member</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
					<div class="aplpg-counter-column wow fadeInUp" data-wow-delay="0.6s">
						<div class="aplpg-icon-wrapper">
							<i class="flaticon-team"></i>
						</div>
						<div class="aplpg-counter-content">
							<div class="aplpg-headline">
								<h2 class="aplpg-counter">3</h2><span>K+</span>
							</div>
							<div class="aplpg-subtitle">
								<span>Happy Clients</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Counter Section End 
	============================================= -->
	

	<!-- Feature Section 
	============================================= -->
	
	<section class="aplpg-feature-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-10">
					<div class="aplpg-fetaure-left">
						<div class="aplpg-title-area wow fadeInUp">
							<span class="aplpg-subtitle">BetaSouk Feature</span>
							<div class="aplpg-headline">
								<h3>Direct Contact / Notification</h3>
							</div>
							<div class="aplpg-pera-txt">
								<p>Enabled customer reach via whatsapp link and notifications on every sale made. Business owners can stay in touch with prospects and clients to enhance swift buying and selling.</p>
							</div>
						</div>
						<div class="wow fadeInUp" data-wow-delay="0.2s">
							<a href="/beta-souk-marketing/referral-marketing/buy.php" class="aplpg-primary-btn">See All Feature</a>
						</div>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="aplpg-feature-right">
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="aplpg-feature-column wow fadeInUp">
									<div class="aplpg-icon-wrapper">
										<span><i class="flaticon-customize"></i></span>
									</div>
									<div class="aplpg-feature-content">
										<div class="aplpg-headline">
											<h6>Easy Set Up</h6>
										</div>
										<div class="aplpg-pera-txt">
											<p>Structured with an installation programme and templates which aids web creation and upload of contents on web pages created within 24 hours max.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="aplpg-feature-column wow fadeInUp" data-wow-delay="0.2s">
									<div class="aplpg-icon-wrapper">
										<span><i class="flaticon-link"></i></span>
									</div>
									<div class="aplpg-feature-content">
										<div class="aplpg-headline">
											<h6>User Friendly</h6>
										</div>
										<div class="aplpg-pera-txt">
											<p>Boost sales with a seamless user experience for visitors, prospects and customers through an improved web performance.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="aplpg-feature-column wow fadeInUp" data-wow-delay="0.4s">
									<div class="aplpg-icon-wrapper">
										<span><i class="fas fa-money-bill"></i></span>
										
									</div>
									<div class="aplpg-feature-content">
										<div class="aplpg-headline">
											<h6>Payment Integration</h6>
										</div>
										<div class="aplpg-pera-txt">
											<p>Provision of an Integrated payment gateway that allows receival of payments from prospects and clients on every sale</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="aplpg-feature-column wow fadeInUp" data-wow-delay="0.6s">
									<div class="aplpg-icon-wrapper">
										<span><i class="fas fa-envelope"></i></span>
									</div>
									<div class="aplpg-feature-content">
										<div class="aplpg-headline">
											<h6>Custom Email</h6>
										</div>
										<div class="aplpg-pera-txt">
											<p>Strengthen businesses with web address and emails that keeps brands and businesses coordinated and coherent across all platforms</p>
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
	<!-- Feature Section End 
	============================================= -->
	

	<!-- Explore Section 
	============================================= -->
	
	<section class="aplpg-explore-section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="aplpg-explore-left wow flipInY">
						<div class="aplpg-img-wrapper">
							<img src="img/app-landing/betasouk_web-mockup.png" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="aplpg-explore-right">
						<div class="aplpg-title-area wow fadeInUp">
							<span class="aplpg-subtitle">How it works</span>
							<div class="aplpg-headline">
								<h3>Do It Yourself</h3>
							</div>
							<div class="aplpg-pera-txt">
								<p>Easy to navigate and operate, get to know how to upload, categorize, remove or delete your products, place discounts and how to receive payment, among other benefits.</p>
							</div>
						</div>
						<div class="aplpg-explore-btns">
							<a href="/beta-souk-marketing/referral-marketing/buy.php" class="aplpg-primary-btn wow fadeInUp">Discover Now</a>
							<a href="#" class="aplpg-secondary-btn wow fadeInUp" data-wow-delay="0.2s"><span class="aplpg-gradient-border">Free Trial</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Explore Section End 
	============================================= -->
	

	<!-- Screenshots Area 
	============================================= -->
	
	<!-- <section class="aplpg-screenshot-area" data-background="img/app-landing/screen/bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="aplpg-title-area text-center">
						<span class="aplpg-subtitle">Beautiful Screen</span>
						<div class="aplpg-headline">
							<h3>Screenshots from the app</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="aplpg-screen-slider-wrapper">
				<div class="aplpg-slider-mockup" data-background="img/app-landing/screen/mockup.png"></div>
				<div class="aplpg-screen-slider swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide aplpg-screen-single">
							<img src="img/app-landing/screen/01.jpg" alt="">
						</div>
						<div class="swiper-slide aplpg-screen-single">
							<img src="img/app-landing/screen/02.jpg" alt="">
						</div>
						<div class="swiper-slide aplpg-screen-single">
							<img src="img/app-landing/screen/03.jpg" alt="">
						</div>
						<div class="swiper-slide aplpg-screen-single">
							<img src="img/app-landing/screen/04.jpg" alt="">
						</div>
						<div class="swiper-slide aplpg-screen-single">
							<img src="img/app-landing/screen/05.jpg" alt="">
						</div>
					</div>
					<div class="swiper-pagination"></div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Screenshot Area 
	============================================= -->
	


	<!-- Webinar Section 
	============================================= -->
	
	<section class="aplpg-brand-section" id="webinar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 col-md-10 order-lg-1 order-2">
					<div class="aplpg-brand-left">
						<div class="aplpg-title-area wow fadeInUp">
							<!-- <span class="aplpg-subtitle">Our Trusted partner</span> -->
							<div class="aplpg-headline">
								<h3>Our webinar series</h3>
							</div>
							<div class="aplpg-pera-txt">
								<p>Participate and Learn More about the biggest market - eCommerce in our next webinar series. Speak with an eCommerce expert on how to make better sales through eCommerce.</p>
							</div>
							<div class="aplpg-pera-txt">
								<p>Be informed about our Next Cracking Ecommerce Code <span style="color:#041760; font-weight:700;">C<span class="icon">E</span>C</span> Webinar Episode. . </p>
							</div>
						</div>
						<div class="aplpg-brand-btn wow fadeInUp" data-wow-delay="0.2s">
							<a href="https://share.hsforms.com/1ReBlNsEDQOmD1pw7lUm_Kgcwyh2" class="aplpg-primary-btn">Join now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 offset-lg-1 order-lg-2 order-1">
					<div class="aplpg-brand-right wow flipInY">
						<div class="aplpg-brands-logo-wrapper">
							<img src="img/app-landing/betasouk_webinar.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Webinar Section End 
	============================================= -->
	

	<!-- Apps Section 
	============================================= -->
	
	<section class="aplpg-apps-section">
		<div class="container">
			<div class="aplpg-apps-content" data-background="img/app-landing/betasouk_cta.png">
				<div class="aplpg-title-area text-center">
					<span class="aplpg-subtitle">BetaSouk</span>
					<div class="aplpg-headline">
						<h3>Give your business the credibility it deserves….</h3>
					</div>
				</div>
				<div class="aplpg-apps-btns">
					<a href="/beta-souk-marketing/referral-marketing/buy.php" class="aplpg-google-btn">
						<span>Get Started</span>
					</a>
					<a href="#" class="aplpg-apple-btn">
						<span>Free Trial</span>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Apps Section End 
	============================================= -->


	<!-- Affiliate Section 
	============================================= -->
	
	<section class="aplpg-brand-section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 col-md-10 order-lg-1 order-2">
					<div class="aplpg-brand-left">
						<div class="aplpg-title-area wow fadeInUp">
							<!-- <span class="aplpg-subtitle">Our Trusted partner</span> -->
							<div class="aplpg-headline">
								<h3>Become an affiliate,<br> earn on the go</h3>
							</div>
							<div class="aplpg-pera-txt">
								<p>Make extra cash on every beta package!</p>
								<p><i class="fas fa-arrow-right icon pr-2"></i> Register</p>
								<p><i class="fas fa-arrow-right icon pr-2" pr-2></i> Get a personalized unique link</p>
								<p><i class="fas fa-arrow-right icon pr-2"></i> Earn on every sale</p>

								<h3 class="mt-2" style="color:#041760">8.5<span class="icon">%</span> Commission</h3>
							</div>
						</div>
						<div class="aplpg-brand-btn wow fadeInUp" data-wow-delay="0.2s">
							<a href="#" class="aplpg-primary-btn">Register</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 offset-lg-1 order-lg-2 order-1">
					<div class="aplpg-brand-right wow flipInY">
						<div class="aplpg-brands-logo-wrapper">
							<img src="img/app-landing/betasouk_affilate 1.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Affiliate Section End 
	============================================= -->
	

	<!-- Pricing Table  
	============================================= -->
	
	<section class="aplpg-pricing-table" id="pricing" data-background="img/app-landing/pricing-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-8 offset-md-2 offset-lg-3">
					<div class="aplpg-title-area text-center wow fadeInUp">
						<span class="aplpg-subtitle">Pricing Table</span>
						<div class="aplpg-headline">
							<h3>No additional or hidden costs. Pay for what you use.</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="aplpg-pricing-content">
				<div class="row justify-content-center align-items-center">
					<div class="col-lg-4 col-md-6">
						<div class="aplpg-pricing-column">
							<div class="aplpg-pricing-top aplpg-headline">
								<h3>Free</h3>
								<span class="aplpg-subtitle"></span>
								<span class="aplpg-triangle-shape"></span>
							</div>
							<div class="aplpg-pricing-list-content">
								<div class="aplpg-headline">
									<h6></h6>
								</div>
								<ul>
									<li>Admin page</li>
									<li>Cross sells / ups</li>
									<li>Payment gateway</li>
									<li>Create Discount Price</li>
									<li>Product categories creation</li>
									<li>Product share to social media</li>
									<li>Whatsapp chat with customers</li>
								</ul>
								<div class="aplpg-pricing-btn">
									<a href="#">Choose Plan</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="aplpg-pricing-column popular-package">
							<div class="aplpg-pricing-top aplpg-headline">
								<h3>&#x20A6;150K</h3>
								<span class="aplpg-subtitle"></span>
								<span class="aplpg-triangle-shape"></span>
								<span class="aplpg-second-title">Essential Package</span>
							</div>
							<div class="aplpg-pricing-list-content">
								<div class="aplpg-headline">
									<h6></h6>
								</div>
								<ul>
									<li>Admin page</li>
									<li>Custom email</li>
									<li>Cross sells / ups</li>
									<li>Payment gateway</li>
									<li>Top banner for promo</li>
									<li>Create Discount Price</li>
									<li>Product share to social media</li>
									<li>Whatsapp chat with customers</li>
									<li>Product categories + sub-category creation</li>
								</ul>
								<div class="aplpg-pricing-btn">
									<a href="/beta-souk-marketing/referral-marketing/buy.php">Choose Plan</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="aplpg-pricing-column">
							<div class="aplpg-pricing-top aplpg-headline">
								<h3>&#x20A6;60K</h3>
								<span class="aplpg-subtitle"></span>
								<span class="aplpg-triangle-shape"></span>
								<span class="aplpg-second-title">Basic Package</span>
							</div>
							<div class="aplpg-pricing-list-content">
								<div class="aplpg-headline">
									<h6></h6>
								</div>
								<ul>
									<li>Admin page</li>
									<li>Cross sells / ups</li>
									<li>Payment gateway</li>
									<li>Create Discount Price</li>
									<li>Product categories creation</li>
									<li>Product share to social media</li>
									<li>Whatsapp chat with customers</li>
								</ul>
								<div class="aplpg-pricing-btn">
									<a href="/beta-souk-marketing/referral-marketing/buy.php">Choose Plan</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
					<defs>
						<filter id="round">
							<feGaussianBlur in="SourceGraphic" stdDeviation="3" result="blur" />    
							<feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
							<feComposite in="SourceGraphic" in2="goo" operator="atop"/>
						</filter>
					</defs>
				</svg>
			</div>
		</div>
	</section>
	<!-- Pricing Table End 
	============================================= -->
	

	<!-- Testimonial Section 
	============================================= -->
	
	<!-- <section class="aplpg-testimonial-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="aplpg-title-area">
						<span class="aplpg-subtitle">Testimonial</span>
						<div class="aplpg-headline">
							<h3>A lot of Love from <br>our happy clients!!!</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="aplpg-testimonial-slider">
				<div class="aplpg-single-item">
					<span class="aplpg-quote"><i class="fas fa-quote-right"></i></span>
					<div class="aplpg-clients-feedback">
						<div class="aplpg-star-rating">
							<span><i class="fa fa-star"></i></span>
							<span><i class="fa fa-star"></i></span>
							<span><i class="fa fa-star"></i></span>
							<span><i class="fa fa-star"></i></span>
							<span><i class="fa fa-star"></i></span>
						</div>
						<div class="aplpg-pera-txt">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis commodo viverra maecenas . </p>
						</div>
					</div>
					<div class="aplpg-clients-content">
						<div class="aplpg-thumb-container">
							<img src="img/app-landing/feedback/01.jpg" alt="">
						</div>
						<div class="aplpg-clients-info aplpg-headline">
							<h6>David Malan</h6>
							<span>Managing Director</span>
						</div>
					</div>
				</div>
				<div class="aplpg-single-item">
					<span class="aplpg-quote"><i class="fas fa-quote-right"></i></span>
					<div class="aplpg-clients-feedback">
						<div class="aplpg-star-rating">
							<span><i class="fa fa-star"></i></span>
							<span><i class="fa fa-star"></i></span>
							<span><i class="fa fa-star"></i></span>
							<span><i class="fa fa-star"></i></span>
							<span><i class="fa fa-star"></i></span>
						</div>
						<div class="aplpg-pera-txt">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis commodo viverra maecenas . </p>
						</div>
					</div>
					<div class="aplpg-clients-content">
						<div class="aplpg-thumb-container">
							<img src="img/app-landing/feedback/02.jpg" alt="">
						</div>
						<div class="aplpg-clients-info aplpg-headline">
							<h6>David Malan</h6>
							<span>Managing Director</span>
						</div>
					</div>
				</div>
				<div class="aplpg-single-item">
					<span class="aplpg-quote"><i class="fas fa-quote-right"></i></span>
					<div class="aplpg-clients-feedback">
						<div class="aplpg-star-rating">
							<span><i class="fa fa-star"></i></span>
							<span><i class="fa fa-star"></i></span>
							<span><i class="fa fa-star"></i></span>
							<span><i class="fa fa-star"></i></span>
							<span><i class="fa fa-star"></i></span>
						</div>
						<div class="aplpg-pera-txt">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis commodo viverra maecenas . </p>
						</div>
					</div>
					<div class="aplpg-clients-content">
						<div class="aplpg-thumb-container">
							<img src="img/app-landing/feedback/01.jpg" alt="">
						</div>
						<div class="aplpg-clients-info aplpg-headline">
							<h6>David Malan</h6>
							<span>Managing Director</span>
						</div>
					</div>
				</div>
				<div class="aplpg-single-item">
					<span class="aplpg-quote"><i class="fas fa-quote-right"></i></span>
					<div class="aplpg-clients-feedback">
						<div class="aplpg-star-rating">
							<span><i class="fa fa-star"></i></span>
							<span><i class="fa fa-star"></i></span>
							<span><i class="fa fa-star"></i></span>
							<span><i class="fa fa-star"></i></span>
							<span><i class="fa fa-star"></i></span>
						</div>
						<div class="aplpg-pera-txt">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis commodo viverra maecenas . </p>
						</div>
					</div>
					<div class="aplpg-clients-content">
						<div class="aplpg-thumb-container">
							<img src="img/app-landing/feedback/02.jpg" alt="">
						</div>
						<div class="aplpg-clients-info aplpg-headline">
							<h6>David Malan</h6>
							<span>Managing Director</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Testimonial Section End 
	============================================= -->
	

	<!-- FAQ Section 
	============================================= -->
	<section id="sb-faq" class="pr3-faq-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="aplpg-title-area text-center wow fadeInUp">
						<span class="aplpg-subtitle">Faq</span>
						<div class="aplpg-headline">
							<h3>frequently asked question</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="d-flex justify-content-center">
				<div class="col-lg-8">
					<div class="pr3-accordion">
						<div class="accordion" id="pr3_accordion">
							<div class="card card-active wow fadeInUp">
								<div class="card-header">
									<a data-toggle="collapse" data-target="#card_one">How Do I Get The Website?</a>
								</div>
	
								<div id="card_one" class="collapse show" data-parent="#pr3_accordion">
									<div class="card-body">
										<div class="pr2-pera-txt">
											<p>Just click the "Get started" button and enter your details. You will be contacted as soon as possible on a successful payment. Then we will begin setting up your website.</p>
										</div>
									</div>
								</div>
							</div>
	
							<div class="card wow fadeInUp" data-wow-delay="0.1s">
								<div class="card-header">
									<a data-toggle="collapse" data-target="#card_two">How Do I Know Which Package Is Best For My Business?</a>
								</div>
								<div id="card_two" class="collapse" data-parent="#pr3_accordion">
									<div class="card-body">
										<div class="pr2-pera-txt">
											<p>The Basic package is for small scale business owners. The essential for medium scale business and the premuim is for large scale business owner.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="card wow fadeInUp" data-wow-delay="0.2s">
								<div class="card-header">
									<a data-toggle="collapse" data-target="#card_three">How Long Will It Take To Set One Up?</a>
								</div>
								<div id="card_three" class="collapse" data-parent="#pr3_accordion">
									<div class="card-body">
										<div class="pr2-pera-txt">
											<p>In 24 to 28 hours, you will get your website?</p>
										</div>
									</div>
								</div>
							</div>
							<div class="card wow fadeInUp" data-wow-delay="0.3s">
								<div class="card-header">
									<a data-toggle="collapse" data-target="#card_four">How Do I Become And Affilliate?</a>
								</div>
								<div id="card_four" class="collapse" data-parent="#pr3_accordion">
									<div class="card-body">
										<div class="pr2-pera-txt">
											<p>Click the "Affilliate Register" and fill up the form</p>
										</div>
									</div>
								</div>
							</div>
							<div class="card wow fadeInUp" data-wow-delay="0.4s">
								<div class="card-header">
									<a data-toggle="collapse" data-target="#card_five">How Much To Become An Affilliate?</a>
								</div>
								<div id="card_five" class="collapse" data-parent="#pr3_accordion">
									<div class="card-body">
										<div class="pr2-pera-txt">
											<p>To become an affilliate is FREE OF CHARGE.</p>
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
	<!-- FAQ Section End 
	============================================= -->

	<!-- Blog Section 
	============================================= -->
	
	<section class="aplpg-blog-section" id="blog">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="aplpg-title-area text-center wow fadeInUp">
						<span class="aplpg-subtitle">Blog</span>
						<div class="aplpg-headline">
							<h3>Latest News & Articles</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="aplpg-blog-content" id="medium">
				<div class="row aplpg-blog-slider" id="jsonContent">
					
				</div>

			</div>
		</div>
	</section>
	<!-- Blog Section End 
	============================================= -->
	

	<!-- Contact Section 
	============================================= -->
	
	<section class="aplpg-contact-section">
		<div class="container">
			<div class="aplpg-contact-area">
				<div class="row">
					<div class="col-lg-6">
						<div class="aplpg-map">
							<iframe id="gmap_canvas" src="https://maps.google.com/maps?q=duromedia&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="aplpg-contact-right">
							<div class="aplpg-title-area wow fadeInUp">
								<span class="aplpg-subtitle">Contact Now</span>
								<div class="aplpg-headline">
									<h3>Get Started Now</h3>
								</div>
							</div>
							<div class="aplpg-contact-list">
								<div class="aplpg-contact-item wow fadeInUp" data-wow-delay="0.2s">
									<div class="aplpg-icon-wrapper">
										<i class="fas fa-map-marker-alt"></i>
									</div>
									<div class="aplpg-pera-txt">
										<p>Plot 12, Oladele Kadiri Close, nob-oluwa street, Ogba-Ikeja Lagos</p>
									</div>
								</div>
								<div class="aplpg-contact-item wow fadeInUp" data-wow-delay="0.4s">
									<div class="aplpg-icon-wrapper">
										<i class="fas fa-envelope"></i>
									</div>
									<div class="aplpg-pera-txt">
										<p><a href="mailto:sales@betasouk.com">sales@betasouk.com</a></p>
									</div>
								</div>
								<div class="aplpg-contact-item wow fadeInUp" data-wow-delay="0.6s">
									<div class="aplpg-icon-wrapper">
										<i class="fas fa-phone"></i>
									</div>
									<div class="aplpg-pera-txt">
										<p><a href="tel:+234 805 283 5221">234 805 283 5221</a></p>
										<p><a href="tel:+234 708 929 2535">234 708 929 2535</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact Section End 
	============================================= -->

<?php 
    include('../incs-marketing/footer.php');
?>