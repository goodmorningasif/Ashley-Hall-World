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
            <h3><?php echo mb_strimwidth(get_the_title(), 0, 15, '...'); ?></h3>
            <p><?php echo mb_strimwidth(get_the_content(), 0, 36, '...'); ?></p>
          </div>
        </article>
        
      <?php } else if($type === 'Quote') { ?>
        <!-- Quote Post -->
        <article class="quote-post" id="learn-<?php echo $count; ?>">
          <div class="content">
            <span class="label"><?php echo $subtitle; ?></span>
            <p><?php echo mb_strimwidth(get_the_content(), 0, 55, '...'); ?></p>
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