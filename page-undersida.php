
		<!-- header -->
        <?php get_header(); ?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
                        <h1><?php the_title(); ?></h1>
							<p><?php the_content(); ?></p>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
						<ul class="side-menu">
								<li>
									<a href="http://localhost/wordpress/index.php/undersida/">Undersida</a>
								</li>
								<li>
									<a href="http://localhost/wordpress/index.php/undersida-2/">Undersida 2</a>
								</li>
								<li>
									<a href="http://localhost/wordpress/index.php/undersida-3/">Undersida 3</a>
								</li>
								<li>
									<a href="http://localhost/wordpress/index.php/undersida-4/">Undersida 4</a>
								</li>
							</ul>
						</aside>
					</div>
				</div>
			</section>
		</main>

<!-- footer -->
<?php get_footer(); ?>
