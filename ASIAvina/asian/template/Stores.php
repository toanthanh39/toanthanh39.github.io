<?php
/**
 * Template Name: Stores-page
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

            <h1 class="entry-title">AGENTS</h1>
            <img id="icon-title" src="<?php echo get_template_directory_uri();?>/image/ASIAvina/right.png" alt="">

        </header><!-- .entry-header -->


        <div class="template">
            <section id="store-wrap1">

                <div class="stores-title">
                    <div class="vector"></div>
                    <h3>Retailers of ASIAvina</h3>
                    <div class="vector"></div>
                </div>

                <div class="stores-content">
                    <div class="content-child">
                        <h4 id="content-child-title">Home & Cook Nguyễn Thị Nhỏ</h4>
                        <div class="child-text">
                            <ion-icon name="location-outline"></ion-icon>
                            <p>25 Nguyễn Thị Nhỏ, Phường 9, Quận Tân Bình, Tp. HCM</p>
                        </div>
                        <div class="child-text">
                            <ion-icon name="call-outline"></ion-icon>
                            <p>089 932 3639</p>
                        </div>
                    </div>
                    <div class="content-child">
                        <h4 id="content-child-title">Home & Cook Lê Đình Lý</h4>
                        <div class="child-text">
                            <ion-icon name="location-outline"></ion-icon>
                            <p>195 Lê Đình Lý, Phường Hoà Thuận Tây, Quận Hải Châu, Tp. Đà Nẵng</p>
                        </div>
                        <div class="child-text">
                            <ion-icon name="call-outline"></ion-icon>
                            <p>089 932 3639</p>
                        </div>
                    </div>
                    <div class="content-child">
                        <h4 id="content-child-title">Home & Cook Kiệt Phúc Linh Xuân</h4>
                        <div class="child-text">
                            <ion-icon name="location-outline"></ion-icon>
                            <p>84 Quốc lộ 1K, Phường Linh Xuân, Quận Thủ Đức, Tp. HCM</p>
                        </div>
                        <div class="child-text">
                            <ion-icon name="call-outline"></ion-icon>
                            <p>089 932 3639</p>
                        </div>
                    </div>
                    <div class="content-child">
                        <h4 id="content-child-title">Home & Cook Đô Sơn</h4>
                        <div class="child-text">
                            <ion-icon name="location-outline"></ion-icon>
                            <p>688 Tĩnh Lộ 10, Phường Bình Trị Đông, Quận Bình Tân, Tp. HCM</p>
                        </div>
                        <div class="child-text">
                            <ion-icon name="call-outline"></ion-icon>
                            <p>089 932 3639</p>
                        </div>
                    </div>
                    <div class="content-child">
                        <h4 id="content-child-title">Home & Cook Ba An</h4>
                        <div class="child-text">
                            <ion-icon name="location-outline"></ion-icon>
                            <p>B7/6P Võ Văn Vân, ấp 2, Vĩnh Lộc B, Bình Chánh, Tp. HCM</p>
                        </div>
                        <div class="child-text">
                            <ion-icon name="call-outline"></ion-icon>
                            <p>089 932 3639</p>
                        </div>
                    </div>
                    <div class="content-child">
                        <h4 id="content-child-title">Home & Cook Thiên Phước</h4>
                        <div class="child-text">
                            <ion-icon name="location-outline"></ion-icon>
                            <p>12th floor, Lottery tower, 77 Tran Nhan Ton st, Ward 9,Dist 5, HCMC, VietNam</p>
                        </div>
                        <div class="child-text">
                            <ion-icon name="call-outline"></ion-icon>
                            <p>089 932 3639</p>
                        </div>
                    </div>
                    <div class="content-child">
                        <h4 id="content-child-title">Home & Cook Thảo Mộc Việt</h4>
                        <div class="child-text">
                            <ion-icon name="location-outline"></ion-icon>
                            <p>12th floor, Lottery tower, 77 Tran Nhan Ton st, Ward 9,Dist 5, HCMC, VietNam</p>
                        </div>
                        <div class="child-text">
                            <ion-icon name="call-outline"></ion-icon>
                            <p>089 932 3639</p>
                        </div>
                    </div>
                    <div class="content-child">
                        <h4 id="content-child-title">Home & Cook Chinh Bắc</h4>
                        <div class="child-text">
                            <ion-icon name="location-outline"></ion-icon>
                            <p>12th floor, Lottery tower, 77 Tran Nhan Ton st, Ward 9,Dist 5, HCMC, VietNam</p>
                        </div>
                        <div class="child-text">
                            <ion-icon name="call-outline"></ion-icon>
                            <p>089 932 3639</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="template-full-width">
            <section id="store-wrap2">
                <div class="stores-title">
                    <img id="icon-title" src="<?php echo get_template_directory_uri();?>/image/ASIAvina/left.png"
                        alt="">
                    <h1 class="entry-title">OUR PARTNERS</h1>
                    <img id="icon-title" src="<?php echo get_template_directory_uri();?>/image/ASIAvina/right.png"
                        alt="">
                </div>
                <div class="store-wrap2-content">
                    <div class="container-content-grid">
                        <div class="content-partners"> <img
                                src="<?php echo get_template_directory_uri();?>/image/img/coop.png" alt=""></div>
                        <div class="content-partners"> <img
                                src="<?php echo get_template_directory_uri();?>/image/img/auchan.png" alt=""></div>
                        <div class="content-partners"> <img
                                src="<?php echo get_template_directory_uri();?>/image/img/bhxanh.png" alt=""></div>
                        <div class="content-partners"> <img
                                src="<?php echo get_template_directory_uri();?>/image/img/bigc.png" alt=""></div>
                        <div class="content-partners"> <img
                                src="<?php echo get_template_directory_uri();?>/image/img/emart.png" alt=""> </div>
                        <div class="content-partners"> <img
                                src="<?php echo get_template_directory_uri();?>/image/img/media.png" alt=""> </div>
                        <div class="content-partners"> <img
                                src="<?php echo get_template_directory_uri();?>/image/img/satra.png" alt=""> </div>
                        <div class="content-partners"> <img
                                src="<?php echo get_template_directory_uri();?>/image/img/l.png" alt=""></div>
                        <div class="content-partners"> <img
                                src="<?php echo get_template_directory_uri();?>/image/img/nk.png" alt=""></div>
                        <div class="content-partners"> <img
                                src="<?php echo get_template_directory_uri();?>/image/img/m.png" alt=""></div>
                        <div class="content-partners"> <img
                                src="<?php echo get_template_directory_uri();?>/image/img/auchan.png" alt=""></div>
                        <div class="content-partners"> <img
                                src="<?php echo get_template_directory_uri();?>/image/img/coop.png" alt=""></div>
                        <div class="content-partners"> <img
                                src="<?php echo get_template_directory_uri();?>/image/img/nk.png" alt=""> </div>
                        <div class="content-partners"> <img
                                src="<?php echo get_template_directory_uri();?>/image/img/m.png" alt=""></div>
                        <div class="content-partners"> <img
                                src="<?php echo get_template_directory_uri();?>/image/img/bhxanh.png" alt=""></div>
                        <div class="content-partners"> <img
                                src="<?php echo get_template_directory_uri();?>/image/img/bigc.png" alt=""></div>


                    </div>
                </div>
            </section>
        </div>

    </article><!-- #post-<?php the_ID(); ?> -->


</main><!-- #main -->

<?php

get_footer();