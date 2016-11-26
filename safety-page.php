<?php
/* Template Name: Safety Page */
get_header(); ?>

	<main role="main">
		<!-- section -->
                
                 <div class="bannerArea"></div>
                <section class="safetySection">
                    
                   

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('safetyContent'); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			

		<?php endif; ?>
                        
                        
                        
                 <div class="testimonialsBox">

            
                     

            <?php
            $args = array('post_type' => 'testimonials', 'orderby' => 'rand', 'posts_per_page' => '1');

            $loop = new WP_Query($args);

            while ($loop->have_posts()) : $loop->the_post(); ?>

                     <span>&ldquo;</span><?php the_content(); ?><span>&rdquo;</span>
                     <p id="quoteauthor"><?php the_meta(); ?></p>

<?php endwhile; ?>

        </div><!-- testimonialsBox-->        
        
                    <div class="clearfix"></div>
                       <div class="grayline"></div>        
                        
                        
                <div class="serviceBox">
                        <h2>24-Hour Service</h2>
                        <p>Commute. Errand. Appointment. Late night.<br />
                        Wherever you need to go, whatever you need delivered, GlobalCab is your premier choice.</p>
                    </div>
                    
                    <div class="clearfix"></div>
                    
                    <div class="callArea">
                        <div class="circle"><a href="tel:540657-2227"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone.png" alt="telephone"></a></div>
                        <p>Give us a call</p>
                        <span><p>(540)657-2227</p></span>
                    </div>
                    
                    
                    
                    <div class="messageArea">
                        <div class="circle"><a href="tel:540657-2227"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/envelope.png" alt="envelope" ></a></div>
                        <p>Send us a message</p>
                        <span><p>XXX@global-cab.com</p></span>
                    </div>
                    
                    <div class="faresPrice">
                        <h3>Local Fares Starting at <span>&#36;6</span></h3><h3> Airport Fares Starting at <span>&#36;65</span></h3>
                    </div>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
