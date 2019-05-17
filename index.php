<?php require_once 'shared/config.php' ?>

<!doctype html>
<html lang="en">
	<head>
		<?php require_once 'shared/head.php'; ?>
	</head>

	<body class="<?php echo $body_class ?>">
		<?php 
			// navbar
			require_once 'shared/navbar.php';
		?>

		<?php
	$NataliaCarouselDir = 'content/natalia-hot-teen/default/*.jpg';

	// Search the gallery directory for images
	/*
	foreach(glob($NataliaCarouselDir) as $value) {

		// Generate the HTML code to display each image in a grid
		echo "<a href='$value'>";
		echo "<img src='$value'>";
		echo "</a>";
	}
	*/
		?>



		<!-- hottest sets section -->
		<div class="hottest-sets-container py-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-1"></div>
					<div class="col-lg-10">
						<h3 class="text-primary text-md-center text-patua-one mb-0 h1">Natalia Hot Teen</h3>
						<p class="text-justify text-md-center mt-4 mb-5 lead">Watch stunning ex-girlfriends naked showing off their nice tits, desperate housewives cheating on their husbands as soon as they leave, exploited teens spreading their legs wide open.</p>
					</div>
					<div class="col-lg-1"></div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="card-columns">
							<?php 
								foreach($hottest_sets_attrs as $value){
									echo '
										<a href="' . $value['url'] . '">
											<div class="card rounded-0 mb-1">
												<img class="card-img rounded-0 lazy" alt="' . $value['alt'] . '" title="" data-src="' . $value['image'] . '">
												
												<div class="card-img-overlay p-0">
													<p class="card-title text-warning text-uppercase font-weight-bold mt-2 mb-0 px-3">' . $value['title'] . '</p>
													<p class="card-title text-warning mb-0 px-3">' . $value['grades'] . '</p>
													<p class="card-text text-white mb-0 pt-4 pb-3 px-3">' . $value['text'] . '</p>
												</div>
											</div>
										</a>
									';
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>



		<?php
			// footer section
			require_once 'shared/footer.php';

			// copyright section
			require_once 'shared/copyright.php';

			// javascript libraries
			require_once 'shared/libraries.php';
		?>
	</body>
</html>