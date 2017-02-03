<?php
  /** 
  * Feeds-main => for content section for Quotes
  *
  * NOTE: use inlcude(locate_template( 'file.php' )) 
  * instead of get_template_file( 'file.php' ) to pass
  * along variables from outter scope
  */
?>
<?php if ( $GLOBALS["width"] ) { ?>
  <?php if ( intval($GLOBALS["width"]) > 1280) { ?>

    <?php if ( $count%2 !== 0 ) { ?>
      <p><?php echo mb_strimwidth(get_the_content(), 0, 150, '...'); ?></p>
    <?php } else { ?>
      <p><?php echo mb_strimwidth(get_the_content(), 0, 80, '...'); ?></p>
    <?php } ?>

  <?php } elseif (intval($GLOBALS["width"]) <= 1280 && intval($GLOBALS["width"]) > 800 )  { ?>

    <?php if ( $count%2 !== 0 ) { ?>
      <?php if ( intval($GLOBALS["width"]) > 1100 ) { ?>
        <p><?php echo mb_strimwidth(get_the_content(), 0, 320, '...'); ?></p>
      <?php } elseif ( intval($GLOBALS["width"]) <= 1100 && intval($GLOBALS["width"]) > 1000 ) { ?>
        <p><?php echo mb_strimwidth(get_the_content(), 0, 260, '...'); ?></p>
      <?php } elseif ( intval($GLOBALS["width"]) <= 1000 && intval($GLOBALS["width"]) > 900 ) { ?>
        <p><?php echo mb_strimwidth(get_the_content(), 0, 180, '...'); ?></p>
      <?php } else { ?>
        <p><?php echo mb_strimwidth(get_the_content(), 0, 150, '...'); ?></p>
      <?php } ?>
    <?php } else { ?>
      <?php if ( intval($GLOBALS["width"]) > 1100 ) { ?> 
        <p><?php echo mb_strimwidth(get_the_content(), 0, 140, '...'); ?></p>
      <?php } elseif ( intval($GLOBALS["width"]) <= 1100 && intval($GLOBALS["width"]) > 1000 ) { ?>
        <p><?php echo mb_strimwidth(get_the_content(), 0, 120, '...'); ?></p>
      <?php } else {?> 
        <p><?php echo mb_strimwidth(get_the_content(), 0, 70, '...'); ?></p>
      <?php } ?>
    <?php } ?>

  <?php } elseif (intval($GLOBALS["width"]) <= 800 )  { ?>

    <p><?php echo mb_strimwidth(get_the_content(), 0, 150, '...'); ?></p>

  <?php } ?> 
<?php } ?> 