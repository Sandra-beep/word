<?php ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Labb 1</title>
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery.js"></script>
</head>
<body>

	<div id="wrap">

		<!-- header -->
        <?php get_header(); ?>



		<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
                                <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2021/09/city.jpg" />
								<div class="text">
									<h1>Hej och välkommen!</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>

    <?php get_footer(); ?>

