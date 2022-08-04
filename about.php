<?php
  include_once "includes/header.inc.php";


?>

<!-- HEADER -->
<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><?php echo $header[0]["nav_about"] ?></h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="index.php" class="text-white"> <?php echo $header[0]["nav_home"] ?></a> </li>
					<li class="breadcrumb-item active" aria-current="page"> <?php echo $header[0]["nav_about"] ?></li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!-- INFO -->
<section class="about-shot-info section-sm">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mt-20 text-center">
				<h2 class="mb-3"><?php echo $aboutInfo[0]["about_info_title"] ?></h2>
				<div class="<?php echo $autoTextDirection ?>">
					<p>
						<?php echo $aboutInfo[0]["about_info_description_1"] ?>
					</p>
					<p>
						<?php echo $aboutInfo[0]["about_info_description_2"] ?>
					</p>
					<p>
						<?php echo $aboutInfo[0]["about_info_description_3"] ?>
					</p>
				</div>
			</div>
			<div class="col-lg-6 mt-4 mt-lg-0">
				<img loading="lazy" class="img-fluid" src="images/company/company-image.jpg" alt="">
			</div>
		</div>
	</div>
</section>


<!-- PROMO -->
<section class="promo-video section-sm bg-gray">
	<div class="container">
		<div class="row justify-content-center">
			<!-- section title -->
			<div class="col-xl-6 col-lg-8">
				<div class="title text-center">
					<h2><?php echo $aboutPromo[0]["about_promo_title"] ?></h2>
					<p>
						<?php echo $aboutPromo[0]["about_promo_description"] ?>
					</p>
					<div class="border"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- /section title -->
			<div class="col-md-8 mx-auto embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/xQbCu7h4y70" allowfullscreen></iframe>
      </div>
		</div>
	</div>
</section>

<!--
Start Call To Action
==================================== -->
<section class="call-to-action-2 section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2><?php echo $aboutAction[0]["about_action_title"] ?></h2>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<!-- Start Our Team
		=========================================== -->
	<?php 
		include_once ("includes/our_team.section.php");
	?>
<!-- End section -->

<!--
Start Counter Section
==================================== -->
<section class="counter-wrapper section-sm">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-8 text-center">
				<div class="title">
					<h2><?php echo $aboutAward[0]["about_award_title"] ?></h2>
					<p>
						<?php echo $aboutAward[0]["about_award_description"] ?>
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- first count item -->
			<div class="col-md-3 col-sm-6 col-xs-6 text-center ">
				<div class="counters-item">
					<i class="tf-ion-ios-alarm-outline"></i>
					<div>
						<span class="counter" data-count="150">0</span>
					</div>
					<h3><?php echo $aboutAward[0]["about_award_client"] ?></h3>
				</div>
			</div>
			<!-- end first count item -->

			<!-- second count item -->
			<div class="col-md-3 col-sm-6 col-xs-6 text-center ">
				<div class="counters-item">
					<i class="tf-ion-ios-analytics-outline"></i>
					<div>
						<span class="counter" data-count="130">0</span>
					</div>
					<h3><?php echo $aboutAward[0]["about_award_project"] ?></h3>
				</div>
			</div>
			<!-- end second count item -->

			<!-- third count item -->
			<div class="col-md-3 col-sm-6 col-xs-6 text-center ">
				<div class="counters-item">
					<i class="tf-ion-ios-compose-outline"></i>
					<div>
						<span class="counter" data-count="99">0</span>
					</div>
					<h3><?php echo $aboutAward[0]["about_award_feedback"] ?></h3>

				</div>
			</div>
			<!-- end third count item -->

			<!-- fourth count item -->
			<div class="col-md-3 col-sm-6 col-xs-6 text-center ">
				<div class="counters-item kill-border">
					<i class="tf-ion-ios-bolt-outline"></i>
					<div>
						<span class="counter" data-count="250">0</span>
					</div>
					<h3><?php echo $aboutAward[0]["about_award_coffe"] ?></h3>
				</div>
			</div>
			<!-- end fourth count item -->
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- end section -->
<!--
Create Together
==================================== -->
<section class="call-to-action section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-8 text-center">
				<h2><?php echo $aboutTogether[0]["about_together_title"] ?></h2>
				<p>
					<?php echo $aboutTogether[0]["about_together_description"] ?>
				</p>
				<a href="contact.php" class="btn btn-main"><?php echo $header[0]["nav_home"] ?></a>
			</div>
		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->

<?php
  include_once "includes/footer.inc.php";
 ?>