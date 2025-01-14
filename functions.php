<?php 

/**
 * Funcitons file
 * 
 * @package portofolio-dev
 */

 /**
  * Load Style and Script Files
  */
 function porto_add_scripts() {

    wp_enqueue_style('iconmoon-style', get_template_directory_uri() . "/assets/src/icomoon/style.css", [], "1.0", 'all');

    wp_enqueue_style('main-style', get_template_directory_uri() . "/assets/css/main.css", [], "1.0", 'all');

    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], "1.0", true);
 }

 add_action( 'wp_enqueue_scripts',  'porto_add_scripts');


/**
 * Add theme support.
 */

if ( ! isset( $content_width ) )
	$content_width = 750;

function porto_add_theme_supports()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	// add_theme_support( 'post-formats', array( 'status', 'quote', 'gallery', 'image', 'video', 'audio', 'link', 'aside', 'chat' ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for document Title tag
	add_theme_support( 'title-tag' );

	// Add theme support for custom CSS in the TinyMCE visual editor
	add_editor_style();
}
add_action( 'after_setup_theme', 'porto_add_theme_supports' );


// Register Navigation Menus
function porto_navigation_menus() {

	$locations = array(
		'header' => __( 'header menu', 'portofolio-dev' ),
		'footer' => __( 'footer menu', 'portofolio-dev' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'porto_navigation_menus' );


add_filter( 'rwmb_meta_boxes', 'porto_register_meta_boxes' );

function porto_register_meta_boxes( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'    => esc_html__( 'Links for project', 'portofolio-dev' ),
        'id'       => 'links-for-project',
        'context'  => 'normal',
        'autosave' => true,
        'fields'   => [
            [
                'type' => 'url',
                'name' => esc_html__( 'Watch URL', 'portofolio-dev' ),
                'id'   => $prefix . 'watch_url',
                'desc' => esc_html__( 'watch project live server', 'portofolio-dev' ),
            ],
            [
                'type' => 'url',
                'name' => esc_html__( 'Design Url', 'portofolio-dev' ),
                'id'   => $prefix . 'design_url',
                'desc' => esc_html__( 'Url of the design Inspiration', 'portofolio-dev' ),
            ],
            [
                'type' => 'url',
                'name' => esc_html__( 'GitHub Url', 'portofolio-dev' ),
                'id'   => $prefix . 'github_url',
                'desc' => esc_html__( 'Github Repo of the project', 'portofolio-dev' ),
            ],
        ],
    ];

    return $meta_boxes;
}
