<?php
/**
 * Template Name: Promotion-page
 */

get_header();
?>

<main id="primary" class="site-main">
<?php get_template_part("/effect/search-fixed"); ?>
<?php get_template_part("/effect/need-help"); ?>  
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <img id="icon-title" src="<?php echo get_template_directory_uri();?>/image/ASIAvina/left.png" alt="">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <img id="icon-title" src="<?php echo get_template_directory_uri();?>/image/ASIAvina/right.png" alt="">

        </header><!-- .entry-header -->


    <section id="promo-wrap1">
          <div id="text-hide">
              SALE
          </div>
          <div class="post-large_banner">
              <?php
                $args=array(
                    'post_type'=> "post",
                    'post_per_page'=> 1,
                    'p'=> 303,
                    'post_status'=>'publish'
                );
                $get_post= new WP_query($args);
                if($get_post->have_posts()) : $get_post->the_post();
              ?>
              <div class="large-post-title">
                     <h1><?php the_title();?></h1>
                     <div class="large-post-excerp">
                         <p><?php the_excerpt(); ?></p>
                     </div>
                     <div class="large-button">
                         <a href="<?php the_permalink(); ?>">View more</a>
                     </div>

              </div>
              <div class="large-post-thumb">
                    <?php the_post_thumbnail(); ?>
              </div>

              <?php endif; ?>
          </div>
    </section>
    <section id="season-sale">
        <div class="related-title">
            <div class="vector"></div>
            <h3>Promotion Sale</h3>
            <div class="vector"></div>

        </div>
        <div class="season-sale-content">
            <div class="ss-content-child1 ss-content">            
            </div>
            <div class="ss-content-child2 ss-content">
            <?php
                $args=array(
                    'post_type'=> "post",
                    'post_per_page'=> 1,
                    'p'=> 325,
                    'post_status'=>'publish'
                );
                $get_post= new WP_query($args);
                if($get_post->have_posts()) : $get_post->the_post();
              ?>
                <div class="ss-child-thumb">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="ss-link">
                    <a href="<?php the_permalink(); ?>">view more</a>
                </div>


            <?php endif; ?>
            </div>
            <div class="ss-content-child3 ss-content"></div>
        </div>
    </section>
    <section id="related-promotion">
        <div class="related-title">
            <div class="vector"></div>
            <h3>Related Promotion</h3>
            <div class="vector"></div>

        </div>
        <div class="related-grid">
            <?php 
                $args = array(
                    'posts_per_page'  => 6,
                    'post_type'       => 'post',
                    'post_status'     => 'publish',
                    'cat'             => 4
                );
                $the_query = new WP_Query( $args );
                ?>
                <?php if( $the_query->have_posts() ): ?>
                <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="post-child-sales">
                        <div class="child-sale-thumb">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="child-sale-content">
                            <h5> <?php the_title(); ?></h5>  
                        </div>
                        <div class="child-sale-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="child-sale-link">
                            <a href="<?php the_permalink(); ?>">View more</a>
                        </div>

                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); 
            ?>
        </div>
    </section>
    </article><!-- #post-<?php the_ID(); ?> -->


</main><!-- #main -->

<?php

get_footer();