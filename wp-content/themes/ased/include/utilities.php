<?php
/**
 * ased Functions Files.
 *
 * @package ased
 * @subpackage Utility
 * @version 1.11
 *
 */

 //constant representing stylesheet and script
 define("STYLE", 1 );
 define("SCRIPT", 2 );

/**
 * Loads Site custom resources, css/javascript, do not invoke this function directly,
 * its only for internal purposes, use ased_queue_files() to que your files.
 *
 * @param $filePath array of relative paths to the custom stylesheets
 * @param $type represent type of file STYLE - stylesheet SCRIPT -javascript file
 *
 * @return bool
 */
add_action( 'wp_enqueue_scripts', '__ased_resources' , 999999 , 2 );
function __ased_resources( $filesPath = "" , $type = "" )
{
	if( !is_array($filesPath) || is_null( $filesPath) || count($filesPath) === 0 )
		return FALSE;

	$arrayLength = count($filesPath);

	switch ($type)
	{

		case STYLE:

			__priorities();

			for( $i = 0 ; $i < $arrayLength ; $i++)
			{
				wp_register_style( 'ased_style_'.$i, get_stylesheet_directory_uri( ). '/' .$filesPath[$i].'.css');
				wp_enqueue_style( 'ased_style_'.$i );
			}
			break;
		case SCRIPT:

			__priorities();

			for( $i = 0 ; $i < $arrayLength ; $i++)
			{
				wp_enqueue_script('asedjs_'.$i, get_stylesheet_directory_uri() . '/' .$filesPath[$i].'.js' ,'','', true);
			}

			break;
		default:
			die($type . " is an incorrect value for path type ");
	}

	return TRUE;

}

function __priorities()
{
	remove_action( 'genesis_meta', 'genesis_load_stylesheet' );
	wp_deregister_style('custom_css');
	wp_dequeue_style('custom_css');

	wp_register_style( 'theme_css', get_stylesheet_directory_uri( ). '/style.css');
	wp_enqueue_style( 'theme_css' );

	wp_register_style( 'ased_css', get_stylesheet_directory_uri( ).'/ased.css' );
	wp_enqueue_style( 'ased_css'  );
}


/**
 * Ques site custom resources, css/javascript.
 *
 * @param $filesPath array of relative paths of custom files
 * @param $type constant , flags what type of resource being queued - STYLE/SCRIPT
 * @param $admin bool , flag to enable the files to be queued in the dashboard as well,
 *		  unless customising the dashboard please keep the default value, default = false
 * @return bool, falses on fail, true otherwise.
 */
function ased_queue_files( $filesPath  , $type , $admin = false)
{
	if( is_admin() && !$admin )
		return FALSE;

	do_action( 'wp_enqueue_scripts' , $filesPath , $type );

	return TRUE;
}

//footer creds
remove_filter( 'genesis_footer_creds_text', 'zp_footer_creds_text' );
function ased_footer_creds_text()
{

	if(is_active_sidebar('bottom-widget'))
	{
		echo '<div class="bottom-widget row"><div class="content_wrapper container">';
			dynamic_sidebar('bottom-widget');
		echo '</div></div>';
	}

	$cred_text = '<div class="creds col-md-12 col-sm-12 col-xm-12 clearfix">
	<p>Copyright &copy; '.date('Y').' '.get_bloginfo( 'name' ).' | All Rights Reserved </p></div>';
	if( genesis_get_option( 'zp_footer_text',  ZP_SETTINGS_FIELD ) ){
		echo '<div class="creds col-md-12 col-sm-12 col-xm-12 clearfix"><p class="text" >'.genesis_get_option( 'zp_footer_text',  ZP_SETTINGS_FIELD ).'</p></div>';
	}else{
		echo $cred_text;
	}

}

/*show custom footer*/
function ased_footer()
{
	add_filter( 'genesis_footer_creds_text', 'ased_footer_creds_text' );
}

/*
 *	remove header title for pages and posts
 */
function remove_header_title()
{
	remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
	remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
	remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
}


/*
 * This is an internal function used to show featured image on single post pages,
 * to enable featured images use enable_featured_images()
 */
function single_post_featured_image()
{

	if ( ! is_singular( 'post' ) )
		return;

	$img = genesis_get_image( array( 'format' => 'html', 'size' => genesis_get_option( 'image_size' ), 'attr' => array( 'class' => 'post-image' ) ) );
	printf( '<figure id="featured-img-container" >%s</figure>', $img );

}

/*
 * To enabled featured image on single post pages
 *
 */
function enableFeaturedImages()
{
	add_action( 'genesis_entry_header', 'single_post_featured_image', 15 );
}


/**     add genesis woocommerce theme support
 *
 *
 */

function add_genesis_theme_support() {

add_theme_support( 'genesis-connect-woocommerce' );

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'custom_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'custom_wrapper_end', 10);

function custom_wrapper_start() {
  echo '<section class="content-sidebar-wrap"><main class="content"><div class="container"> ';
}

function custom_wrapper_end() {
  echo '</div></main></section>';
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

}
