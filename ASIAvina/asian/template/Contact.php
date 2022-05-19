<?php
/**
 * Template Name: Contact-page
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
            <div class="contact-title">
                <div class="vector"></div>
                <h3>Get in touch with us</h3>
                <div class="vector"></div>

            </div>

            <div class="contact-wrap1">
                <div class="contact-wrap1-content">
                    <h4 id="wrap1-h4">Head office</h4>
                    <div class="wrap-1-param">
                        <ion-icon name="location-outline"></ion-icon>
                        <p>12th floor, Lottery tower, 77 Tran Nhan Ton st, Ward 9,Dist 5, HCMC, VietNam</p>
                    </div>
                </div>

                <div class="contact-wrap1-content">
                    <h4 id="wrap1-h4">Vinh Loc factory</h4>
                    <div class="wrap-1-param">
                        <ion-icon name="location-outline"></ion-icon>
                        <p>12th floor, Lottery tower, 77 Tran Nhan Ton st, Ward 9,Dist 5, HCMC, VietNam</p>
                    </div>
                </div>
                <div class="contact-wrap1-content">
                    <h4 id="wrap1-h4">Binh Duong factory</h4>
                    <div class="wrap-1-param">
                        <ion-icon name="location-outline"></ion-icon>
                        <p>12th floor, Lottery tower, 77 Tran Nhan Ton st, Ward 9,Dist 5, HCMC, VietNam</p>
                    </div>
                </div>


            </div>

            <div class="contact-wrap2">
                <h4>If you got any question</h4>
                <h4>Please leave your message</h4>

            </div>

            <div class="contact-wrap3">
                <form action="" id="form-contact" class="form-1-home">
        
                    <input type="text" id="" name="name" placeholder="Your name">
                    <input type="email" id="" name="email" placeholder="Your email">
                    <textarea name="contact-message" id="contact-message" cols="30" rows="10" placeholder="Content"></textarea>
                    <button type="submit">Send</button>

                </form>
            </div>
            <div class="contact-wrap">
                
               
                <div class="wrap-content-post">
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
                <div class="wrap-content-thumb"> 
                    <?php asian_post_thumbnail(); ?>
                </div>
            </div>
        </div>
    </article><!-- #post-<?php the_ID(); ?> -->


</main><!-- #main -->

<?php

get_footer();