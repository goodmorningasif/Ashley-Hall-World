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
<footer id="footer">
  <header>
    <h2>Headline Goes Here</h2>
    <p>Curabitur tempor tortor nec dapibus lobortis. Sed maximus ipsum vestibulum odio luctus sodales. Vivamus sodales finibus metus ut molestie.</p>
    <div id='logo-footer'>
      <?php echo file_get_contents($GLOBALS['url']."/assets/logo-footer.svg"); ?>
    </div>
  </header> 
  

  <section id="footer--fineprint">
    <div id="footer--social">
      <ul>
        <li class="social" id="twit">
          <a href="https://www.facebook.com/ashleyhall.pqv" alt="twitter">
            <?php echo file_get_contents($GLOBALS['url']."/assets/twit.svg"); ?>
          </a>
        </li>
        <li class="social" id="face">
          <a href="https://twitter.com/ashleyhall_pqv" alt="facebook">
            <?php echo file_get_contents($GLOBALS['url']."/assets/face.svg"); ?>
          </a>
        </li>
        <li class="social" id="insta">
          <a href="https://instagram.com/ashleyhall_pqv/" alt="instagram">
            <?php echo file_get_contents($GLOBALS['url']."/assets/insta.svg"); ?>
          </a>
        </li>
        <li class="contact">
          Ashley Hall
        </li>
        <li class="contact">
          Contact
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