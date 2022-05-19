<?php
/**
 * Template Name: Waranty-page
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
            <h1 class="entry-title">WARANTY POLICY</h1>
            <img id="icon-title" src="<?php echo get_template_directory_uri();?>/image/ASIAvina/right.png" alt="">

        </header><!-- .entry-header -->


        <div class="template-waranty">
            <section id="w-col-1">
                <p id="col-range">01</p>
                <div class="vector-flex"></div>
                <p id="col-range">02</p>
                <div class="vector-flex"></div>
                <p id="col-range">03</p>
                <div class="vector-flex"></div>
                <p id="col-range">04</p>
                <div class="vector-flex"></div>
                <p id="col-range">05</p>

            </section>
            <section id="w-col-2">
                <div class="col-2-content">
                    <h3 id="col-2-h3">Warranty period</h3>
                    <li>Warranty period of ASIAvina Heater Fan product will be counted 12 months from purchased date of
                        end-user but not exceed 24 months counted from manufactured date.
                    </li>
                    <li>Warranty period of ASIAvina Fan product will be counted 24 months from purchased date of
                        end-user but not exceed 36 months counted from manufactured date.</li>
                    <li>Warranty period of ASIAvina Fan product will be counted 24 months from purchased date of
                        end-user but not exceed 36 months counted from manufactured date.</li>
                </div>
                <div class="col-2-content">
                    <h3 id="col-2-h3">Warranty menthod</h3>
                    <li>Warranty period of ASIAvina Heater Fan product will be counted 12 months from purchased date of
                        end-user but not exceed 24 months counted from manufactured date.
                    </li>
                    <li>Warranty period of ASIAvina Fan product will be counted 24 months from purchased date of
                        end-user but not exceed 36 months counted from manufactured date.</li>
                </div>
                <div class="col-2-content">
                    <img src="<?php echo get_template_directory_uri();?>/image/img/wpp.png" alt="">
                </div>
                <div class="col-2-content">
                    <h3 id="col-2-h3">Warranty is covered based on the following conditions</h3>
                    <li>Defects is caused by component quality or technical problems in the manufacturing process</li>
                    <li>Warranty card is valid with legal information.</li>
                    <li>Model, serial number, purchased & production month of products is kept original label, no
                        scratch, dents, lost or covered by other objects.
                    </li>
                    <li>Customer should present the financial invoices of purchasing if requested </li>
                </div>
                <div class="col-2-content">
                    <h3 id="col-2-h3">Warranty period</h3>
                    <li>Warranty period of ASIAvina Heater Fan product will be counted 12 months from purchased date of
                        end-user but not exceed 24 months counted from manufactured date.
                    </li>
                    <li>Warranty period of ASIAvina Fan product will be counted 24 months from purchased date of
                        end-user but not exceed 36 months counted from manufactured date.
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