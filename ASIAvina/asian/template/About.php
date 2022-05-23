<?php
/**
 * Template Name: About-page
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php get_template_part("/effect/search-fixed"); ?>
    <?php get_template_part("/effect/need-help"); ?>  
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header header-about">
            <img id="icon-title" src="<?php echo get_template_directory_uri();?>/image/ASIAvina/left.png" alt="">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <img id="icon-title" src="<?php echo get_template_directory_uri();?>/image/ASIAvina/right.png" alt="">

        </header><!-- .entry-header -->
        <div class="template">
            <div class="about-wrap-main">




            </div>
            <section id="about-wrap">
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


                </div>
                <div class="wrap-content-thumb">
                    <?php asian_post_thumbnail(); ?>
                </div>
            </section>
            <div class="about-wrap2">
                <div class="about-owl owl-theme owl-carousel ">
                    <div class="item">
                        <a href=""><img src="<?php echo get_template_directory_uri();?>/image/img/slide1.png"
                                alt=""></a>

                    </div>
                    <div class="item">
                        <a href=""><img src="<?php echo get_template_directory_uri();?>/image/img/slide2.jpg"
                                alt=""></a>

                    </div>
                    <div class="item">
                        <a href=""><img src="<?php echo get_template_directory_uri();?>/image/img/slide3.jpg"
                                alt=""></a>

                    </div>
                    <div class="item">
                        <a href=""><img src="<?php echo get_template_directory_uri();?>/image/img/slide4.jpg"
                                alt=""></a>

                    </div>
                    <div class="item">
                        <a href=""><img src="<?php echo get_template_directory_uri();?>/image/img/slide5.jpg"
                                alt=""></a>

                    </div>
                    <div class="item">
                        <a href=""><img src="<?php echo get_template_directory_uri();?>/image/img/slide3.jpg"
                                alt=""></a>

                    </div>
                    <div class="item">
                        <a href=""><img src="<?php echo get_template_directory_uri();?>/image/img/slide1.png"
                                alt=""></a>

                    </div>
                    <div class="item">
                        <a href=""><img src="<?php echo get_template_directory_uri();?>/image/img/slide5.jpg"
                                alt=""></a>

                    </div>
                    <div class="item">
                        <a href=""><img src="<?php echo get_template_directory_uri();?>/image/img/slide4.jpg"
                                alt=""></a>

                    </div>
                    <div class="item">
                        <a href=""><img src="<?php echo get_template_directory_uri();?>/image/img/slide2.jpg"
                                alt=""></a>

                    </div>
                    <div class="item">
                        <a href=""><img src="<?php echo get_template_directory_uri();?>/image/img/slide3.jpg"
                                alt=""></a>

                    </div>
                    <div class="item">
                        <a href=""><img src="<?php echo get_template_directory_uri();?>/image/img/slide1.png"
                                alt=""></a>

                    </div>
                </div>
            </div>
            <div class="about-wrap1">
                <div class="wrap1-content">
                    <p>In 2011, Asia Fan joined the renowned Groupe SEB, a worldwide housewares conglomerate based in
                        France, and became a 100% Groupe SEB-owned subsidiary in 2015.</p>
                    <img src="<?php echo get_template_directory_uri();?>/image/ASIAvina/Group147.png" alt="">
                    <p>Electric specialist store chains and supermarkets. Three iconic brands have been sold in Vietnam
                        including</p>
                </div>
            </div>


        </div>
        <div class="template-full-width">
            <section class="about-wrap3">
                <h3 id="about-wrap3-title">Vietnam - A High-priority location for R&D development & manufacturing of
                    groupe SEB for South - East Asia</h3>
                <p id="about-wrap3-text">At Groupe SEB, safety and quality are the top priorities. Components and raw
                    materials used are of
                    high quality standard – only original plastic resins are used (not recycled plastic); copper cord
                    for motor of fans instead of aluminium cord that increases the durability of the fans.

                    In 2013, with the support of R&D department of Groupe SEB, ASIAvina introduced electrical fans
                    saving energy up to 25% rather than other analogous fans on the market. ASIAvina fan have achieved
                    REACH and RoHs benchmark – the qualified standards to get allowance to export fans to extremely
                    rigorous nations in Europe, Asia and South America.

                    Besides manufacturing fans, AsiaFan manufactures and supplies housewares and other small appliances
                    directly to a wide distribution network of general trade retailers, electric specialist store chains
                    and supermarkets. Three iconic brands have been sold in Vietnam including:
                </p>
                <p id="about-wrap3-text">Each product of ASIAvina is designed and produced with a deep understanding of
                    our
                    customers, ensuring that their demands
                    of high quality performance, durability and safety are met.
                </p>
                <div class="about-wrap3-img">
                    <div class="img-1">
                        <img src="<?php echo get_template_directory_uri();?>/image/img/supor.png" alt="">
                    </div>
                    <div class="img-1">
                        <img src="<?php echo get_template_directory_uri();?>/image/img/tefal.png" alt="">
                    </div>
                    <div class="img-1">
                        <img src="<?php echo get_template_directory_uri();?>/image/img/logo1.png" alt="">
                    </div>
                </div>

            </section>

        </div>
        <div class="template about-wrap4">
            <div class="about-wrap4-title">
                <h2>Quatlity Certificates, Awards of ASIAvina FAN</h2>
            </div>
            <div class="about-wrap4-content">
                <div class="about-wrap4-video">
                    <video autoplay muted width="1408px" height="782px">

                        <source src="<?php echo get_template_directory_uri();?>/video/video.mp4" type="video/mp4">

                    </video>
                </div>
                <div class="bg-video"></div>
            </div>
        </div>
        <div class="template-full-width">
            <section class="about-wrap5">
                <header class="entry-header">
                    <img id="icon-title" src="<?php echo get_template_directory_uri();?>/image/ASIAvina/left.png"
                        alt="">
                    <h1>GROUPE SEB</h1>
                    <img id="icon-title" src="<?php echo get_template_directory_uri();?>/image/ASIAvina/right.png"
                        alt="">

                </header>
                <div class="about-wrap5-content">
                    <div class="wrap5-content1">
                        <img src="<?php echo get_template_directory_uri();?>/image/img/Frame 117.png" alt="">
                    </div>
                    <div class="wrap5-content2">
                        <div class="content2-child1">
                            <img src="<?php echo get_template_directory_uri();?>/image/img/Frame 118.png" alt="">
                            <div class="content2-child1-text">
                                <p id="content-child1-title">The world reference in small domestic equipment</p>
                                <p>Groupe SEB was initiated by a tinker called Antonie Lescue who set up his tin
                                    workshop in 1857 in Selongey (France).

                                    Recent days, Groupe SEB is one of global leading corporations in small domestic
                                    appliance. Groupe SEB has built a strong foundation in many continents through
                                    various product lines and a list of well-known brands.
                                </p>
                            </div>

                        </div>
                        <div class="content2-child2">
                            <img src="<?php echo get_template_directory_uri();?>/image/img/Frame 119.png" alt="">
                            <img src="<?php echo get_template_directory_uri();?>/image/img/Frame 122.png" alt="">
                        </div>

                    </div>

                </div>
            </section>
            <div class="about-partners">
                <div class="about-partners-title">
                    <div class="vector"></div>
                    <h3>Partners of Groupe SEB</h3>
                    <div class="vector"></div>
                </div>
                <div id="about-partners-grid">
                    <div class="partner"><img src="<?php echo get_template_directory_uri();?>/image/img/panex.png"
                            alt=""></div>
                    <div class="partner"><img src="<?php echo get_template_directory_uri();?>/image/img/panex.png"
                            alt=""></div>
                    <div class="partner"><img src="<?php echo get_template_directory_uri();?>/image/img/panex.png"
                            alt=""></div>
                    <div class="partner"><img src="<?php echo get_template_directory_uri();?>/image/img/panex.png"
                            alt=""></div>
                    <div class="partner"><img src="<?php echo get_template_directory_uri();?>/image/img/panex.png"
                            alt=""></div>
                    <div class="partner"><img src="<?php echo get_template_directory_uri();?>/image/img/panex.png"
                            alt=""></div>
                    <div class="partner"><img src="<?php echo get_template_directory_uri();?>/image/img/panex.png"
                            alt=""></div>
                    <div class="partner"><img src="<?php echo get_template_directory_uri();?>/image/img/panex.png"
                            alt=""></div>
                    <div class="partner"><img src="<?php echo get_template_directory_uri();?>/image/img/panex.png"
                            alt=""></div>
                    <div class="partner"><img src="<?php echo get_template_directory_uri();?>/image/img/panex.png"
                            alt=""></div>
                    <div class="partner"><img src="<?php echo get_template_directory_uri();?>/image/img/panex.png"
                            alt=""></div>
                    <div class="partner"><img src="<?php echo get_template_directory_uri();?>/image/img/panex.png"
                            alt=""></div>
                    <div class="partner"><img src="<?php echo get_template_directory_uri();?>/image/img/panex.png"
                            alt=""></div>
                    <div class="partner"><img src="<?php echo get_template_directory_uri();?>/image/img/panex.png"
                            alt=""></div>
                    <div class="partner"><img src="<?php echo get_template_directory_uri();?>/image/img/panex.png"
                            alt=""></div>



                </div>


            </div>
        </div>
        <section class="template about-wrap6">
            <div class="wrap6-first">
                <div class="wrap6-first-title">
                    <h3>The achievement of GROUPE SEB through the impressive numbers</h3>
                </div>
                <div class="wrap6-first-content">
                    <div class="wrap6-item">
                        <h3>25</h3>
                        <h2>Nations</h2>
                        <p>Leading brand in small domestic appliances</p>
                    </div>
                    <div class="wrap6-item">
                        <h3>06</h3>
                        <h2>Nations</h2>
                        <p>Sold every second around the world</p>
                    </div>
                    <div class="wrap6-item">
                        <h3>200</h3>
                        <h2>Nations</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel posuere velit.</p>
                    </div>
                    <div class="wrap6-item">
                        <h3>25.000</h3>
                        <h2>Nations</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel posuere velit.</p>
                    </div>
                    <div class="wrap6-item">
                        <h3>150</h3>
                        <h2>Nations</h2>
                        <p>Leading brand in small domestic appliances</p>
                    </div>
                    <div class="wrap6-item">
                        <h3>29</h3>
                        <h2>Nations</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel posuere velit.</p>
                    </div>
                    <div class="wrap6-item">
                        <h3>107</h3>
                        <h2>Nations</h2>
                        <p>Leading brand in small domestic appliances</p>
                    </div>



                </div>
            </div>
            <div class="wrap6-second">
                <div class="template about-wrap4">
            
                    <div class="about-wrap4-content">
                        <div class="about-wrap4-video">
                            <video autoplay muted width="1408px" height="782px">

                                <source src="<?php echo get_template_directory_uri();?>/video/video.mp4"
                                    type="video/mp4">

                            </video>
                        </div>
                        <div class="bg-video"></div>
                    </div>
                </div>
                <div class="wrap6-second-last">
                    <p>Further information about Groupe SEB, please download the brochure</p>
                    <a href="">here!</a>
                </div>
            </div>

        </section>


    </article><!-- #post-<?php the_ID(); ?> -->

</main><!-- #main -->

<?php

get_footer();