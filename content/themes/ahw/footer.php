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
    <h2>Headline Goes Here</h2>
    <p><?php echo the_field('footer_bio', 150); ?></p>
    <div id='logo-footer'>
      <a href="http://ashleyhall.org" target="_blank" alt="Ashley Hall"><?php echo file_get_contents($GLOBALS['url']."/assets/logo-footer.svg"); ?></a>
    </div>
  </header> 
  

  <section id="footer--fineprint">
    <div id="footer--social">
      <ul>
        <li class="social" id="twit">
          <a href="https://www.facebook.com/ashleyhall.pqv" target="_blank" alt="twitter">
            <?php echo file_get_contents($GLOBALS['url']."/assets/twit.svg"); ?>
          </a>
        </li>
        <li class="social" id="face">
          <a href="https://twitter.com/ashleyhall_pqv" target="_blank" alt="facebook">
            <?php echo file_get_contents($GLOBALS['url']."/assets/face.svg"); ?>
          </a>
        </li>
        <li class="social" id="insta">
          <a href="https://instagram.com/ashleyhall_pqv/" target="_blank" alt="instagram">
            <?php echo file_get_contents($GLOBALS['url']."/assets/insta.svg"); ?>
          </a>
        </li>
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
        <li>&copy; Ashley Hall 2016. All Rights Reserverd.</li>
      </ul>
    </div>

  </section>
</footer>

</body><!-- end -->
</html>

<?php wp_footer(); ?>