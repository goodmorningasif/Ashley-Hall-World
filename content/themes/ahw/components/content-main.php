<?php
  /** 
  * Feeds-main => for content section for images and video
  *
  * NOTE: use inlcude(locate_template( 'file.php' )) 
  * instead of get_template_file( 'file.php' ) to pass
  * along variables from outter scope
  */
?>
<?php if ( $GLOBALS["width"] ){ ?>
  <?php if ( intval($GLOBALS["width"]) > 1280  ) { ?>

    <?php if ( $count%2 !== 0 ) { ?>
      <h3><?php echo mb_strimwidth(get_the_title(), 0, 35, '...'); ?></h3>
      <p><?php echo mb_strimwidth(get_the_content(), 0, 140, '...'); ?></p>
    <?php } else { ?>
      <h3><?php echo mb_strimwidth(get_the_title(), 0, 14, '...'); ?></h3>
      <p><?php echo mb_strimwidth(get_the_content(), 0, 50, '...'); ?></p>
    <?php } ?>

  <?php } elseif (intval($GLOBALS["width"]) <= 1280 && intval($GLOBALS["width"]) > 800 )  { ?>

    <?php if ( $count%2 !== 0 ) { ?>
      <?php if ( intval($GLOBALS["width"]) > 1100 ) { ?>
        <h3><?php echo mb_strimwidth(get_the_title(), 0, 60, '...'); ?></h3>
        <p><?php echo mb_strimwidth(get_the_content(), 0, 250, '...'); ?></p>
      <?php } else { ?>
        <h3><?php echo mb_strimwidth(get_the_title(), 0, 35, '...'); ?></h3>
        <p><?php echo mb_strimwidth(get_the_content(), 0, 140, '...'); ?></p>
      <?php } ?>  
    <?php } else { ?>
      <?php if ( intval($GLOBALS["width"]) > 1100 ) { ?>
        <h3><?php echo mb_strimwidth(get_the_title(), 0, 15, '...'); ?></h3>
        <p><?php echo mb_strimwidth(get_the_content(), 0, 60, '...'); ?></p>
      <?php } else { ?>
        <h3><?php echo mb_strimwidth(get_the_title(), 0, 11, '...'); ?></h3>
        <p><?php echo mb_strimwidth(get_the_content(), 0, 35, '...'); ?></p>       
      <?php } ?>
    <?php } ?>

  <?php } elseif (intval($GLOBALS["width"]) <= 800 )  { ?>

    <h3><?php echo mb_strimwidth(get_the_title(), 0, 25, '...'); ?></h3>
    <p><?php echo mb_strimwidth(get_the_content(), 0, 100, '...'); ?></p>

  <?php } ?>
<?php } ?>