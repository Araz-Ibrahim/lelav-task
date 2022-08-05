 <!--Start Contact Us
	=========================================== -->
  <section class="contact-us" id="contact">
 	<div class="container">
 		<div class="row justify-content-center">
			 <!-- section title -->
 			<div class="col-xl-6 col-lg-8">
				<div class="title text-center">
					<h2><?php echo $contact[0]["contact_title"] ?></h2>
					<p>
						<?php echo $contact[0]["contact_description"] ?>
					</p>
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->
		</div>
 		<div class="row">
 			<!-- Contact Details -->
 			<div class="contact-details col-md-6 text-center">
 				<h3 class="mb-3"><?php echo $contact[0]["contact_details"] ?></h3>
 				<p class="<?php echo $autoTextDirection ?>">
				 	<?php echo $contact[0]["contact_details_description"] ?>
				</p>
 				<ul class="contact-short-info mt-4">
 					<li class="mb-3">
 						<i class="tf-ion-ios-home"></i>
 						<span>Bile, Barzan, Erbil, Kurdistan</span>
 					</li>
 					<li class="mb-3">
 						<i class="tf-ion-android-phone-portrait"></i>
 						<span>Phone-1: +964-750-705-2090</span>
 					</li>
 					<li class="mb-3">
 						<i class="tf-ion-android-phone-portrait"></i>
 						<span>Phone-2: +964-751-705-2090</span>
 					</li>
 					<li>
 						<i class="tf-ion-android-mail"></i>
 						<span>Email: bergareyaraz@gmail.com</span>
 					</li>
 				</ul>
 				<!-- Footer Social Links -->
 				<div class="social-icon">
 					<ul>
 						<li><a href="https://themefisher.com/"><i class="tf-ion-social-facebook"></i></a></li>
 						<li><a href="https://themefisher.com/"><i class="tf-ion-social-twitter"></i></a></li>
 						<li><a href="https://themefisher.com/"><i class="tf-ion-social-dribbble-outline"></i></a></li>
 						<li><a href="https://themefisher.com/"><i class="tf-ion-social-linkedin-outline"></i></a></li>
 					</ul>
 				</div>
 				<!--/. End Footer Social Links -->
 			</div>
 			<!-- / End Contact Details -->

 			<!-- Contact Form -->
 			<div class="contact-form col-md-6 ">
 				<form id="contact-form" method="post" role="form" action="contact-submit-form.php">
 					<div class="form-group mb-4">
 						<input type="text" placeholder="<?php echo $contact[0]["contact_form_name"] ?>" class="form-control" name="name" id="name" required>
 					</div>

 					<div class="form-group mb-4">
 						<input type="email" placeholder="<?php echo $contact[0]["contact_form_email"] ?>" class="form-control" name="email" id="email" required>
 					</div>

 					<div class="form-group mb-4">
 						<input type="text" placeholder="<?php echo $contact[0]["contact_form_subject"] ?>" class="form-control" name="subject" id="subject" required>
 					</div>

 					<div class="form-group mb-4">
 						<textarea rows="6" placeholder="<?php echo $contact[0]["contact_form_message"] ?>" class="form-control" name="message" id="message" required></textarea>
 					</div>
 					<div id="cf-submit">
 						<input type="submit" id="contact-submit" class="btn btn-transparent" name="submit" value="<?php echo $contact[0]["contact_form_btn_submit"] ?>">
 					</div>

 				</form>
 			</div>
 			<!-- ./End Contact Form -->

 		</div> <!-- end row -->
 	</div> <!-- end container -->
 </section> <!-- end section -->

 <!--================================
=            Google Map            =
=================================-->
<div class="google-map">
	<div id="map_canvas" class="map_canvas" data-latitude="36.855400" data-longitude="42.988010" data-marker="images/marker.png" data-marker-name="Bingo"></div>
</div>
 <!--====  End of Google Map  ====-->