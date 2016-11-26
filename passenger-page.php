<?php
/*Template Name: Passenger Pickup*/
get_header(); ?>

	<main role="main">
		<!-- section -->
                <section class="passengerSection">
                    <div class="leftSide">  
                        
                        <h2>Passenger Pick-up</h2>
                        
                        <div id="accordion">

                            <a href="#one" class="first">Reservation instructions</a>
                            <div id="one">
                                 <?php $post_id = 72; // assign post id
                        $queried_post = get_page($post_id);
                        {  ?>
                        <div class="left">
                                           

                        <div class='description_service'>
                            <p><?php echo $queried_post->post_content;  ?></p></div>
                        </div><!-- left -->

                        
                        <?php  } ?>
                            </div>

                            <a href="#two">Service Area</a>
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

                            <a href="#three">Airports</a>
                            <div id="three">
                               <?php $post_id = 78; // assign post id
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
