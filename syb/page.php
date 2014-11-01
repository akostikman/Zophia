<?php if (is_front_page()) { ?>
	<?php get_template_part('home-fullwidth'); ?>
<?php } else { ?>
<?php get_header(); ?>

  <div class="page-featured-image">							
									     <?php if ( has_post_thumbnail() ) : ?>
			                              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			                             <div class="page-title"> <?php the_title(); ?> </div>
			                              <div class="img-news"><?php the_post_thumbnail(); ?> </div>

			                              </a>
			                            <?php endif; ?>
			                     </div>
 <div class="container">

        <div class="row" id="page-content">

            <div class="col-md-8">
				

						<?php if (have_posts()) : ?>

							<?php while (have_posts()) : the_post(); ?>

								<div class="post" id="post-<?php the_ID(); ?>">	

										<?php the_content('Read more &raquo;'); ?>

					<br />
					<?php edit_post_link('Edit', '', ' | '); ?> <br />
					<div class="line"></div>
								</div>

							<?php endwhile; ?>

							<div class="navigation">
								<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
								<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
							</div>

						<?php else : ?>

							<h2 class="center">Not Found</h2>
							<p class="center">Sorry, but you are looking for something that isn't here.</p>
							<?php include (TEMPLATEPATH . "/searchform.php"); ?>

						<?php endif; ?>

						</div>
						<?php get_sidebar(); ?>
			</div>
			
		</div><!-- /end container -->
</div>

<?php get_footer(); ?>
<?php } ?>