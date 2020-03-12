<?php

if ( ! is_active_sidebar('gp-footer-widget-area') ){

	return;
}
?>

<div class="footer-widget">
<div class="container">
	<div class="row">
		<?php dynamic_sidebar( 'gp-footer-widget-area' ); ?>
	</div>
</div>
</div>