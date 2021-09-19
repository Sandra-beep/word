
<!-- Hämtar blogginlägg -->


		<!-- header -->
        <?php get_header(); ?>

		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1><?php the_title(); ?></h1>
								<?php while(have_posts()){ 
									the_post()
								  ?> 
								<article>
									<img src="<?php echo get_the_post_thumbnail_url(); ?>"/>
									<h2 class="title">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h2>
									<ul class="meta">
										<li><i class="fa fa-calendar"></i><?php echo the_time('j'), " ", the_time('F'), " ", the_time('Y'); ?></li>
										<li>
											<i class="fa fa-user"></i>
											<?php the_author_posts_link(); ?>
										</li>
										<li>
											<i class="fa fa-tag"></i>
											<?php echo get_the_category_list(", "); ?>
										</li>
									</ul>
									<p><?php the_excerpt(); ?></p>
								</article>
								<?php } ?>
							
							<nav class="navigation pagination">
								<?php echo paginate_links(); ?>
							</nav>
						</div>
                        <aside id="secondary" class="col-xs-12 col-md-3">
          <div id="sidebar">
            <ul>
              <li>
                <?php get_search_form();?>
              </li>
            </ul>
            
            <ul role="navigation">
              <h2>Pages</h2>
              <?php  wp_nav_menu([
							'theme_location' => 'side_nav_menu',
                            'menu_class' => 'side-menu',
                            'menu_id' => 'blog-side-menu',
						]) ?>
                <h2>Arkiv</h2>
              <?php get_archives();?>
              <li class="categories">
                <h2>Kategorier</h2>
                <ul>
                <?php
                $categories = get_categories( array(
                    'orderby' => 'name',
                    'order'   => 'ASC'
                ) );

                foreach( $categories as $category ) {
                echo '<li class="cat-item"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a><span class="text-white"> (' . $category->category_count . ')' . '</span></li>';   
                } ?>
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