<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}

add_filter( 'body_class', 'red_starter_body_classes' );

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/logos/inhabitent-logo-text-dark.svg);
		height:65px;
		width:320px;
		background-size: 320px 65px;
		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function inhabitent_login_title(){
	return 'Inhabitent';
}
add_filter( 'login_headertitle', 'inhabitent_login_title');

add_action('admin_init', 'my_remove_menu_elements', 102);
 
function my_remove_menu_elements()
{
	remove_submenu_page( 'themes.php', 'theme-editor.php' );
	remove_submenu_page( 'plugins.php','plugin-editor.php' );
}

/**
 * Make hero image customizable through CFS field or featured image.
 */
function inhabitent_dynamic_css() {
    if ( ! is_page_template( 'page-templates/about.php' ) ) {
        return;
    }
    
    $image = CFS()->get( 'about_header_image' );
    if ( ! $image ) {
        return;
    }
    $hero_css = ".page-template-about .entry-header {
        background:
            linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
            url({$image}) no-repeat center bottom;
        background-size: cover, cover;
    }";
    wp_add_inline_style( 'tent-style', $hero_css );
}
add_action( 'wp_enqueue_scripts', 'inhabitent_dynamic_css' );


function inhabitent_archive_title( $title ) {
    if  ( is_post_type_archive("product") ) {
        $title = "Shop Stuff";
    } elseif ( is_tax("product-type") ) {
        $title = single_term_title( "", false);
    }
    return $title;
}

add_filter( "get_the_archive_title", "inhabitent_archive_title" );

function inhabitent_limit_archive_posts( $query ) {
    if  ($query->is_archive) {
        $query->set('orderby','title');
        $query->set('order','ASC');
    }
    return $query;
}

add_filter( "pre_get_posts", "inhabitent_limit_archive_posts" );