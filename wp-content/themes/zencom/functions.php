<?php
/**
 * zencom functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package zencom
 */

if ( ! function_exists( 'zencom_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function zencom_setup() {
    /*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on zencom, use a find and replace
	 * to change 'zencom' to the name of your theme in all the template files.
	 */
    load_theme_textdomain( 'zencom', get_template_directory() . '/languages' );

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
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary', 'zencom' ),
    ) );

    /*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    /*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
    add_theme_support( 'post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
    ) );

    // Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'zencom_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) ) );
}
endif;
add_action( 'after_setup_theme', 'zencom_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function zencom_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'zencom_content_width', 640 );
}
add_action( 'after_setup_theme', 'zencom_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function zencom_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Left sidebar', 'zencom' ),
        'id'            => 'sidebar-1',
        'description'   => 'Colonna di sinistra con il menu principale',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'zencom_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function zencom_scripts() {
    wp_enqueue_style( 'zencom-style', get_stylesheet_uri() );

    wp_enqueue_script( 'zencom-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'zencom-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'zencom_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/* ------------------------------------------------------------------------- */

/**
* ZENCOM addons
*/

/* ------------------------------------------------------------------------- */

require get_template_directory() . '/inc/zencom/helpers.php';

/**
 * registra i javascript
 */

function zencom_register_js() {
    wp_enqueue_script('modernizr',get_template_directory_uri().'/js/vendor/modernizr-2.8.3.min.js',false,'2.8.3',false);
    wp_enqueue_script('init',get_template_directory_uri().'/js/init.min.js',array('modernizr','jquery'),'1.0.0',true);
}
add_action('wp_enqueue_scripts','zencom_register_js');

/**
* registra i google fonts
*/

function zencom_register_css() {
    wp_register_style('josefin-sans','https://fonts.googleapis.com/css?family=Josefin+Sans:400,700',false,1);
    wp_enqueue_style('josefin-sans');
}
add_action('wp_enqueue_scripts','zencom_register_css');


/**
 * registra due widget per il footer
 */

function zencom_register_footer_widget() {
    register_sidebar(
        array(
            'name'          => esc_html__('Footer', 'zencom'),
            'id'            => 'footer',
            'description'   => '',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => ''
        )
    );    
}
add_action('widgets_init','zencom_register_footer_widget');

/**
 * registra uno widget per la rightbar (template page-rightcol.php)
 */

function zencom_register_rightbar_widget() {
    register_sidebar(
        array(
            'name'          => esc_html__('Right sidebar', 'zencom'),
            'id'            => 'sidebar-right',
            'description'   => 'Colonna di destra (attiva solo per le pagine associate al template che prevede la colonna di destra)',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => ''
        )
    );
}
add_action('widgets_init','zencom_register_rightbar_widget');

/* personalizzazione Customizer */
require get_template_directory() . '/inc/customizer-addon.php';

/* Credits autore */
add_option('zencom_theme_author','Simone Alati');