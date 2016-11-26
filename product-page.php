<?php
/*Template Name: Product Delivery*/
get_header(); ?>

	<main role="main">
		<!-- section -->
                <section class="passengerSection">
                    <div class="leftSide">  
                        
                        <h2>Passenger Pick-up</h2>
                        
                        <div id="accordion">

                            <a href="#one" class="first">Reservation Instructions</a>
                            <div id="one">
                                 <?php $post_id = 81; // assign post id
                        $queried_post = get_page($post_id);
                        {  ?>
                        <div class="left">
                                           

                        <div class='description_service'>
                            <p><?php echo $queried_post->post_content;  ?></p></div>
                        </div><!-- left -->

                        
                        <?php  } ?>
                            </div>

                            <a href="#two">What We Deliver</a>
                            <div id="two">
                                <?php $post_id = 76; // assign post id
                        $queried_post = get_page($post_id);
                        {  ?>
                        <div class="left">
                                           

                        <div class='description_service'>
                            <p><?php echo $queried_post->post_content;  ?></p></div>
                        </div><!-- left -->

                        
                        <?php  } ?>
                            </div>

                            
                        
                            
                        </div><!--accordion -->
                    </div><!-- leftside -->        
                            
                    <div class="rightSide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/global_google_map.png" alt="map">
                    </div><!-- rightside -->

		</section><!-- /section -->
	</main>



<?php get_footer(); ?>
