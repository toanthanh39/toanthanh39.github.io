<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mythemeTL
 */

?>
<div id="post-content">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="post-content-container"></div>
			<div class="post-all-title">
			<!-- <header class="entry-header"> -->
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				// if ( 'post' === get_post_type() ) :
					?>
						
			<!-- </header> -->
			<!-- .entry-header -->
			</div>
			<div class="post-all">
				<div class="post-thumb-excerp">
						
					<div class="post-thumb-excerp-img">
						<?php mythemetl_post_thumbnail(); ?>
					</div>
					<div class="post-thumb-excerp-detail">
						<?php the_excerpt(); ?>	
						<img src="<?php echo get_template_directory_uri();?>/image/date-icon.png" alt="">
					</div>
					
					

				</div>
				<div class="entry-content">
					<?php
					the_content(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'mythemetl' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post( get_the_title() )
						)
					);

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mythemetl' ),
							'after'  => '</div>',
						)
					);
					?>
				</div><!-- .entry-content -->

			</div>
		<!-- .entry-footer -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
