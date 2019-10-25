<?php
// Footer widgets
?>
<div id="footer-widget-area" role="complementary">
<?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
 
<?php dynamic_sidebar( 'footer-sidebar-area' ); ?>
<?php endif; ?>
</div>