<?php
  include_once "includes/header.inc.php";
?>

 <!--
Welcome Slider (HEADER)
==================================== -->
 <section class="hero-area">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-12">
 				<div class="block mt-4 text-center">
 					<h1 class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s"><?php echo $homeHeader[0]["home_header_title_top"] ?> <br> <?php echo $homeHeader[0]["home_header_title_bottom"] ?></h1>
 					<ul class="list-inline wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".7s">
 						<li class="list-inline-item">
 							<a data-scroll href="#services" class="btn btn-main mx-2 mb-2"><?php echo $homeHeader[0]["home_header_btn_explor"] ?></a>
 						</li>
 						<li class="list-inline-item">
 							<a data-scroll href="#team" class="btn btn-transparent"><?php echo $homeHeader[0]["home_header_btn_learn"] ?></a>
 						</li>
 					</ul>
 				</div>
 			</div>
 		</div>
 	</div>
 </section>

<!--
Start About Section
==================================== -->
<section class="about text-center" id="about">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-8">
				<!-- section title -->
				<div class="title">
					<h2><?php echo $homeAbout[0]["home_about_title"] ?></h2>
					<p><?php echo $homeAbout[0]["home_about_short_description"] ?></p>
					<div class="border"></div>
				</div>
				<!-- /section title -->
			</div>
		</div>
		<div class="row text-center">
			<div class="col-lg-6 mb-5 mb-lg-0">
				<img loading="lazy" src="images/about-us.jpg" class="img-fluid" alt="">
			</div>
			<div class="col-lg-6">
				<p class="<?php echo $autoTextDirection ?>">
					<?php echo $homeAbout[0]["home_about_long_description"] ?>
				</p>
				<h4><?php echo $homeAbout[0]["home_about_skill"] ?></h4>
				<ul class="feature-list ">
					<li> <i class="tf-ion-android-checkmark-circle"></i> Web Development</li>
					<li> <i class="tf-ion-android-checkmark-circle"></i> Application Development</li>
					<li> <i class="tf-ion-android-checkmark-circle"></i> Website Design</li>
					<li> <i class="tf-ion-android-checkmark-circle"></i> UI/UX Design</li>
					<li> <i class="tf-ion-android-checkmark-circle"></i> SEO Service</li>
				</ul>
				<a href="contact.html" class="btn btn-main mt-20 "><?php echo $homeAbout[0]["home_about_btn_learn"] ?></a>
			</div>
		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->

<!-- Start Portfolio Section
		=========================================== -->
<section class="portfolio section-sm bg-gray" id="portfolio">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-8">
				<!-- section title -->
				<div class="title text-center">
					<h2> <?php echo $homePortfolio[0]["home_portfolio_title"] ?> </h2>
					<p> <?php echo $homePortfolio[0]["home_portfolio_description"] ?> </p>
					<div class="border"></div>
				</div>
				<!-- /section title -->
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">

				<div class="portfolio-filter">
					<button type="button" data-filter="all">All</button>
					<button type="button" data-filter="photography">Photography</button>
					<button type="button" data-filter="ios">IOS App</button>
					<button type="button" data-filter="development">Development</button>
					<button type="button" data-filter="design">Design</button>
				</div>

				<div class="row">
					<div class="col-12">
						<div class="filtr-container">
							<div class="col-md-3 col-sm-6 col-xs-6  " data-category="mix, design">
								<div class="portfolio-block">
									<img class="img-fluid" src="images/portfolio/portfolio-1.jpg" alt="">
									<div class="caption">
										<a class="search-icon" href="images/portfolio/portfolio-1.jpg" data-lightbox="image-1">
											<i class="tf-ion-ios-search-strong"></i>
										</a>
										<h4><a href="portfolio.html">AirBnB Postcard</a></h4>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6  " data-category="mix, design, ios">
								<div class="portfolio-block">
									<img class="img-fluid" src="images/portfolio/portfolio-2.jpg" alt="">
									<div class="caption">
										<a class="search-icon" href="images/portfolio/portfolio-2.jpg" data-lightbox="image-1">
											<i class="tf-ion-ios-search-strong"></i>
										</a>
										<h4><a href="portfolio.html">AirBnB Postcard</a></h4>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6  " data-category="mix, photography, development">
								<div class="portfolio-block">
									<img class="img-fluid" src="images/portfolio/portfolio-3.jpg" alt="">
									<div class="caption">
										<a class="search-icon" href="images/portfolio/portfolio-3.jpg" data-lightbox="image-1">
											<i class="tf-ion-ios-search-strong"></i>
										</a>
										<h4><a href="portfolio.html">AirBnB Postcard</a></h4>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6  " data-category="mix, photography, ios">
								<div class="portfolio-block">
									<img class="img-fluid" src="images/portfolio/portfolio-4.jpg" alt="">
									<div class="caption">
										<a class="search-icon" href="images/portfolio/portfolio-4.jpg" data-lightbox="image-1">
											<i class="tf-ion-ios-search-strong"></i>
										</a>
										<h4><a href="portfolio.html">AirBnB Postcard</a></h4>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6  " data-category="mix, design">
								<div class="portfolio-block">
									<img class="img-fluid" src="images/portfolio/portfolio-5.jpg" alt="">
									<div class="caption">
										<a class="search-icon" href="images/portfolio/portfolio-5.jpg" data-lightbox="image-1">
											<i class="tf-ion-ios-search-strong"></i>
										</a>
										<h4><a href="portfolio.html">AirBnB Postcard</a></h4>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6  " data-category="mix, design, development">
								<div class="portfolio-block">
									<img class="img-fluid" src="images/portfolio/portfolio-6.jpg" alt="">
									<div class="caption">
										<a class="search-icon" href="images/portfolio/portfolio-6.jpg" data-lightbox="image-1">
											<i class="tf-ion-ios-search-strong"></i>
										</a>
										<h4><a href="portfolio.html">AirBnB Postcard</a></h4>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6  " data-category="mix, photography">
								<div class="portfolio-block">
									<img class="img-fluid" src="images/portfolio/portfolio-7.jpg" alt="">
									<div class="caption">
										<a class="search-icon" href="images/portfolio/portfolio-7.jpg" data-lightbox="image-1">
											<i class="tf-ion-ios-search-strong"></i>
										</a>
										<h4><a href="portfolio.html">AirBnB Postcard</a></h4>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6  " data-category="mix, design, development">
								<div class="portfolio-block">
									<img class="img-fluid" src="images/portfolio/portfolio-1.jpg" alt="">
									<div class="caption">
										<a class="search-icon" href="images/portfolio/portfolio-1.jpg" data-lightbox="image-1">
											<i class="tf-ion-ios-search-strong"></i>
										</a>
										<h4><a href="portfolio.html">AirBnB Postcard</a></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /end col-lg-12 -->
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- End section -->

<!-- Start Our Team
	=========================================== -->
	<?php 
		include_once ("includes/our_team.section.php");
	?>
<!-- End section -->

<!--Start Contact Us And Google Map
	=========================================== -->
	<?php 
		include_once ("includes/contact.section.php");
	?>
<!-- end section -->

 <?php
  include_once "includes/footer.inc.php";
 ?>