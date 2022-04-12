<?php
/**
 * mythemeTL functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mythemeTL
 */

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
function mythemetl_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on mythemeTL, use a find and replace
		* to change 'mythemetl' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'mythemetl', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'mythemetl' ),
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
			'mythemetl_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);
	// them class cho menu li
	add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
		function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

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
add_action( 'after_setup_theme', 'mythemetl_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mythemetl_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mythemetl_content_width', 640 );
}
add_action( 'after_setup_theme', 'mythemetl_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mythemetl_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'mythemetl' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'mythemetl' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'mythemetl_widgets_init' );
// session auto start

function register_my_session() {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
}
add_action('init', 'register_my_session');

function add_admin_menu()
{
    add_menu_page (
            'Plugin Options', 
            'controler ticket', 
            'manage_options', 
            'plugin-options', 
            'show_plugin_options', 
            '', 
            '2'
    );
}
 
function show_plugin_options()
{
    // echo '<h1>Đây là trang Plugin Options</h1>';
	
	  get_template_part('controler_ticket') ;
	 
	
	
}
 
add_action('admin_menu', 'add_admin_menu');
/**
 * Enqueue scripts and styles.
 */
function mythemetl_scripts() {
	wp_enqueue_style( 'mythemetl-style', get_stylesheet_uri(), array(),'');
	wp_style_add_data( 'mythemetl-style', 'rtl', 'replace' );

	wp_enqueue_script( 'mythemetl-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	// wp_enqueue_script( 'mythemetl-js', get_template_directory_uri() . '/js/js.js', array(), _S_VERSION, true );
	// wp_enqueue_script('mythemetl-js');
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mythemetl_scripts' );


function wp_include_js(){

wp_enqueue_script('event-js', get_bloginfo('template_directory').'/js/event.js', array());

}

add_action('wp_enqueue_scripts', 'wp_include_js');

function ur_theme_start_session()
{
    if (!session_id())
        session_start();
}
add_action("init", "ur_theme_start_session", 1);

/*  register script*/

// function js_scripts() {
// 	/*
// 	 * Chèn file ajax-pagination.js vào frontend
// 	 */
// 	wp_enqueue_script( 'js-script', get_bloginfo('template_directory').'/js/js.js', array('jquery'), true);
// }
// add_action( 'wp_enqueue_scripts', 'js_scripts' );

// function wpb_adding_scripts() {
	
// 	wp_register_script('my_amazing_script', plugins_url('js.js', __FILE__), array('jquery'),'1.1', true);
	
// 	wp_enqueue_script('my_amazing_script');
	
// 	}
	
// 	add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' ); 
	

function ntuts_scripts() {
 
	//wp_enqueue_script('jquery'); /* không cần thiết vì bên dưới file megaocode.js đã phụ thuộc vào jquery */
	
	wp_enqueue_script('megaocode_test_file', get_bloginfo('template_directory').'/js/header-js.js', array('jquery'));
  
 }   
  
 add_action('init', 'ntuts_scripts');


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


/**
 *  auto install page on theme install.
 */
add_action( 'after_switch_theme', 'mytheme_admin_init' );
function mytheme_admin_init() {
    if ( get_option( 'mytheme_installed' )!=true ) {
        $Home_page_id = wp_insert_post( array(
            'post_title'     => 'Trang chủ',
            'post_type'      => 'page',
            'post_name'      => 'home',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
            'post_content'   => '',
            'post_status'    => 'publish',
            'post_author'    => get_user_by( 'id', 1 )->user_id,
            'menu_order'     => 0,
            // Assign page template
            'page_template'  => 'Home-page.php'
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
            'page_template'  => 'Event-page.php'
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
            'page_template'  => 'Contact-page.php'
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
            'page_template'  => 'Checkout-page.php'
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
            'page_template'  => 'Checkout_detail-page.php'
        ) );


        update_option( 'mytheme_installed', true );
    }
}

// create table when active theme //
function hk_CreatDatabaseTicket(){
	global $wpdb;
	$charsetCollate = $wpdb->get_charset_collate();
	$ticketTable = $wpdb->prefix . 'ticket';
	$createTicketTable = "CREATE TABLE IF NOT EXISTS `{$ticketTable}` (
		`id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
		`name` varchar(255) NOT NULL,
		`typeticket` varchar(255) NOT NULL,
		`quantity` int(10) NOT NULL,
		`price`  int(10) NOT NULL,
		`email` varchar(255) NOT NULL,
		`phone` varchar(255) NOT NULL,
		`date` varchar(255) NOT NULL,
		`status` varchar(255) NOT NULL,

		PRIMARY KEY (`id`)
	) {$charsetCollate};";
	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $createTicketTable );
}

add_action( 'after_switch_theme', 'hk_CreatDatabaseTicket' );



