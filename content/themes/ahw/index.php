<?php
/** 
 * Index
 *
 * The main template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

  get_header(); ?>


<!-- ====  Section: Discovery Map  ==== -->
<section id="discovery-map">
  <header>
    <div id="corner-link"><?php echo file_get_contents($GLOBALS['url']."/assets/corner-link.svg"); ?></div>
    <div id="logo-main"><?php echo file_get_contents($GLOBALS['url']."/assets/logo-main.svg"); ?></div>
    <div id="logo-seal"><?php echo file_get_contents($GLOBALS['url']."/assets/logo-seal.svg"); ?></div>
  </header>
</section>

<header id="pre-feeds">
  <h2>A Day In The Life...</h2>
</header>

<!-- ====  Section: Feeds  ==== -->
<section id="feeds">
  <section id="feeds--main">
    <?php get_template_part('components/feeds-main'); ?>
  </section>
  <section id="feeds--learn">
    <header>
      <h2>Learn Like A Girl</h2>
    </header>
    <?php get_template_part('components/feeds-learn'); ?>
  </section>
</section>

<?php

  /**
  *  Console Logs
  * 
  * echo "<script>console.log('".get_field('feed_selection').", outputs feed_selection');</script>";
  */  

?>

<?php get_footer();
