<!-- main menu -->
<div class="navbar-container py-2">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<nav class="navbar navbar-dark pt-1 pb-0">
					<a class="navbar-brand" href="index.php">Natalia Hot Teen</a>
					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbar">
						<ul class="navbar-nav text-center nav-justified w-100">
							<?php
								foreach ($navbar_attrs as $key => $value) {
									echo '
									<li class="nav-item">
										<a class="nav-link h2 text-patua-one" href="' . $value['url'] . '">
											<i class="material-icons md-36 align-text-top">' . $value['icon'] . '</i> ' . $value['name'] . '
										</a>
									</li>';
								}
							?>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</div>