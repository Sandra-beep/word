
		<!-- header -->
        <?php get_header(); ?>

        <?php while(have_posts()){ the_post() ?> 
            
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

<!-- footer -->
<?php get_footer(); ?>
