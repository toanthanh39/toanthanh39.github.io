<?php
/**
 * asian functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package asian
 */




    
//change image at product single (big image at gallery)
function change_woocommerce_image_size_single($size){
	$size['width'] = 400;
	$size['height'] = 900;
	$size['crop'] = 1;
	return $size;
}
add_filter( 'woocommerce_get_image_size_single', 'change_woocommerce_image_size_single');
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );    
function woo_custom_cart_button_text() {
        return __( 'Store', 'woocommerce' );
}
// thay đổi text add to card
function remove_loop_button(){
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_price', 10 );
   }
function remove_loop_title(){
	
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product__title', 10 );
   }
   add_action('init','remove_loop_button');
   add_action('init','remove_loop_title');
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
 remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
// xóa bỏ  uppsell và related trong woo single product
add_filter( 'woocommerce_show_page_title', function(){
	return false;
   });
   // xóa bỏ title trang shop woo
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
// xóa bỏ mục select ordering woo
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
function add_heading_custom($heading){
	return $heading = get_the_title();
}
add_filter('woocommerce_product_description_heading','add_heading_custom',100);
// thay đổi title after_sumary woo
define('WOOCOMMERCE_USE_CSS', false);
define('THEME_URL', get_stylesheet_directory());
define('CORE', THEME_URL ."/core");
require_once(CORE ."/init.php");
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function asian_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on asian, use a find and replace
		* to change 'asian' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'asian', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'asian' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'asian_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'asian_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function asian_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'asian_content_width', 640 );
}
add_action( 'after_setup_theme', 'asian_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function asian_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'asian' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'asian' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'asian_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
	// active menu li
	add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
	function special_nav_class($classes, $item){
 		if( in_array('current-menu-item', $classes) ){
		 $classes[] = 'active-link ';
 		}
 		return $classes;
	}
	
	//
	
function asian_scripts() {
	wp_enqueue_style( 'asian-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'asian-style', 'rtl', 'replace' );

	wp_enqueue_script( 'asian-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'asian_scripts' );
function wp_include_js(){

	wp_enqueue_script('event-js', get_bloginfo('template_directory').'/js/body.js', array());
	wp_enqueue_script('script', get_bloginfo('template_directory').'/js/script.js', array());

	
	}
	
	add_action('wp_enqueue_scripts', 'wp_include_js');




	add_action( 'wp_enqueue_scripts', 'cs_itseovn_scripts');
		function cs_itseovn_scripts(){
		wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/owlcarousel/owl.carousel.min.js', array(), '1.0.0', true );
		
}
 
function cs_itseovn_styles() {
		wp_register_style('owl-carousel', get_template_directory_uri() .'/owlcarousel/assets/owl.carousel.css', array(), null, 'all' );
		wp_enqueue_style( 'owl-carousel' );
		wp_register_style('template-css', get_template_directory_uri() .'/css/template.css', array(), null, 'all' );
		wp_enqueue_style( 'template-css' );
		wp_register_style('woocommerce-css', get_template_directory_uri() .'/css/woocommerce.css', array(), null, 'all' );
		wp_enqueue_style( 'woocommerce-css' );
		
		wp_register_style('owl-carousel1', get_template_directory_uri() .'/owlcarousel/assets/owl.theme.default.min.css', array(), null, 'all' );
		wp_enqueue_style( 'owl-carousel1' );
}

add_action( 'wp_enqueue_scripts', 'cs_itseovn_styles' );
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/*
add_action( 'after_setup_theme', 'mytheme_admin_init' );
function mytheme_admin_init() {
    if ( get_option( 'mytheme_installed' )!=true ) {
        $Home_page_id = wp_insert_post( array(
            'post_title'     => 'Trang chủ',
            'post_type'      => 'Home',
            'post_name'      => 'home',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
            'post_content'   => '',
            'post_status'    => 'publish',
            'post_author'    => get_user_by( 'id', 1 )->user_id,
            'menu_order'     => 0,
            // Assign page template
           
        ) );
		$Event_page_id = wp_insert_post( array(
            'post_title'     => 'Sự kiện',
            'post_type'      => 'page',
            'post_name'      => 'sukien',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
            'post_content'   => '',
            'post_status'    => 'publish',
            'post_author'    => get_user_by( 'id', 1 )->user_id,
            'menu_order'     => 0,
            // Assign page template
            
        ) );
		$Contact_page_id = wp_insert_post( array(
            'post_title'     => 'Liên hệ',
            'post_type'      => 'page',
            'post_name'      => 'lien-he',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
            'post_content'   => '',
            'post_status'    => 'publish',
            'post_author'    => get_user_by( 'id', 1 )->user_id,
            'menu_order'     => 0,
            // Assign page template
          
        ) );
		
		$Checkout_page_id = wp_insert_post( array(
            'post_title'     => 'Thanh Toán',
            'post_type'      => 'page',
            'post_name'      => 'thanhtoan',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
            'post_content'   => '',
            'post_status'    => 'publish',
            'post_author'    => get_user_by( 'id', 1 )->user_id,
            'menu_order'     => 0,
            // Assign page template
          
        ) );
		$Checkout_detail_page_id = wp_insert_post( array(
            'post_title'     => 'Checkout-detail',
            'post_type'      => 'page',
            'post_name'      => 'checkout-detail',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
            'post_content'   => '',
            'post_status'    => 'publish',
            'post_author'    => get_user_by( 'id', 1 )->user_id,
            'menu_order'     => 0,
            // Assign page template
           
        ) );


        update_option( 'mytheme_installed', true );
    }
}
*/
add_action('after_setup_theme', 'mytheme_setup');

function mytheme_setup(){

 if(get_option('page_on_front')=='0' ){
        // Create homepage
        $homepage = array(
            'post_type'    => 'page',
            'post_title'    => 'Home',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_author'   => 1
        ); 
		$Event_page_id = wp_insert_post( array(
            'post_title'     => 'Sự kiện',
            'post_type'      => 'page',
            'post_name'      => 'sukien',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
            'post_content'   => '',
            'post_status'    => 'publish',
            'post_author'    => get_user_by( 'id', 1 )->user_id,
            'menu_order'     => 0,
            // Assign page template
            
        ) );
        // Insert the post into the database
        $homepage_id =  wp_insert_post( $homepage );
        // set this page as homepage
        update_option('show_on_front', 'page');
        update_option('page_on_front', $homepage_id);
    }

}