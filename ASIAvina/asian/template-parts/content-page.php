<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package asian
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- <header class="entry-header">
	
		 <img id="icon-title" src="<?php echo get_template_directory_uri();?>/image/ASIAvina/left.png" alt="">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<img id="icon-title" src="<?php echo get_template_directory_uri();?>/image/ASIAvina/right.png" alt="">    

	</header> -->

	<?php asian_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'asian' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'asian' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
