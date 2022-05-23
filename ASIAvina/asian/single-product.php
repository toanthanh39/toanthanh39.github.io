<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package asian
 */

get_header();
?>

	<main id="primary" class="site-main">
		
			
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/contentproduct', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous', 'asian' ) . '</span> ',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next', 'asian' ) . '</span> ',
				)
			);

			
			

		endwhile; // End of the loop.
		?>
			</div>
		</div>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
