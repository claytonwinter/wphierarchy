<?php
if( ! is_active_sidebar( 'footer-sidebar' ) ) {
  return;
}
?>

<div class="widget-area" role="complementary">

  <?php dynamic_sidebar( 'footer-sidebar' ); ?>

</div>

