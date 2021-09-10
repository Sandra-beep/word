<?php ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Labb 1</title>
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="css/custom.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery.js"></script>
</head>

<?php

get_header();

?>

		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12">
						<h1><?php the_title(); ?></h1>
							<p><?php the_content(); ?></p>
						</div>
					</div>
				</div>
			</section>
		</main>

		<?php get_footer(); ?>