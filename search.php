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

<?php

get_header();

?>

        <main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">
							<h1>Sökresultat för: <?php print site_url() ?></h1>
							<div class="searchform-wrap">
								<form id ="searchform" class = "searchform" action =”/” method=”GET”>
									<div>
										<label class ="screen-reader-text" for =”search”> Sök efter: <?php echo home_url(’/’); ?> </label>
										<input type =”text” name = ”s” value =”<?php the_search_query(); ?>” />
										<input type =”image” alt = ”search” src = ”<?php bloginfo(’template_url’); ?> /images/search.png” />
										<input type="submit" value="Sök" />
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>

<!-- footer -->
<?php get_footer(); ?>
