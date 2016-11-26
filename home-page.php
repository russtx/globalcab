<?php
/* Template Name: Home Page */
get_header(); ?>

	<main role="main">
		<!-- section -->
                <section class="homeSection">
                    <div class="passengerPickup">
                        <a href="<?php echo home_url(); ?>/globalcab/passenger-pick-up/"><button><h3>Passenger Pickup</h3></button></a>
                        <p>Trust your Driver, afford your fare</p>
                    </div>
                    <div class="productDelivery">
                        <a href="<?php echo home_url(); ?>/product-delivery/"><button><h3>Product Delivery</h3></button></a>
                        <p>Delivery in minutes</p>
                    </div>
                    
                    <div class="clearfix"></div>
                    
                    <div class="callContainer">
                        
                        <div class="callInside">
                    
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
                        
                        </div><!-- callInside -->        
                        
                    </div><!-- callContainer -->    
                    
                    <div class="clearfix"></div>
                   
                    <div class="serviceArea" id="service-area">
                        <div class="serviceInside">
                            <span><h2>Service Area</h2></span>

                                    <?php $post_id = 10; // assign post id
                            $queried_post = get_page($post_id);
                            {  ?>
                            <div class="left">
                            <div class='service_title'><h3><a href="<?php echo get_page_link($post_id); ?>"><?php echo $queried_post->post_title;  ?></a></h3></div>                    

                            <div class='description_service'>
                                <p><?php echo $queried_post->post_content;  ?></p></div>
                            </div><!-- left -->

                            <div class='mapImage'><?php echo get_the_post_thumbnail( $post_id); ?></div>
                            <?php  } ?>
                        </div><!-- serviceInside -->
                    </div><!-- serviceArea -->
                    
                    <div class="pricingArea" id="pricing">
                        
                        <div class="priceInside">
                                                
                                <?php $post_id = 12; // assign post id
                               $queried_post = get_page($post_id);
                               {  ?>
                               <div class='pricingImage'><?php echo get_the_post_thumbnail( $post_id); ?></div>

                               <div class="right">

                               <span><h2>Pricing</h2></span>

                               <div class='pricing_title'><h3><a href="<?php echo get_page_link($post_id); ?>"><?php echo $queried_post->post_title;  ?></a></h3></div>                    

                               <div class='description_pricing'>
                                   <p><?php echo $queried_post->post_content;  ?></p></div>

                               </div><!-- right -->

                               <?php  } ?>
                               
                        </div><!-- priceInside -->       
                        
                    </div><!-- pricingArea -->
                    
                    
                    
                    <div class="aboutArea" id="about">
                        
                        <div class="aboutInside">
                        
                                <div class="left">

                                <span><h2>About Us</h2></span>

                                <?php $post_id = 14; // assign post id
                                $queried_post = get_page($post_id);
                                {  ?>
                                <div class='about_title'><h3><a href="<?php echo get_page_link($post_id); ?>"><?php echo $queried_post->post_title;  ?></a></h3></div>                    

                                <div class='description_about'>
                                    <p><?php echo $queried_post->post_content;  ?></p></div>

                                </div><!-- left -->

                                <div class='aboutImage'><?php echo get_the_post_thumbnail( $post_id); ?></div>
                                <?php  } ?>
                        </div><!-- aboutInside -->        
                        
                    </div><!-- aboutArea -->
                        
                        
		</section><!--homeSection -->
                
                <div class="clearfix"></div>
                <div class="whiteSpace"></div>
                <div class="clearfix"></div>
	</main>




<?php get_footer(); ?>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

