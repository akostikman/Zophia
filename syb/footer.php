<?php
/**
 * The template for displaying the footer
 */
?>
	<section id="topfooter">
		<div class="container">
		<div class="row">
		<div class="span12">

						<?php if ( !function_exists('dynamic_sidebar')
						|| !dynamic_sidebar('home-left') ) : ?>
						<?php endif; ?>
			
			</div>
		</div>
		</div>	
	</section>
</div><!-- #main .wrapper -->



	<div class="footer-wrapper">
	  <div class="container">
	  	<div class="row">

        <footer>
        		<div class="col-md-4">	
						<?php if ( !function_exists('dynamic_sidebar')
						|| !dynamic_sidebar('footer-left') ) : ?>
						<?php endif; ?>
					</div>

					<div class="col-md-4">
						<?php if ( !function_exists('dynamic_sidebar')
						|| !dynamic_sidebar('footer-middle') ) : ?>
						<?php endif; ?>
					</div>
					<div class="col-md-4">
						<?php if ( !function_exists('dynamic_sidebar')
						|| !dynamic_sidebar('footer-right') ) : ?>
						<?php endif; ?>
					</div>

        </footer>

			
        </div>
   
      </div>
      <!-- ./container -->
    </div>

    <section id="copyright">
    	<div class="container">
    	     <div class="span12">

          <small>All rights reserved.</small>
          	</div>
          </div>
      <!-- ./container -->
    </section>

<?php wp_footer(); ?>
</body>
</html>