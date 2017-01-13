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

    
 // define( 'WP_USE_THEMES', false ); get_header();

get_header(); ?>


<!-- ====  Section: Discovery Map  ==== -->
<!-- Benjamin's code goes here -->
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

  <section id="feeds--blog">

    <?php
      /** 
      * the Loop => for Main Feed
      */ 
      
      $count = 0;
      if ( have_posts() ) : while ( have_posts() ) : the_post(); 

      /** 
      * Variables 
      */

      $feed = get_field('feed_selection') ?: '';
      $type = get_field('post_type') ?: '';
      $subtitle = get_field('subtitle') ?: '';
      $link = get_field('click-through_link') ?: '';
      $image = get_field('image_upload') ?: '';
      $click_through = get_field('click-through_link');
      $cta = get_field('quote_cta');
  

      if ($feed === 'Main Feed'){ 
        $count++;

        if ($type === 'Image') {
    ?>
          <!-- Image Post -->
          <article class="image-post" id="main-<?php echo $count; ?>">
            <div class="image"  
            style="background: #fff url('<?php echo $image['url']; ?>') no-repeat center; background-size: cover"></div>
            <div class="content">
              <span class="label"><?php echo $subtitle; ?></span>
              <?php if ( $count%2 !== 0 ) { ?>
                <h3><?php echo mb_strimwidth(get_the_title(), 0, 35, '...'); ?></h3>
                <p><?php echo mb_strimwidth(get_the_content(), 0, 140, '...'); ?></p>
              <?php } else { ?>
                <h3><?php echo mb_strimwidth(get_the_title(), 0, 15, '...'); ?></h3>
                <p><?php echo mb_strimwidth(get_the_content(), 0, 50, '...'); ?></p>
              <?php } ?>
            </div>
          </article>
        
        <!-- Quote Post -->
        <?php } else if($type === 'Quote') { ?>
          <article class="quote-post" id="main-<?php echo $count; ?>">
            <div class="content">
              <span class="label"><?php echo $subtitle; ?></span>
              <?php if ( $count%2 !== 0 ) { ?>
                <p><?php echo wp_trim_words(get_the_content(), 30, '...'); ?></p>
              <?php } else { ?>
                <p><?php echo wp_trim_words(get_the_content(), 10, '...'); ?></p>
              <?php } ?>
              <span class="cta">
                <a href="<?php echo $click_through; ?>" alt="<?php echo the_title(); ?>">
                  <?php echo $cta; ?>
                </a>
              </span>
            </div>
          </article>
        
        <!-- Video Post -->
        <?php } else if($type === 'Video') { ?>
          <article class="video-post" id="main-<?php echo $count; ?>">
            <div class="video"><?php echo the_field('video_link'); ?></div>
            <div class="content">
              <span class="label"><?php echo $subtitle; ?></span>
              <?php if ( $count%2 !== 0 ) { ?>
                <h3><?php echo mb_strimwidth(get_the_title(), 0, 35, '...'); ?></h3>
                <p><?php echo mb_strimwidth(get_the_content(), 0, 140, '...'); ?></p>
              <?php } else { ?>
                <h3><?php echo mb_strimwidth(get_the_title(), 0, 15, '...'); ?></h3>
                <p><?php echo mb_strimwidth(get_the_content(), 0, 50, '...'); ?></p>
              <?php } ?>
            </div>
          </article>
        <?php } ?>
      <?php } ?>
    <?php endwhile; else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; /* End Loop */ ?> 
   
  </section>

  <section id="feeds--social">

    <header>
      <h2>Learn Like A Girl</h2>
    </header>

    <?php
      /** 
      * the Loop => for Learn Feed
      */ 
      
      $count = 0;
      if ( have_posts() ) : while ( have_posts() ) : the_post(); 

      /** 
      * Variables 
      */

      $feed = get_field('feed_selection') ?: '';
      $type = get_field('post_type') ?: '';
      $subtitle = get_field('subtitle') ?: '';
      $link = get_field('click-through_link') ?: '';
      $image = get_field('image_upload') ?: '';
      $click_through = get_field('click-through_link');
      $cta = get_field('quote_cta');

      if ($feed === 'Learn Feed'){ 
        $count++;

        if ($type === 'Image') {
    ?>
          <!-- Image Post -->
          <article class="image-post" id="learn-<?php echo $count; ?>">
            <div class="image"  
            style="background: #fff url('<?php echo $image['url']; ?>') no-repeat center; background-size: cover">
            </div>
            <div class="content">
              <span class="label"><?php echo $subtitle; ?></span>
              <h3><?php echo wp_trim_words(get_the_title(), 2, '...'); ?></h3>
              <p><?php echo wp_trim_words(get_the_content(), 5, '...'); ?></p>
            </div>
          </article>
        
        <!-- Quote Post -->
        <?php } else if($type === 'Quote') { ?>
          <article class="quote-post" id="learn-<?php echo $count; ?>">
            <div class="content">
              <span class="label"><?php echo $subtitle; ?></span>
              <p><?php echo wp_trim_words(get_the_content(), 10, '...'); ?></p>
              <span class="cta">
                <a href="<?php echo $click_through; ?>" alt="<?php echo the_title(); ?>">
                  <?php echo $cta; ?>
                </a>
              </span>
            </div>
          </article>
        <?php } ?>
      <?php } ?>
    <?php endwhile; else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; /* End Loop */ ?> 

  </section>
  


</section>

<?php

  /**
  *  Console Logs
  * 
  * echo "<script>console.log('".get_field('feed_selection').", outputs feed_selection');</script>";
  * echo "<script>console.log('".$feed.", outputs var feed');</script>"; 
  * echo '<pre>';
  * print_r($image);
  * echo '</pre>';
  * echo "<script>console.log('".$video.", outputs video obj');</script>"; 
  * echo "<script>console.log('".$subtitle." ".$count.", outputs subtitle & count');</script>";
  * echo "<script>console.log('".$loops.", outputs total ammt of loops');</script>";
  */  

?>

<?php get_footer();
