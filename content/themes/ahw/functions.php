<?php

	/* Define Variables  */
	$GLOBALS['url'] = get_template_directory_uri();


	/* Add Styles, Fonts, and Javascript */
  wp_enqueue_scripts();

	function my_enqueue_style() {

		//<link rel="stylesheet" type="text/css" href="https://cloud.typography.com/778678/6993372/css/fonts.css" />
	  wp_enqueue_style('cloud.typography', 'https://cloud.typography.com/778678/6993372/css/fonts.css');
		wp_enqueue_style('styles', $GLOBALS['url'].'/prod/styles.css');

		add_theme_support( 'post-thumbnails' );

  }

  add_action( 'wp_enqueue_scripts', 'my_enqueue_style' );

  add_theme_support( 'post-thumbnails' );

?>
