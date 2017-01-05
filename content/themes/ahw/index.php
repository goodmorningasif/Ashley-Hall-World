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

<div class="wrap">


  <!-- ====  Block: Discovery Map  ==== -->
  <!-- Benjamin's code goes here -->
  <div id="discovery-map">
    <div id="discovery-map--header">
      <div id="corner-link"><?php echo file_get_contents($GLOBALS['url']."/assets/corner-link.svg"); ?></div>
      <div id="logo-main"><?php echo file_get_contents($GLOBALS['url']."/assets/logo-main.svg"); ?></div>
      <div id="logo-seal"><?php echo file_get_contents($GLOBALS['url']."/assets/logo-seal.svg"); ?></div>
    </div>
    <div id="discovery-map--logo">Logo</div>
  </div>
  
  <!-- ====  Block: Blog Feed  ==== -->
  <div id="blog-feed">
    <h2>A Day In The Life</h2>

    <div class="blog-feed--lcol">
      <div class="image" id="lcol-0">
        <div class="play-bttn"><?php echo file_get_contents($GLOBALS['url']."/assets/play-bttn.svg"); ?></div>
      </div>
      <h3>Learn</h3>
      <h4>Headline Goes Here</h4>
      <p>sedut perspiciatis unde omnis iste natus.</p>
    </div>
			
			<div class="blog-feed--rcol">
      <div class="image" id="rcol-0">
        <div class="play-bttn"><?php echo file_get_contents($GLOBALS['url']."/assets/play-bttn.svg"); ?></div>
      </div>
      <h3>Play</h3>
      <h4>Headline Here</h4>
      <p>sedut perspiciatis unde omnis iste natus.</p>
			</div>

  </div>


  <!-- ====  Block: Social Feed  ==== -->
  <div id="social-feed">
    <h2>Learn Like A Girl</h2>

    <div class="social-feed--col">
      <div class="image" id="scol-0">
        <div class="play-bttn"><?php echo file_get_contents($GLOBALS['url']."/assets/play-bttn.svg"); ?></div>
      </div>
      <h3>History</h3>
      <h4>Mcbee Plaid</h4>
      <p>sedut perspiciatis unde omnis iste natus.</p>
    </div>
  </div>

</div>

<?php get_footer();
