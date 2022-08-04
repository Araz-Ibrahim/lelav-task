<!-- Start Our Team
		=========================================== -->
    <section class="team" id="team">
	<div class="container">
		<div class="row justify-content-center">
			<!-- section title -->
			<div class="col-xl-6 col-lg-8">
				<div class="title text-center ">
					<h2><?php echo $aboutTeam[0]["about_team_title"] ?></h2>
					<p>
						<?php echo $aboutTeam[0]["about_team_description"] ?>
					</p>
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->
		</div>

		<div class="row">
			<?php foreach ($ourTeam as $team) { ?>
							
				<!-- team member -->
				<div class="col-lg-4 col-md-6">
					<div class="team-member text-center">
						<div class="member-photo">
							<!-- member photo -->
							<img loading="lazy" class="img-fluid" src="<?php echo $team["our_team_img"] ?>" alt="Meghna">
							<!-- /member photo -->

							<!-- member social profile -->
							<div class="mask">
								<ul class="clearfix">
									<li><a href="https://themefisher.com/"><i class="tf-ion-social-facebook"></i></a></li>
									<li><a href="https://themefisher.com/"><i class="tf-ion-social-twitter"></i></a></li>
									<li><a href="https://themefisher.com/"><i class="tf-ion-social-google-outline"></i></a></li>
									<li><a href="https://themefisher.com/"><i class="tf-ion-social-dribbble"></i></a></li>
								</ul>
							</div>
							<!-- /member social profile -->
						</div>

						<!-- member name & designation -->
						<div class="member-content">
							<h3><?php echo $team["our_team_name"] ?> </h3>
							<span><?php echo $team["our_team_work"] ?></span>
							<p>
								<?php echo $team["our_team_description"] ?>
							</p>
						</div>
						<!-- /member name & designation -->
					</div>
				</div>
				<!-- end team member -->
			<?php } ?>
		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->