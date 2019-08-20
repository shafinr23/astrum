<?php

//nav walker
require_once get_template_directory().'/inc/class-wp-bootstrap-navwalker.php';
require_once get_template_directory().'/inc/tgm.php';

//short code and vesial composer

if (file_exists( get_template_directory().'/inc/vc-element.php')){
    require_once get_template_directory().'/inc/vc-element.php';
}

if (file_exists( get_template_directory().'/inc/vc-element-output.php')){
    require_once get_template_directory().'/inc/vc-element-output.php';
}

// basic setup function
if ( ! function_exists( 'theme_setup' ) ) :
	
	function theme_setup() {
		load_theme_textdomain( 'theme', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus( array(
			'mainmenu' => esc_html__( 'Primary', 'theme' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-background', apply_filters( 'theme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'theme_setup' );


function theme_content_width() {

	$GLOBALS['content_width'] = apply_filters( 'theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'theme_content_width', 0 );

// sidebar
function theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'theme' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="headline">',
		'after_title'   => '</h3><span class="line"></span><div class="clearfix"></div>',
	) );
}
add_action( 'widgets_init', 'theme_widgets_init' );


// add css and js
function theme_scripts() {
	wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/assets/css/style.css', '215', true );
	wp_enqueue_style( 'theme-color', get_template_directory_uri() . '/assets/css/colors/green.css', '215', true );
	wp_enqueue_style( 'theme-fontAwesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'theme-jquery', get_template_directory_uri() . '/assets/scripts/jquery.min.js', array('jquery'), '1215', true );
	wp_enqueue_script( 'theme-themepuch', get_template_directory_uri() . '/assets/scripts/jquery.themepunch.plugins.min.js', array('jquery'), '1215', true );
	wp_enqueue_script( 'theme-revolution', get_template_directory_uri() . '/assets/scripts/jquery.themepunch.revolution.min.js', array('jquery'), '1215', true );
	wp_enqueue_script( 'theme-showbizpro', get_template_directory_uri() . '/assets/scripts/jquery.themepunch.showbizpro.min.js', array('jquery'), '1215', true );
	wp_enqueue_script( 'theme-easing', get_template_directory_uri() . '/assets/scripts/jquery.easing.min.js', array('jquery'), '1215', true );
	wp_enqueue_script( 'theme-tooltips', get_template_directory_uri() . '/assets/scripts/jquery.tooltips.min.js', array('jquery'), '1215', true );
	wp_enqueue_script( 'theme-popup', get_template_directory_uri() . '/assets/scripts/jquery.magnific-popup.min.js', array('jquery'), '1215', true );
	wp_enqueue_script( 'theme-superfish', get_template_directory_uri() . '/assets/scripts/jquery.superfish.js', array('jquery'), '1215', true );
	wp_enqueue_script( 'theme-twitter', get_template_directory_uri() . '/assets/scripts/jquery.twitter.js', array('jquery'), '1215', true );
	wp_enqueue_script( 'theme-flexslider', get_template_directory_uri() . '/assets/scripts/jquery.flexslider.js', array('jquery'), '1215', true );
	wp_enqueue_script( 'theme-jpanelmenu', get_template_directory_uri() . '/assets/scripts/jquery.jpanelmenu.js', array('jquery'), '1215', true );
	wp_enqueue_script( 'theme-contact', get_template_directory_uri() . '/assets/scripts/jquery.contact.js', array('jquery'), '1215', true );
	wp_enqueue_script( 'theme-isotope', get_template_directory_uri() . '/assets/scripts/jquery.isotope.min.js', array('jquery'), '1215', true );
	wp_enqueue_script( 'theme-custom', get_template_directory_uri() . '/assets/scripts/custom.js', array('jquery'), '1215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );


function pagination() {


    if( is_singular() )
        return;

    global $wp_query;


    if( $wp_query->max_num_pages <= 1 )
        return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );


    if ( $paged >= 1 )
        $links[] = $paged;


    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<nav class="pagination"><ul>' . "\n";


    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );


    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }


    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }


    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }


    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );

    echo '</ul></nav>' . "\n";

}