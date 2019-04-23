<?php

add_theme_support( 'post-thumbnails' );

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

if (function_exists('register_nav_menus')) {
register_nav_menus(
	array(
		'header_menu' => 'Header Menu'
		)
	);
}

/**
 * Validate an email address
 *
 * @param (string) $email
 * @return (boolean) true if the email address has a valid format and the domain exists
 */
function isValidEmail ($email) {
    $email = trim($email);

    $isValid = true;
    $atIndex = strrpos($email, "@");

    if (is_bool($atIndex) && !$atIndex) {
        return false;
    }

    $domain = substr($email, $atIndex + 1);
    $local = substr($email, 0, $atIndex);
    $localLen = strlen($local);
    $domainLen = strlen($domain);

    if (($localLen < 1) || ($localLen > 64)) {
        // local part length exceeded
        $isValid = false;
    } elseif ($domainLen < 1 || $domainLen > 255) {
        // domain part length exceeded
        $isValid = false;
    } elseif (($local[0] === '.') || ($local[$localLen - 1] === '.')) {
        // local part starts or ends with '.'
        $isValid = false;
    } elseif (preg_match('/\\.\\./', $local)) {
        // local part has two consecutive dots
        $isValid = false;
    } elseif (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain)) {
        // character not valid in domain part
        $isValid = false;
    } elseif (preg_match('/\\.\\./', $domain)) {
        // domain part has two consecutive dots
        $isValid = false;
    } elseif (!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/', str_replace("\\\\", "", $local))) {
        // character not valid in local part unless
        // local part is quoted
        if (!preg_match('/^"(\\\\"|[^"])+"$/', str_replace("\\\\","",$local))) {
            $isValid = false;
        }
    }

    // checkdnsrr($domain, "MX") checks if there is a mail server set up on this domain
    // this is the only domain check we must do.
    if ($isValid && !checkdnsrr($domain, "MX")) {
        // domain not found in DNS
        $isValid = false;
    }

    return $isValid;
}

add_image_size( 'preview_size', 650, 400, true );

/*add_action( 'wp_print_scripts', 'my_deregister_javascript', 100 );
	function my_deregister_javascript() {
	  if ( is_front_page() ) {
		wp_deregister_script( 'contact-form-7' );
	  }
	}

	add_action( 'wp_print_styles', 'my_deregister_styles', 100 );

	function my_deregister_styles() {
	  if ( is_front_page() ) {
		wp_deregister_style( 'contact-form-7' );
	}
}*/

remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rest_output_link_wp_head' );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'wp_resource_hints', 2 );
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
