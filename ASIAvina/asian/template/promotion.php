<?php
/**
 * Template Name: Promotion-page
 */

get_header();
?>

<main id="primary" class="site-main">
<?php get_template_part("/effect/search-fixed"); ?>
    <a href="">
        <div class="help">
            <ion-icon name="chatbox-ellipses-sharp"></ion-icon>
            <p>Need Help ?</p>
        </div>
    </a>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <img id="icon-title" src="<?php echo get_template_directory_uri();?>/image/ASIAvina/left.png" alt="">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <img id="icon-title" src="<?php echo get_template_directory_uri();?>/image/ASIAvina/right.png" alt="">

        </header><!-- .entry-header -->


        <div class="template">
            
        </div>
    </article><!-- #post-<?php the_ID(); ?> -->


</main><!-- #main -->

<?php

get_footer();