<?php

	/* Define Variables  */
	$GLOBALS['url'] = get_template_directory_uri();
	


	/* Add Styles, Fonts, and Javascript */

	function my_enqueue_style() {

		//<link rel="stylesheet" type="text/css" href="https://cloud.typography.com/778678/6993372/css/fonts.css" />
	  wp_enqueue_style('cloud.typography', 'https://cloud.typography.com/778678/6993372/css/fonts.css');
		wp_enqueue_style('styles', $GLOBALS['url'].'/prod/styles.css');

		wp_enqueue_script('scripts-min', $GLOBALS['url'].'/prod/scripts-min.js', array('jquery'), '1.0.0', true);

  }

  add_action( 'wp_enqueue_scripts', 'my_enqueue_style' );

  // add_theme_support( 'post-thumbnails' );

  add_action('get_header', 'remove_admin_login_header');

  function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
  }

?>