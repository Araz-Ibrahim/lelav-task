<?php
  include_once "includes/header.inc.php";
 ?>


<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><?php echo $header[0]["nav_contact"] ?></h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="index.php" class="text-white"><?php echo $header[0]["nav_home"] ?></a></li>
					<li class="breadcrumb-item active" aria-current="page"><?php echo $header[0]["nav_contact"] ?></li>
				</ol>
			</div>
		</div>
	</div>
</section>

 <!--Start Contact Us And Google Map
	=========================================== -->
	<?php 
		include_once ("includes/contact.section.php");
	?>
<!-- end section -->

<?php
  include_once "includes/footer.inc.php";
 ?>