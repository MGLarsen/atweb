<?php

// Linkede filer - style og js
	function theme_styles() {
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
		wp_enqueue_style( 'theme', get_template_directory_uri() . '/css/theme.css' );
		wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
		wp_enqueue_script( 'js', get_template_directory_uri() . '/js/script.js' );
		wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js' );
	}

	add_action( 'wp_enqueue_scripts', 'theme_styles' );

// Dette er til custom menus
	function mytheme_setup() {

	register_nav_menus(
	array(
	'top_menu' => __( 'Top Menu', 'bootpress' ),
	'footer_menu' => __( 'Footer Menu', 'bootpress' )
	)
	);

	}
	add_action( 'after_setup_theme', 'mytheme_setup' );


	// Register Custom Navigation Walker
	require_once('wp_bootstrap_navwalker.php');


// widget og sidebar
	function create_widget( $name, $id, $description ) {
	$args = array(
		'name'          => __( $name ),
		'id'            => $id,
		'description'   => $description,
	    'class'         => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s sidebar">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>' );

	register_sidebar( $args );
	}

	create_widget ( 'Sidebar højre', 'sidebar_right', 'Viser widget i højre sider af siden i en sidebar' );
	create_widget ( 'Sidebar venstre', 'sidebar_left', 'Viser widget i venstre sider af siden i en sidebar' );
	create_widget ( 'Blog', 'blog', 'Viser widget i højre sider af bolg indlæg i en sidebar' );
	create_widget ( 'Footer 1', 'footer_1', 'Viser widget i venstre sider af footer' );
	create_widget ( 'Footer 2', 'footer_2', 'Viser widget i midten af footer' );
	create_widget ( 'Footer 3', 'footer_3', 'Viser widget i højre sider af footer' );


// Fjern Wordpress Verionsnummer af sikkerhedsmæssige årsager.
	function wb_remove_version() {
	    return '<!--brygget på atriumWeb ApS Framework-->';
	}
	add_filter('the_generator', 'wb_remove_version');

// Fjern trackbacks fra kommentarer
	add_filter('get_comments_number', 'comment_count', 0);
	function comment_count( $count ) {
	    if ( ! is_admin() ) {
	        global $id;
	        $comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
	        return count($comments_by_type['comment']);
	    } else {
	        return $count;
	    }
	}

// Kategori ID på body
	function category_id_class($classes) {
	global $post;
	foreach((get_the_category($post->ID)) as $category)
	$classes [] = 'cat-' . $category->cat_ID . '-id';
	return $classes;
	}
	add_filter('post_class', 'category_id_class');
	add_filter('body_class', 'category_id_class');

// Tilføj klasse hvis post har thumbnail
	function has_thumb_class($classes) {
	    global $post;
	    if( has_post_thumbnail($post->ID) ) { $classes[] = 'has_thumb'; }
	        return $classes;
	}
	add_filter('post_class', 'has_thumb_class');


// The Excerpt
	function custom_excerpt_length( $length ) {
		return 80;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	// Ændre excerpt More-link
	function new_excerpt_more($more) {
	       global $post;
		return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Læs mere...</a>'; // Ændre i teskten " Læs mere..."
	}
	add_filter('excerpt_more', 'new_excerpt_more');

// Login style
	function atweb_login() {
	   wp_enqueue_style( 'theme', get_template_directory_uri() . '/css/login.css' );
	}
	add_action( 'login_enqueue_scripts', 'atweb_login' );



// Slut tag
?>