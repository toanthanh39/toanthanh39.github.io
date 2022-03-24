<?php
/*
 Template Name: Checkout_detail-page.
 */
get_header();
$ve1= (isset($_SESSION["ve"]))? $_SESSION["ve"]:[];
$totalP=(isset($_SESSION["totalprice"]))? $_SESSION["totalprice"]:null;
?>
<main id="primary" class="site-main">
    <div class="main-content">
        <!-- <div class="content-container">
        </div> -->
        <div class="heading-title">
            <img id="checkout-detail" src="<?php echo get_template_directory_uri();?>/image/Thanh toán thành công.png">
        </div>
        <div class="main_interaction">
           <div class="post-all">
               <?php
            
            ?>
           </div>
        </div>

    </div>


</main><!-- #main -->