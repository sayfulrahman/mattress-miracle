<?php
/**
 * mattress miracle functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mattress_miracle
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
function mattress_miracle_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on mattress miracle, use a find and replace
		* to change 'mattress-miracle' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'mattress-miracle', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'mattress-miracle' ),
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
			'mattress_miracle_custom_background_args',
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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary Header', 'itechpublic' ),
			'menu-2' => esc_html__( 'Footer 1', 'itechpublic' ),
			'menu-3' => esc_html__( 'Footer 2', 'itechpublic' ),
			'menu-4' => esc_html__( 'Footer 3', 'itechpublic' ),
		)
	);
}
add_action( 'after_setup_theme', 'mattress_miracle_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mattress_miracle_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mattress_miracle_content_width', 640 );
}
add_action( 'after_setup_theme', 'mattress_miracle_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mattress_miracle_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'mattress-miracle' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'mattress-miracle' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'mattress_miracle_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mattress_miracle_scripts() {
	wp_enqueue_style( 'mattress-miracle-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'mattress-miracle-style', 'rtl', 'replace' );

	wp_enqueue_script( 'mattress-miracle-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), '3.0.0', 'all' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.3.2', 'all' );
	
	if ( is_front_page() ) {
	wp_enqueue_style( 'glider', get_template_directory_uri() . '/js/vendor/Glider.js-master/glider.css', array(), _S_VERSION, 'all' );
	}
	
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION, 'all' );
	
	if ( is_front_page() ) {
	wp_enqueue_script( 'glider', get_template_directory_uri() . '/js/vendor/Glider.js-master/glider.js', array(), '1.7.4', true );
	}
	
	wp_enqueue_script( 'apps', get_template_directory_uri() . '/js/apps.js', array(), _S_VERSION, true );
	if ( is_front_page() ) {
        wp_enqueue_script( 'gliders', get_template_directory_uri() . '/js/gliders.js', array(), _S_VERSION, true );
    }
}
add_action( 'wp_enqueue_scripts', 'mattress_miracle_scripts' );

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
 * Menu Bootstrap Navwalker.
 */
require get_template_directory() . '/inc/extra/class-wp-bootstrap-navwalker.php';

// CUSTOM CODE ADDED BY DEVELOPER//
function theme_customize_register($wp_customize) {
    // Add a custom section
    $wp_customize->add_section('banner_section', array(
        'title' => __('Banner', 'your-theme-slug'),
    ));

    // Add fields for heading, subheading, button label, and button URL
    $wp_customize->add_setting('banner_heading', array(
        'default'           => 'Default Heading',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('banner_heading', array(
        'label'    => __('Heading', 'your-theme-slug'),
        'section'  => 'banner_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('banner_subheading', array(
        'default'           => 'Default Subheading',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('banner_subheading', array(
        'label'    => __('Subheading', 'your-theme-slug'),
        'section'  => 'banner_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('banner_button_label', array(
        'default'           => 'Learn More',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('banner_button_label', array(
        'label'    => __('Button Label', 'your-theme-slug'),
        'section'  => 'banner_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('banner_button_url', array(
        'default'           => 'https://example.com',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('banner_button_url', array(
        'label'    => __('Button URL', 'your-theme-slug'),
        'section'  => 'banner_section',
        'type'     => 'url',
    ));
}

add_action('customize_register', 'theme_customize_register');

function truncate_string($string, $word_count = 5) {
    // Explode the string into an array of words
    $words = explode(' ', $string);

    // Slice the array to get the first $word_count words
    $truncated = implode(' ', array_slice($words, 0, $word_count));

    // Append ellipsis if the original string exceeds the word limit
    if (count($words) > $word_count) {
        $truncated .= '...';
    }

    return $truncated;
}


// Add ACF custom field to post column

function custom_acf_columns($columns) {
    $columns['parent'] = 'parent Page'; // Replace 'custom_field1' with your first ACF field name
    $columns['subparent'] = 'subparent Page'; // Replace 'custom_field2' with your second ACF field name
    return $columns;
}
add_filter('manage_posts_columns', 'custom_acf_columns');

// Display ACF field values in post columns
function display_custom_acf_columns($column, $post_id) {
    switch ($column) {
        case 'parent':
            $parent = get_field('parent', $post_id); // Replace 'custom_field1' with your first ACF field name
            echo esc_html($parent);
            break;
        case 'subparent':
            $subparent = get_field('subparent', $post_id); // Replace 'custom_field2' with your second ACF field name
            echo esc_html($subparent);
            break;
        default:
            break;
    }
}
add_action('manage_posts_custom_column', 'display_custom_acf_columns', 10, 2);

// category url

// Remove "category" base from category URLs
/* actions */
add_action( 'created_category', 'remove_category_url_refresh_rules' );
add_action( 'delete_category', 'remove_category_url_refresh_rules' );
add_action( 'edited_category', 'remove_category_url_refresh_rules' );
add_action( 'init', 'remove_category_url_permastruct' );

/* filters */
add_filter( 'category_rewrite_rules', 'remove_category_url_rewrite_rules' );
add_filter( 'query_vars', 'remove_category_url_query_vars' );    // Adds 'category_redirect' query variable
add_filter( 'request', 'remove_category_url_request' );       // Redirects if 'category_redirect' is set
add_filter( 'plugin_row_meta', 'remove_category_url_plugin_row_meta', 10, 4 );

function remove_category_url_refresh_rules() {
	global $wp_rewrite;
	$wp_rewrite->flush_rules();
}

function remove_category_url_deactivate() {
	remove_filter( 'category_rewrite_rules', 'remove_category_url_rewrite_rules' ); // We don't want to insert our custom rules again
	remove_category_url_refresh_rules();
}

/**
 * Removes category base.
 *
 * @return void
 */
function remove_category_url_permastruct() {
	global $wp_rewrite, $wp_version;

	if ( 3.4 <= $wp_version ) {
		$wp_rewrite->extra_permastructs['category']['struct'] = '%category%';
	} else {
		$wp_rewrite->extra_permastructs['category'][0] = '%category%';
	}
}

/**
 * Adds our custom category rewrite rules.
 *
 * @param array $category_rewrite Category rewrite rules.
 *
 * @return array
 */
function remove_category_url_rewrite_rules( $category_rewrite ) {
	global $wp_rewrite;

	$category_rewrite = array();

	/* WPML is present: temporary disable terms_clauses filter to get all categories for rewrite */
	if ( class_exists( 'Sitepress' ) ) {
		global $sitepress;

		remove_filter( 'terms_clauses', array( $sitepress, 'terms_clauses' ), 10 );
		$categories = get_categories( array( 'hide_empty' => false, '_icl_show_all_langs' => true ) );
		add_filter( 'terms_clauses', array( $sitepress, 'terms_clauses' ), 10, 4 );
	} else {
		$categories = get_categories( array( 'hide_empty' => false ) );
	}

	foreach ( $categories as $category ) {
		$category_nicename = $category->slug;
		if ( $category->parent == $category->cat_ID ) {
			$category->parent = 0;
		} elseif ( 0 != $category->parent ) {
			$category_nicename = get_category_parents( $category->parent, false, '/', true ) . $category_nicename;
		}
		$category_rewrite[ '(' . $category_nicename . ')/(?:feed/)?(feed|rdf|rss|rss2|atom)/?$' ] = 'index.php?category_name=$matches[1]&feed=$matches[2]';
		$category_rewrite[ '(' . $category_nicename . ')/page/?([0-9]{1,})/?$' ]                  = 'index.php?category_name=$matches[1]&paged=$matches[2]';
		$category_rewrite[ '(' . $category_nicename . ')/?$' ]                                    = 'index.php?category_name=$matches[1]';
	}

	// Redirect support from Old Category Base
	$old_category_base                                 = get_option( 'category_base' ) ? get_option( 'category_base' ) : 'category';
	$old_category_base                                 = trim( $old_category_base, '/' );
	$category_rewrite[ $old_category_base . '/(.*)$' ] = 'index.php?category_redirect=$matches[1]';

	return $category_rewrite;
}

function remove_category_url_query_vars( $public_query_vars ) {
	$public_query_vars[] = 'category_redirect';

	return $public_query_vars;
}

/**
 * Handles category redirects.
 *
 * @param $query_vars Current query vars.
 *
 * @return array $query_vars, or void if category_redirect is present.
 */
function remove_category_url_request( $query_vars ) {
	if ( isset( $query_vars['category_redirect'] ) ) {
		$catlink = trailingslashit( get_option( 'home' ) ) . user_trailingslashit( $query_vars['category_redirect'], 'category' );
		status_header( 301 );
		header( "Location: $catlink" );
		exit;
	}

	return $query_vars;
}

function remove_category_url_plugin_row_meta( $links, $file ) {
	if ( plugin_basename( __FILE__ ) === $file ) {
		$links[] = sprintf( '<a target="_blank" href="%s">%s</a>', esc_url( 'https://valeriosouza.com.br/donate/' ), __( 'Donate', 'remove_category_url' ) );
	}

	return $links;
}