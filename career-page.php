<?php 
/*Template Name: Career Oppurtunities*/
get_header(); ?>

	<main role="main">
		<!-- section -->
                <section class="careerSection">

			<h1><?php the_title(); ?></h1>

		<?php echo do_shortcode('[gravityform id="1" title="true" description="true"]'); ?>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
