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
      $count++;

      /** 
      * Variables 
      */

      $feed = get_field('feed_selection') ?: '';
      $type = get_field('post_type') ?: '';
      $subtitle = get_field('subtitle') ?: '';
      $link = get_field('click-through_link') ?: '';
      $image = '' ?: ''
      
      /**
      *  Console Logs
      * 
      * echo "<script>console.log('".get_field('feed_selection').", outputs feed_selection');</script>";
      * echo "<script>console.log('".$feed.", outputs var feed');</script>"; 
      */
    ?>


      
      <?php if ($feed === 'Main Feed'){ ?>

        <?php if ($type === 'Image') { ?> 
          <article>
            <div class="image" id="blog-02">
            </div>
            <div class="content">
              <span class="label"><?php $subtitle; ?></span>
              <h3><?php the_title(); ?></h3>
              <p>
                <?php if ( $count%2 === 0 ) { 
                    echo wp_trim_words(get_the_content(), 40, '...'); 
                  } else {
                    echo wp_trim_words(get_the_content(), 10, '...'); 
                  }
                ?>
              </p>
            </div>
          </article>
        <?php } ?>

      <?php } ?>




    <?php endwhile; else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; /* End Loop */ ?> 
   
  </section>

  <section id="feeds--social">

   <!--    <header>
        <h2>Learn Like A Girl</h2>
      </header>

      <article>
        <div class="image" id="soc-01">
        </div>
        <div class="content">
          <span class="label">History</span>
          <h3>Mcbee Plaid</h3>
          <p>sedut perspiciatis unde omnis iste natus.</p>
        </div>
      </article>

      <article>
        <div class="image" id="soc-01">
        </div>
        <div class="content">
          <span class="label">History</span>
          <h3>Mcbee Plaid</h3>
          <p>sedut perspiciatis unde omnis iste natus.</p>
        </div>
      </article> -->

    </section>
  


</section>

<?php get_footer();
