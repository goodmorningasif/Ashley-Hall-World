<?php
/**
 * Footer
 *
 * Contans footer assets.
 *
 * @link https://github.com/sdco-partners/Ashley-Hall-World
 *
 * @package WordPress
 * @subpackage ahw
 * @since 1.0
 * @version 1.0
 */

?>

<!-- ====  Section: Footer  ==== -->
<footer>
  <header>
    <h2><?php echo get_field('footer_headline', 150); ?></h2>
    <p><?php echo the_field('footer_bio', 150); ?></p>
    <div id='logo-footer'>
      <a href="http://www.ashleyhall.org" target="_blank" alt="Ashley Hall"><?php echo file_get_contents($GLOBALS['url']."/assets/logo-footer.svg"); ?></a>
    </div>
  </header> 
  

  <section id="footer--fineprint">
    <div id="footer--social">
      <ul>
        <?php if ( get_field('toggle_twitter', 150) ) { ?>
          <li class="social" id="twit">
            <a href="<?php echo get_field('twitter_url', 150); ?>" target="_blank" alt="twitter">
              <?php echo file_get_contents($GLOBALS['url']."/assets/twit.svg"); ?>
            </a>
          </li>
        <?php } ?> 
        <?php if ( get_field('toggle_facebook', 150) ) { ?>
          <li class="social" id="face">
            <a href="<?php echo get_field('facebook_url', 150); ?>" target="_blank" alt="facebook">
              <?php echo file_get_contents($GLOBALS['url']."/assets/face.svg"); ?>
            </a>
          </li>
        <?php } ?>
        <?php if ( get_field('toggle_instagram', 150) ) { ?>
          <li class="social" id="insta">
            <a href="<?php echo get_field('instagram_url', 150); ?>" target="_blank" alt="instagram">
              <?php echo file_get_contents($GLOBALS['url']."/assets/insta.svg"); ?>
            </a>
          </li>
        <?php } ?>
        <li class="contact">
          <a href="http://www.ashleyhall.org/" target="_blank" alt="Ashley Hall">Ashley Hall</a>
        </li>
        <li class="contact">
          <a href="http://www.ashleyhall.org/contact-us/" target="_blank" alt="Contact Ashley Hall">Contact</a>
        </li>
      </ul>
    </div>
    <div id="footer--copyright">
      <ul>
        <li>&copy; Ashley Hall <?php echo date('Y'); ?>. All Rights Reserverd.</li>
      </ul>
    </div>

  </section>
</footer>

</body><!-- end -->
</html>

<?php wp_footer(); ?>