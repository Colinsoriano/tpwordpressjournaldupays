<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head() ?>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary navbar-dark mb-4">
		<div class="container-fluid">

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">

				<?php wp_nav_menu([
					'theme_location' => 'header',
					'container' => false,
					'menu_class' => 'navbar-nav mr-auto'
				])
				?>

				<?= get_search_form() ?>
			</div>
		</div>
	</nav>

	<div class="container">