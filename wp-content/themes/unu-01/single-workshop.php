<?php get_header(); ?>

			<div id="content">


					<main id="main" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

				                <header class="workshop-header float-container">

				                  <div class='artist-title L-1-2'>
				                    <h1 class='title-size'><?php the_field('artist'); ?></h1>
				                    <p class='title-size'><?php the_field('artist_description'); ?></p>
				                  </div>

				                  <div class='group-title L-1-2'>
				                    <h1 class='title-size'><?php the_field('group'); ?></h1>
				                    <p class='title-size'><?php the_field('group_description'); ?></p>
				                  </div>

				                  <h1 class='title-size L-1-1'>
				                    <?php the_title(); ?>
				                  </h1>
				                
				                </header>


				                <section class='mood-gallery L-2-3 centered'>
				                <?php 

									$images = get_field('mood_gallery');

									if( $images ): ?>
									    <ul class='gallery'>
									        <?php foreach( $images as $image ): ?>
									            <li class='slide L-2-3 centered'>
									                     <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
									                <p><?php echo $image['caption']; ?></p>
									            </li>
									        <?php endforeach; ?>
									    </ul>
									<?php endif; ?>
</section>




				                <section>
				                  <?php the_content(); ?>
				                </section>


				            </article> <?php // end article ?>









						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>

					</main>


			</div>

<?php get_footer(); ?>
