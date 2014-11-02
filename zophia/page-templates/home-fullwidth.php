<?php 
//Template Name: Home Full Width
include (TEMPLATEPATH . ('/header2.php')); ?>

		    <!--******************** Feature ********************-->
   
      <section id="feature">
        <div class="container">
          <div class="row">
            <div class="span12">
             
            <div id="home-banner">
            	<div class="col-md-6">
						<?php if ( !function_exists('dynamic_sidebar')
						|| !dynamic_sidebar('home-banner') ) : ?>
						<?php endif; ?>
				</div>	
            </div>
            <!-- ./span12 -->
          </div>
          <!-- .row -->
        </div>
        <!-- ./container -->
      </section>
	</div><!-- /End header-wrap-->

<section id="home-wrap">
 <div class="container">
        <div class="row">
            <div class="span12">
				
		 <?php
		        $page = get_page_by_title( 'Home' );
		        $content = apply_filters('the_content', $page->post_content); 
		        echo $content;
		        ?>

	</div>
</section>
<section id="home-wrap-bottom">
	<div class="container">	
	<div class="span12">
		     <?php
		        $page = get_page_by_title( 'Featured Stories' );
		       	$pageID = 36;
		        echo '<div id="featured-stories-title">' . $page->post_title . '</div>';
		        $content = apply_filters('the_content', $page->post_content); 
		        echo $content;
		        ?>		</div>
					      <div class="row">
				

         <?php
                  $args = array( 'numberposts' => 3, 'order'=> 'ASC', 'orderby' => 'rand' );
                  $postslist = get_posts( $args );
                  foreach ($postslist as $post) :  setup_postdata($post); ?> 
                        <article class="col-md-4 post"> 
                         <div id="home-post-wrap">
	                        <?php if ( has_post_thumbnail() ) : ?>
	                              <a href="<?php the_permalink(); ?>" class="img-news" title="<?php the_title_attribute(); ?>">
	                              <?php the_post_thumbnail(); ?>
	                              </a>
	                            <?php endif; ?>
	                          	<div class="inside">                               
	                                
	                                  <a href="<?php the_permalink(); ?>"><h2>  <?php the_title(); ?> </h2></a>  

	                                    <div class="entry-content">         
	                                         <?php the_excerpt(); ?>                                   
	                          
                          				</div>
                             	 </div>
                                <div id="readmore-recentposts">
	                              <a href="<?php the_permalink(); ?>" class="more-link">Read more ></a> 
	                              <span class="post-date col-md-offset-5"><i class="icon-calendar"></i> <?php the_date('Y-m-d'); ?></span>
	                              </div>
                          <!-- /.inside -->
                          </div>
                        </article>
                        <!-- /.span4 -->    
                <?php endforeach; ?>
        	</div>
		</div>
			
			
		</div><!-- /end row -->

	
</div><!-- /end container -->
</section>
<?php get_footer(); ?>
