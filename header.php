<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
                
                
		<div class="wrapper">
                    
                    <div class="headerWrap">
			<!-- header -->
			<header class="header clear" role="banner">
                            
                            <div id="greenBox">
                                <a href="<?php echo home_url(); ?>/globalcab/booking/"><h3>Booking</h3></a>
                                
                            </div>

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

					 <!-- nav -->
                                            <nav class="nav" role="navigation">
                                            <input class="menu-btn" type="checkbox" id="menu-btn" />	
                                            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>

                                                    <?php html5blank_nav(); ?>
                                            </nav><!-- /nav -->
                                            
                                            <div class="clearfix"></div>
                                            
                                            <div class="headerText">
                                                <h3>Serving Stafford, MCB Quantico, Fredericksburg, Spotsylvania and King George </h3>
                                                <h3>Pickup and Drop Off OT Dulles International Airport, Ronald Reagan National Airport, BWI and Richmond International Airport.</h3>    
                                            </div>
                                            
                                            <div class="socialIcons ">
                                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" alt="facebook" ></a>
                                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.png" alt="twitter"></a>
                                                 <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/yelp.png" alt="yelp"></a>
                                                <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/google+.png" alt="google+"></a>
                                            </div>
			</header>
			<!-- /header -->
                
                    </div><!-- headerWrap -->    
