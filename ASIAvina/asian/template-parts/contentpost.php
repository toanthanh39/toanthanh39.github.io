<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package asian
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header single-header">
       
        <?php
		if ( is_singular() ) :
			
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;?>
       

    </header><!-- .entry-header -->
    <section id="single-main">
        <div class="single-content">
            <div class="post-thumb-single">
                <?php asian_post_thumbnail(); ?>
            </div>


            <div class="entry-content">
                <?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'asian' ),
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
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'asian' ),
						'after'  => '</div>',
					)
				);
				?>
            </div><!-- .entry-content -->
        </div>
		<div class="single-bar">
			<div class="single-bar-title">
				<h3>Promotion</h3>
				<div class="vector"></div>
			</div>
			<div class="single-bar-content">
				<?php
					$args=array(
						'post_type'=>'post',
						'status'=>'publish',
						'cat'=> 4,
						'posts_per_page'=>4

					);
					$get_post_bar= new WP_query($args);
					if($get_post_bar->have_posts()):
					while($get_post_bar->have_posts()):$get_post_bar->the_post();
				?>
			
				<div class="bar-post-child">
					
					<div class="post-bar-img">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
					</div>
					
					<div class="post-bar-text">
						<?php the_excerpt(); ?>
					</div>
				</div>
				<?php endwhile;
				wp_reset_postdata(); ?>
                <?php endif; ?>
			</div>
		</div>
    </section>
   
</article><!-- #post-<?php the_ID(); ?> -->