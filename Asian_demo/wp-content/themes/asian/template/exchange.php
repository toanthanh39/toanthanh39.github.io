<?php
/**
 * Template Name: Exchange-page
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



        <div class="template-waranty">
            <section id="w-col-1">
                <p id="col-range">01</p>
                <div class="vector-flex"></div>
                <p id="col-range">02</p>

            </section>
            <section id="w-col-2">
                <div class="col-2-content">
                    <h3 id="col-2-h3">Exchange period</h3>
                    <li>Warranty period of ASIAvina Heater Fan product will be counted 12 months from purchased date of
                        end-user but not exceed 24 months counted from manufactured date.
                    </li>
                    <li>Warranty period of ASIAvina Fan product will be counted 24 months from purchased date of
                        end-user but not exceed 36 months counted from manufactured date.</li>
                    <li>Warranty period of ASIAvina Fan product will be counted 24 months from purchased date of
                        end-user but not exceed 36 months counted from manufactured date.</li>
                </div>
                <div class="col-2-content">
                    <h3 id="col-2-h3">Exchange Conditions</h3>
                    <li>Warranty period of ASIAvina Heater Fan product will be counted 12 months from purchased date of
                        end-user but not exceed 24 months counted from manufactured date.
                    </li>
                    <li>Warranty period of ASIAvina Fan product will be counted 24 months from purchased date of
                        end-user but not exceed 36 months counted from manufactured date.</li>
                </div>



            </section>

        </div>
        <section class="exchange-wrap2">
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

            </div>

        </section>
       
        <section id="ex-footer">
            <img src="<?php echo get_template_directory_uri();?>/image/img/ex-footer.png" alt="">
        </section>
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