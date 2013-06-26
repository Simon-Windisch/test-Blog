<!--start FOOTER-->
<div id="footer">
	
	<!--footer-bloc-->
		<div class="footer-bloc">
			<h3 class="widget-title">Seiten:</h3>
			<ul class="footer-bloc">
				<?php wp_nav_menu( array('items_wrap' => '%3$s', 'theme_location' => 'footer', 'container' => 'false' ) ); ?>
			</ul>

		</div>
	<!--end footer-bloc-->
	
	<!--footer-content-->
	<div id="footer-content">
		<?php
			// A second sidebar for widgets, just because.
			if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
	
				<div id="secondary" class="widget-area" >
					<ul class="xoxo">
						<?php dynamic_sidebar( 'footer-widget-area' ); ?>
					</ul>
				</div><!-- #secondary .widget-area -->
		
		<?php endif; ?>	
		
	</div>
	<!--end footer-content-->

	
</div>
<!--end FOOTER-->