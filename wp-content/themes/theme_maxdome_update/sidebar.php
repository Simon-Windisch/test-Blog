		<!--start left sidebar-->
		<div id="sidebar1">
			
			
			

			<?php
				// left sidebar .widget-area
				if ( is_active_sidebar( 'sidebar1-widget-area' ) ) : ?>
					<div class="widget-area" >
						<ul class="sidebar1ul">
							<?php dynamic_sidebar( 'sidebar1-widget-area' ); ?>
						</ul>
					</div><!-- #left sidebar .widget-area -->
			
			<?php endif; ?>	
			&nbsp;	
		</div>
	    <!--end left sidebar-->
