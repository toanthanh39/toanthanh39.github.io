<?php
/**
 * 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package asian
 */

get_header();
?>

	<main id="primary" class="site-main">
	<?php get_template_part("/effect/search-fixed"); ?>
    <?php get_template_part("/effect/need-help"); ?>  
		<div class="single-outer">
			<div class="single-container">
			
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/contentpost', get_post_type() );

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous', 'asian' ) . '</span> ',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next', 'asian' ) . '</span> ',					
							
						)
					);

					
					

				endwhile;
				?>
			</div>
		</div>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
