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

<div id="wrap">

  <!-- ====  Section: Discovery Map  ==== -->
  <!-- Benjamin's code goes here -->
  <section id="discovery-map">
    <header id="discovery-map--header">
      <div id="corner-link"><?php echo file_get_contents($GLOBALS['url']."/assets/corner-link.svg"); ?></div>
      <div id="logo-main"><?php echo file_get_contents($GLOBALS['url']."/assets/logo-main.svg"); ?></div>
      <div id="logo-seal"><?php echo file_get_contents($GLOBALS['url']."/assets/logo-seal.svg"); ?></div>
    </header>
    <!-- <div id="discovery-map--logo"></div> -->
  </section>
  
  <!-- ====  Section: Feeds  ==== -->
  <header id="pre-feeds">
    <h2>A Day In The Life...</h2>
  </header>

  <section id="feeds">

    <div id="feeds--blog-feed">
      <div class="feeds--lcol">
        <div class="image" id="lcol-0">
          <div class="play-bttn"><?php echo file_get_contents($GLOBALS['url']."/assets/play-bttn.svg"); ?></div>
        </div>
        <span class="label">Learn</span>
        <h3>Headline Goes Here</h3>
        <p>sedut perspiciatis unde omnis iste natus.</p>
      </div>
  			
  		<div class="feeds--rcol">
        <div class="image" id="rcol-0">
          <div class="play-bttn"><?php echo file_get_contents($GLOBALS['url']."/assets/play-bttn.svg"); ?></div>
        </div>
        <span class="label">Play</span>
        <h3>Headline Here</h3>
        <p>sedut perspiciatis unde omnis iste natus.</p>
  		</div>
    </div>

    <div id="feeds--social-feed">
      <h2>Learn Like A Girl</h2>
      <div class="feeds--scol">
        <div class="image" id="scol-0">
          <div class="play-bttn"><?php echo file_get_contents($GLOBALS['url']."/assets/play-bttn.svg"); ?></div>
        </div>
        <span class="label">History</span>
        <h3>Mcbee Plaid</h3>
        <p>sedut perspiciatis unde omnis iste natus.</p>
      </div>
    </div>
  </section>

</div>

<?php get_footer();
