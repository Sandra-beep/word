
		<!-- header -->
        <?php get_header(); ?>

		<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-8 col-md-offset-2">
						    <h1><?php the_title(); ?></h1>
							<form>
								<label>Namn</label>
								<input type="text" />
								<label>E-post</label>
								<input type="email" />
								<label>Meddelande</label>
								<textarea></textarea>
								<input type="submit" value="Skicka" />
							</form>
						</div>
					</div>
				</div>
			</section>
		</main>

		<?php get_footer(); ?>