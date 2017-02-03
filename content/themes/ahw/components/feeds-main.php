<?php
  /** 
  * the Loop => for Main Feed
  */

  require $_SERVER['DOCUMENT_ROOT'].'/Ashley-Hall-World/mustache/src/Mustache/Autoloader.php';
  Mustache_autoloader::register(); 
  
  $m = new Mustache_Engine;
  // echo $m->render('Hello, {{planet}}!', array('planet' => 'World'));


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
            <h3><?php echo mb_strimwidth(get_the_title(), 0, 14, '...'); ?></h3>
            <p><?php echo mb_strimwidth(get_the_content(), 0, 50, '...'); ?></p>
          <?php } ?>
        </div>
      </article>
    
    <?php } else if($type === 'Quote') { ?>
    <!-- Quote Post -->
      <article class="quote-post" id="main-<?php echo $count; ?>">
        <div class="content">
          <span class="label"><?php echo $subtitle; ?></span>
          <?php if ( $count%2 !== 0 ) { ?>
            <p><?php echo mb_strimwidth(get_the_content(), 0, 150, '...'); ?></p>
          <?php } else { ?>
            <p><?php echo mb_strimwidth(get_the_content(), 0, 80, '...'); ?></p>
          <?php } ?>
          <span class="cta">
            <a href="<?php echo $click_through; ?>" alt="<?php echo the_title(); ?>">
              <?php echo $cta; ?>
            </a>
          </span>
        </div>
      </article>
    
    <?php } else if($type === 'Video') { ?>
    <!-- Video Post -->
      <article class="video-post" id="main-<?php echo $count; ?>">
        <div class="video"><?php echo the_field('video_link'); ?></div>
        <div class="content">
          <span class="label"><?php echo $subtitle; ?></span>
          <?php if ( $count%2 !== 0 ) { ?>
            <h3><?php echo mb_strimwidth(get_the_title(), 0, 35, '...'); ?></h3>
            <p><?php echo mb_strimwidth(get_the_content(), 0, 140, '...'); ?></p>
          <?php } else { ?>
            <h3><?php echo mb_strimwidth(get_the_title(), 0, 14, '...'); ?></h3>
            <p><?php echo mb_strimwidth(get_the_content(), 0, 50, '...'); ?></p>
          <?php } ?>
        </div>
      </article>
    <?php } ?>
  <?php } ?>
<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.'); ?></p>
<?php endif; /* End Loop */ ?> 