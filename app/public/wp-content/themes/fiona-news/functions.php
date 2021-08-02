<?php
function fiona_news_css() {
	$parent_style = 'fiona-blog-parent-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'fiona-news-style', get_stylesheet_uri(), array( $parent_style ));
	
	wp_enqueue_style('fiona-news-color-default',get_stylesheet_directory_uri() .'/assets/css/color/default.css');
	wp_dequeue_style('fiona-blog-default');
	
	wp_enqueue_style('fiona-news-breakingNews',get_stylesheet_directory_uri().'/assets/css/breakingNews.css');
	wp_enqueue_style('fiona-news-media-query',get_stylesheet_directory_uri().'/assets/css/responsive.css');
	wp_dequeue_style('fiona-blog-media-query');
	wp_dequeue_style('fiona-blog-fonts');
	wp_enqueue_script('fiona-news-breakingNews-js', get_stylesheet_directory_uri() . '/assets/js/breakingNews.js', array('jquery'), false, true);
	wp_enqueue_script('fiona-news-custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), false, true);

}
add_action( 'wp_enqueue_scripts', 'fiona_news_css',999);
   	

function fiona_news_setup()	{
	
	register_nav_menus( array(
		'header_above_menu' => esc_html__( 'Header Above Menu', 'fiona-news' ),
	) );
		
	add_editor_style( array( 'assets/css/editor-style.css', fiona_news_google_font() ) );
	
	add_theme_support( 'custom-header', apply_filters( 'fiona_news_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '14212a',
		'width'                  => 2000,
		'height'                 => 200,
		'flex-height'            => true,
		'wp-head-callback'       => 'fiona_blog_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'fiona_news_setup' );
	
/**
 * Register Google fonts for Avail.
 */
function fiona_news_google_font() {
	
   $get_fonts_url = '';
		
    $font_families = array();
 
	$font_families = array('Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $get_fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );

    return $get_fonts_url;
}

function fiona_news_scripts_styles() {
    wp_enqueue_style( 'fiona-news-fonts', fiona_news_google_font(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'fiona_news_scripts_styles' );
