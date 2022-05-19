<?php
/** 
*  Template Name: Asiavina-page
*/
get_header();
?>
<main id="primary" class="site-main">
    <?php get_template_part("effect/search-fixed"); ?>
    <a href="">
        <div class="help">
            <ion-icon name="chatbox-ellipses-sharp"></ion-icon>
            <p>Need Help ?</p>
        </div>
    </a>
    <div class="top-banner-slide">
        <div class="owl-carousel owl-theme owlcarousel1">
            <div class="item">
                <div class="item-thumb">
                    <a href=""><img src="<?php echo get_template_directory_uri();?>/image/product/quat1.png" alt=""></a>
                </div>
                <p>Desc Fan</p>
            </div>
            <div class="item">
                <div class="item-thumb">
                    <a href=""><img src="<?php echo get_template_directory_uri();?>/image/product/quat2.png" alt=""></a>
                </div>
                <p>Stand Fan</p>
            </div>
            <div class="item">
                <div class="item-thumb">
                    <a href=""><img src="<?php echo get_template_directory_uri();?>/image/product/quat3.png" alt=""></a>
                </div>
                <p>Desc Fan</p>
            </div>
            <div class="item">
                <div class="item-thumb">
                    <a href=""><img src="<?php echo get_template_directory_uri();?>/image/product/quat4.png" alt=""></a>
                </div>
                <p>Desc Fan</p>
            </div>
            <div class="item">
                <div class="item-thumb">
                    <a href=""><img src="<?php echo get_template_directory_uri();?>/image/product/quat5.png" alt=""></a>
                </div>
                <p>Stand Fan</p>
            </div>
            <div class="item">
                <div class="item-thumb">
                    <a href=""><img src="<?php echo get_template_directory_uri();?>/image/product/quat6.png" alt=""></a>
                </div>
                <p>Wall Fan</p>
            </div>
            <div class="item">
                <div class="item-thumb">
                    <a href=""><img src="<?php echo get_template_directory_uri();?>/image/product/quat1.png" alt=""></a>
                </div>
                <p>Desc Fan</p>
            </div>
            <div class="item">
                <div class="item-thumb">
                    <a href=""><img src="<?php echo get_template_directory_uri();?>/image/product/quat7.png" alt=""></a>
                </div>
                <p>Wall Fan</p>
            </div>
            <div class="item">
                <div class="item-thumb">
                    <a href=""><img src="<?php echo get_template_directory_uri();?>/image/product/quat8.png" alt=""></a>
                </div>
                <p>Wall Fan</p>
            </div>
            <div class="item">
                <div class="item-thumb">
                    <a href=""><img src="<?php echo get_template_directory_uri();?>/image/product/quat1.png" alt=""></a>
                </div>
                <p>Desc Fan</p>
            </div>
            <div class="item">
                <div class="item-thumb">
                    <a href=""><img src="<?php echo get_template_directory_uri();?>/image/product/quat3.png" alt=""></a>
                </div>
                <p>Stand Fan</p>
            </div>
            <div class="item">
                <div class="item-thumb">
                    <a href=""><img src="<?php echo get_template_directory_uri();?>/image/product/quat6.png" alt=""></a>
                </div>
                <p>Wall Fan</p>
            </div>
        </div>
    </div>
    <div class="BG-slide">
        <div class="bg-cs"></div>
        <div class=" owl-carousel product-owl">
            <?php
                $cat = 'decs-fan';
                $args = array( 
                    'post_type' => 'product',
                    'posts_per_page' => 10, 
                    'product_cat' => $cat
                );
            
            ?>
            <?php $getposts = new WP_query( $args);?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <?php global $product; ?>
            <div class="item asia-item">
                
                <div class="asia-item-content">
                    <div class="excerpt-cat">
                        <h2 id="except-cat-h2"><?php echo wc_get_product_category_list($product->get_id());?></h2>
                    </div>

                    <div class="excerpt-name">
                        <p id="excerpt-name-p">
                            <?php the_title(); ?>    
                        </p>
                    </div>

                    <div class="excerpt-button">
                        <a href="<?php the_permalink(); ?>"><button>Information</button></a>
                    </div>
                   

                </div>
                
                <div class="asia-item-thumb">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>
                </div>
                
                
            </div>
           
            <?php endwhile; wp_reset_postdata();?>
            

        </div>
        <div class="list-product-cat">
                    <a href="<?php echo get_term_link(25,$taxonomy);?>">
                        More Product <ion-icon name="arrow-forward-outline"></ion-icon>
                    </a>
        </div>
        
    </div>
    <div class="BG-slide">
        <div class="bg-cs"></div>
        <div class=" owl-carousel product-owl">
            <?php
                $cat = 'stan-fan';
                $args = array( 
                    'post_type' => 'product',
                    'posts_per_page' => 10, 
                    'product_cat' => $cat
                );
            
            ?>
            <?php $getposts = new WP_query( $args);?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <?php global $product; ?>
            <div class="item asia-item">
                
                <div class="asia-item-content">
                    <div class="excerpt-cat">
                        <h2 id="except-cat-h2"><?php echo wc_get_product_category_list($product->get_id());?></h2>
                    </div>

                    <div class="excerpt-name">
                        <p id="excerpt-name-p">
                            <?php the_title(); ?>    
                        </p>
                    </div>

                    <div class="excerpt-button">
                        <a href="<?php the_permalink(); ?>"><button>Information</button></a>
                    </div>
                   

                </div>
                
                <div class="asia-item-thumb">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>
                </div>
                
                
            </div>
           
            <?php endwhile; wp_reset_postdata();?>
            

        </div>
        <div class="list-product-cat">
                    <a href="<?php echo get_term_link(26,$taxonomy);?>">
                        More Product <ion-icon name="arrow-forward-outline"></ion-icon>
                    </a>
        </div>
    </div>

    <div class="BG-slide">
        <div class="bg-cs"></div>
        <div class=" owl-carousel product-owl">
            <?php
                $cat = 'wall-fan';
                $args = array( 
                    'post_type' => 'product',
                    'posts_per_page' => 10, 
                    'product_cat' => $cat
                );
            
            ?>
            <?php $getposts = new WP_query( $args);?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <?php global $product; ?>
            <div class="item asia-item">
                
                <div class="asia-item-content">
                    <div class="excerpt-cat">
                        <h2 id="except-cat-h2"><?php echo wc_get_product_category_list($product->get_id());?></h2>
                    </div>

                    <div class="excerpt-name">
                        <p id="excerpt-name-p">
                            <?php the_title(); ?>    
                        </p>
                    </div>

                    <div class="excerpt-button">
                        <a href="<?php the_permalink(); ?>"><button>Information</button></a>
                    </div>
                   

                </div>
                
                <div class="asia-item-thumb">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>
                </div>
                
                
            </div>
           
            <?php endwhile; wp_reset_postdata();?>
            

        </div>
        <div class="list-product-cat">
                    <a href="<?php echo get_term_link(27,$taxonomy);?>">
                        More Product <ion-icon name="arrow-forward-outline"></ion-icon>
                    </a>
        </div>
    </div>
    <div class="BG-slide">
        <div class="bg-cs"></div>
    </div>

</main><!-- #main -->

<?php

get_footer();