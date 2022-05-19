<?php
/**
 * Template Name: Service-page
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
           <h1 class="entry-title">CUSTOMER SERVICES</h1>
            <img id="icon-title" src="<?php echo get_template_directory_uri();?>/image/ASIAvina/right.png" alt="">

        </header><!-- .entry-header -->


        <div class="template">
            <section class="service-wrap1">
                <div class="link-policy">
                    <img src="<?php echo get_template_directory_uri();?>/image/img/wp.png" alt="">
                    <a href="<?php echo get_permalink(251); ?>">
                        <h3>Waranty Policy</h3>
                    </a>
                    <p>Learn more aboutwaranty policy.</p>
                </div>
                <div class="link-policy">
                    <img src="<?php echo get_template_directory_uri();?>/image/img/ep.png" alt="">
                    <a href="<?php echo get_permalink(255);?>">
                        <h3>Exchange Policy</h2>
                    </a>
                    <p>Learn more aboutwaranty policy.</p>
                </div>
                <div class="link-policy">
                    <img src="<?php echo get_template_directory_uri();?>/image/img/ut.png" alt="">
                    <a href="<?php echo get_permalink(257);?>">
                        <h3>Usage Tips</h3>
                    </a>
                    <p>Learn more aboutwaranty policy.</p>
                </div>

            </section>
            <section class="service-wrap2">
                <div class="service-wrap2-title">
                    <div class="vector"></div>
                    <h3>Find an Authorized service partner nearest you</h3>
                    <div class="vector"></div>

                </div>
                <div id="service-search">
                    <form action="" method="post" name="service-search">
                        <div id="select">
                            <ion-icon name="location-outline"></ion-icon>
                            <input type="text" list="cities" name="city" placeholder="Choose Provicne/ City " />
                            <datalist id="cities">
                                <option>Hồ Chí Minh</option>
                                <option>Đà Nẵng</option>
                                <option>Hải Phòng</option>
                                <option>Hà Nội</option>
                            </datalist>
                        </div>
                        <div id="service-search-input">
                            <ion-icon name="search-outline"></ion-icon>
                            <input type="text" name="street" placeholder="Enter Street, Ward, District">
                        </div>
                        <div class="service-search-button">

                            <button type="submit" name="btn-sv-submit">Search</button>
                        </div>


                    </form>
                    <div class="search-ep">
                        
                        <div class="wrap-1-content">
                            <img src="<?php echo get_template_directory_uri();?>/image/ASIAvina/Warranty.png"
                                alt="">
                            <img src="<?php echo get_template_directory_uri();?>/image/ASIAvina/Quality.png" alt="">

                        </div>
                       
                    </div>
                </div>
                
            </section>
        </div>
        <section class="wrap-child-footer">
            <div class="child-footer1">
                <p>Please call the hotline</p>
                <p id="phone">1800-555-521</p>
            </div>
            <p> or contact our Authorized Service Partner for further assistance.</p>
        </section>
    </article><!-- #post-<?php the_ID(); ?> -->


</main><!-- #main -->

<?php

get_footer();