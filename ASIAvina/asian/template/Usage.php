<?php
/**
 * Template Name: Usage-page
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
        <header class="entry-header header-usage">
            <img id="icon-title" src="<?php echo get_template_directory_uri();?>/image/ASIAvina/left.png" alt="">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <img id="icon-title" src="<?php echo get_template_directory_uri();?>/image/ASIAvina/right.png" alt="">

        </header><!-- .entry-header -->


        <div class="template">
            <div class="usage-title">
                <p>To improve service quality better for customers who have put trust in ASIAvina products. We recommend
                    10
                    solutions when customers have trouble while using our products as following:
                </p>
            </div>

            <section id="usage-grid">
                <div class="usage-child">
                    <div class="usage-child-title">
                        <h3 id="usage-h3">01</h3>
                        <div class="vector"></div>
                    </div>
                    <h4 id="usage-h4">The body of my fan broke. Where available of the warranty?</h4>
                    <li>Please contact our hotline 1800-555-521 or go to the nearest Authorized Service Partner for
                        further assistance.
                    </li>

                </div>
                <div class="usage-child">
                    <div class="usage-child-title">
                        <h3 id="usage-h3">02</h3>
                        <div class="vector"></div>
                    </div>
                    <h4 id="usage-h4">The body of my fan broke. Where available of the warranty?</h4>
                    <li>First of all, the appliance only works at its best using the genuine switch box. It was design
                        and provided the ASIAvina brand to ensure quality performance. If you change or modify any of
                        its parts, the product may malfunction. Thus, replacement using genuine spare parts is advised.
                        Please call the hotline 1800-555-521 or contact our Authorized Service Partner for further
                        assistance.
                    </li>

                </div>
                <div class="usage-child">
                    <div class="usage-child-title">
                        <h3 id="usage-h3">03</h3>
                        <div class="vector"></div>
                    </div>
                    <h4 id="usage-h4">The body of my fan broke. Where available of the warranty?</h4>
                    <li>Please contact our hotline 1800-555-521 or go to the nearest Authorized Service Partner for
                        further assistance.
                    </li>

                </div>
                <div class="usage-child">
                    <div class="usage-child-title">
                        <h3 id="usage-h3">04</h3>
                        <div class="vector"></div>
                    </div>
                    <h4 id="usage-h4">The body of my fan broke. Where available of the warranty?</h4>
                    <li>Please check the battery if it is already drained. When installing the battery, please pay attention to the battery terminal. If the remote control is still not working, please call 
                        the hotline 1800-555-521 or contact our Authorized Service Partner.
                    </li>

                </div>
                <div class="usage-child">
                    <div class="usage-child-title">
                        <h3 id="usage-h3">05</h3>
                        <div class="vector"></div>
                    </div>
                    <h4 id="usage-h4">The body of my fan broke. Where available of the warranty?</h4>
                    <li>Please contact our hotline 1800-555-521 or go to the nearest Authorized Service Partner for
                        further assistance.
                    </li>

                </div>
                <div class="usage-child">
                    <div class="usage-child-title">
                        <h3 id="usage-h3">06</h3>
                        <div class="vector"></div>
                    </div>
                    <h4 id="usage-h4">The body of my fan broke. Where available of the warranty?</h4>
                    <li>Please contact our hotline 1800-555-521 or go to the nearest Authorized Service Partner for
                        further assistance.
                    </li>

                </div>
                <div class="usage-child">
                    <div class="usage-child-title">
                        <h3 id="usage-h3">07</h3>
                        <div class="vector"></div>
                    </div>
                    <h4 id="usage-h4">The body of my fan broke. Where available of the warranty?</h4>
                    <li>First of all, our fan only works at its best using genuine ASIAvina propellers. It was designed to ensure quality performance. If you change the propeller, it may affect the motor. Thus, replacement using genuine spare parts is advised. Please call the hotline 1800-5
                        55-521 or contact our Authorized Service Partner for further assistance.
                    </li>

                </div>
                <div class="usage-child">
                    <div class="usage-child-title">
                        <h3 id="usage-h3">08</h3>
                        <div class="vector"></div>
                    </div>
                    <h4 id="usage-h4">The body of my fan broke. Where available of the warranty?</h4>
                    <li>Please contact our hotline 1800-555-521 or go to the nearest Authorized Service Partner for
                        further assistance.
                    </li>

                </div>
                <div class="usage-child">
                    <div class="usage-child-title">
                        <h3 id="usage-h3">09</h3>
                        <div class="vector"></div>
                    </div>
                    <h4 id="usage-h4">The body of my fan broke. Where available of the warranty?</h4>
                    <li>Please contact our hotline 1800-555-521 or go to the nearest Authorized Service Partner for
                        further assistance.
                    </li>

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