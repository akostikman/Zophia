<?php 
/**
 * The main template file
 *
 */
get_header(); ?>
 <div class="container">
        <div class="row">
            <div class="col-md-8">
				
				
				  <?php if (have_posts()) : ?>

				    <?php while (have_posts()) : the_post(); ?>

				      <div class="post" id="post-<?php the_ID(); ?>">
				        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				        <small>Written by <?php the_author() ?> on <abbr title="<?php the_time('Y-m-d\TH:i:sO'); ?>"><?php unset($previousday); printf(__('%1$s &#8211; %2$s'), the_date('', '', '', false), get_the_time()) ?></abbr> - <?php if(function_exists('the_views')) { the_views(); } ?> </small><br /><br />


				          <?php the_content('Read more &raquo;'); ?>

				<br />
				<?php the_tags('Tags: ', ', ', '<br />'); ?>Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?><br />
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

				  <?php endif; ?>

						</div>
				<?php get_sidebar(); ?>
			</div>
			
		</div><!-- /end container -->
</div>>
</div>

<?php get_footer(); ?>
