<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
            <!--<meta content="60" http-equiv="refresh">-->
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script|Open+Sans:400,800,700,600,300,300italic,400italic,600italic,700italic,800italic|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>

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

			<!-- header -->
			<header class="header clear" role="banner">
                            
                            
                                    <div class="searchBox">
                                <?php get_search_form(); ?>
                            </div>
                            
                                        <div class="socialIcons" id="top">
                                            <a href="https://www.facebook.com/search/top/?q=crystal%20beach%20local%20news" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-60.png" alt="Facebook" ></a>
                                                
                                            <a href="https://twitter.com/search?q=crystal%20beach%20local%20news&src=typd" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter-60.png" alt="Twitter" ></a>
                                            
                                            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram-60.png" alt="instagram" ></a>
                                            
                                            
                                        </div>
                            
                            

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-background.png" alt="Logo" class="phone-logo-img">
                                                        
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo768-background.png" alt="Logo" class="tablet-logo-img">
                                                        
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-header.png" alt="Logo" class="desktop-logo-img">
                                                        
                                                        
						</a>
                                            
                                            <h1>Crystal Beach 
                                                <span>Local News</span></h1>
                                            
					</div>
					<!-- /logo -->

					 <!-- nav -->
                                            <nav class="nav" role="navigation">
                                            <input class="menu-btn" type="checkbox" id="menu-btn" />	
                                            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>

                                                    <?php html5blank_nav(); ?>
                                            </nav><!-- /nav -->


			</header>
			<!-- /header -->
