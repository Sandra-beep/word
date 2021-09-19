
		<!-- header -->
        <?php get_header(); ?>


		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1><?php the_title(); ?></h1>
							<?php 
								// the query
								$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>1)); ?>
								
								<?php if ( $wpb_all_query->have_posts() ) : ?>
								
								<ul>
								
									<!-- the loop -->
									<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
									<article>

										<!-- hämtar feature image från wp -->
										<img src="<?php echo get_the_post_thumbnail_url(); ?>" /> 
											<!-- loop för att hämta respektive del av inlägg från wordpres§s -->
											<h2 class="title">
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</h2>
											<ul class="meta">
												<li>
													<i class="fa fa-calendar"></i> <?php echo get_the_date() ?>
												</li>
												<li>
													<i class="fa fa-user"></i> <a href="forfattare.html"><?php the_author() ?></a>
												</li>
												<li>
													<i class="fa fa-tag"></i> <a href="kategori.html"><?php the_category(", ")?></a>
												</li>
											</ul>
											<p> <?php the_content(); ?> </p>
									</article>
									<?php endwhile; ?>
									<!-- end of the loop -->
								
								</ul>
								
									<?php wp_reset_postdata(); ?>
								
								<?php else : ?>
									<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
								<?php endif; ?>
							
							<nav class="navigation pagination">
								<h2 class="screen-reader-text">Inläggsnavigering</h2>
								<a class="prev page-numbers" href="">Föregående</a>
								<span class="page-numbers current">1</span>
								<a class="page-numbers" href="">2</a>
								<a class="next page-numbers" href="">Nästa</a>
							</nav>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
									<li>
										<form id="searchform" class="searchform">
											<div>
												<label class="screen-reader-text">Sök efter:</label>
												<input type="text" />
												<input type="submit" value="Sök" />
											</div>
										</form>
									</li>
								</ul>
								<ul role="navigation">
									<li class="pagenav">
										<h2>Sidor</h2>
										<ul>
											<li class="page_item current_page_item">
												<a href="">Blogg</a>
											</li>
											<li class="page_item">
												<a href="">Exempelsida</a>
											</li>
											<li class="page_item">
												<a href="">Kontakt</a>
											</li>
											<li class="page_item page_item_has_children">
												<a href="">Om mig</a>
												<ul class="children">
													<li class="page_item">
														<a href="">Intressen</a>
													</li>
													<li class="page_item page_item_has_children">
														<a href="">Portfolio</a>
														<ul class="children">
															<li class="page_item">
																<a href="">Projekt 1</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>
											<li class="page_item">
												<a href="">Startsida</a>
											</li>
										</ul>
									</li>
									<li>
										<h2>Arkiv</h2>
										<ul>
											<li>
												<a href="arkiv.html">oktober 2016</a>
											</li>
										</ul>
									</li>
									<li class="categories">
										<h2>Kategorier</h2>
										<ul>
											<li class="cat-item">
												<a href="">Natur</a> (1)
											</li>
											<li class="cat-item">
												<a href="">Okategoriserade</a> (3)
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</section>
		</main>

		<?php get_footer();?>