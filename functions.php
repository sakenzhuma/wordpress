<?php

if ( ! defined( '_S_VERSION' ) ) define( '_S_VERSION', '1.0.0' );

function myhub_setup() {
	load_theme_textdomain( 'myhub', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus(['menu-1' => esc_html__( 'Primary', 'myhub' )]);
	add_theme_support('html5',
		['search-form','comment-form','comment-list','gallery','caption','style','script']);
	add_theme_support(
		'custom-background', apply_filters(
			'myhub_custom_background_args',
			array('default-color' => 'ffffff','default-image' => '')
		)
	);
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support(
		'custom-logo', array(
			'height'      => 250,'width'       => 250,
			'flex-width'  => true, 'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'myhub_setup' );

function myhub_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'myhub_content_width', 640 );
}
add_action( 'after_setup_theme', 'myhub_content_width', 0 );

function myhub_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'myhub' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'myhub' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'myhub_widgets_init' );

// require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
// require get_template_directory() . '/inc/template-functions.php';
// require get_template_directory() . '/inc/customizer.php';

if ( defined( 'JETPACK__VERSION' ) ) require get_template_directory() . '/inc/jetpack.php';

function myhub_scripts() {
	wp_enqueue_style( 'myhub-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_script( 'myhub-globe', get_template_directory_uri() . '/assets/js/globe.js', [], '', true );
	// wp_enqueue_script( 'myhub-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );
	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );
	wp_dequeue_style('global-styles');
	wp_dequeue_style('classic-theme-styles');
}
add_action( 'wp_enqueue_scripts', 'myhub_scripts' );

function add_to_head() {
	printf("<script defer src='%s'></script>", get_template_directory_uri() . "/assets/libs/alpine.min.js");
	printf("<script src='%s'></script>", get_template_directory_uri() . "/assets/libs/slider/slider.js");
}

add_action( 'wp_head', 'add_to_head');

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
