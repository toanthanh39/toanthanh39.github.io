<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package asian
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-infor">
			<div class="logo-footer">
				<img src="<?php echo get_template_directory_uri();?>/image/ASIAvina/logo-footer.png" alt="" id="logo-footer-img"></div>
			<div class="contact-infor">
				<div class="contact address">
				<ion-icon name="location-outline"></ion-icon>
				<p>12th floor, Lottery tower, 77 Tran Nhan Ton st, Ward 9,Dist 5, HCMC, VietNam</p>
				</div>
				<div class="contact phone">
				<ion-icon name="call-outline"></ion-icon>
				<p>+84 (0) 28 3938 1600</p>
				</div>
				<div class="contact mail">
				<ion-icon name="location-outline"></ion-icon>
				<p>vnasiafaninfor@groupeseb.com</p>
				</div>
				<div class="contact soc">
				<ion-icon name="location-outline"></ion-icon>
				<p>12th floor, Lottery tower, 77 Tran Nhan Ton st, Ward 9,Dist 5, HCMC, VietNam</p>
				</div>
				<div class=" contact iso"></div>

			</div>
			<div class="link">
				<a id="link-footer"  href=""><p>AsianFan</p></a>
				<a id="link-footer" href=""><p>Stores</p></a>
				<a id="link-footer" href=""><p>CustomService</p></a>
				<a id="link-footer" href=""><p>Aboutus</p></a>
				<a id="link-footer" href=""><p>ContactUs</p></a>
				<a id="link-footer" href=""><p>Product Register</p></a>


			</div>
			<div class="fanpage">
				<img src="<?php echo get_template_directory_uri();?>/image/img/fanpage.png" alt="">
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
