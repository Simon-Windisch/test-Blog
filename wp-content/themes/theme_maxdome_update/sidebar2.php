		<!--start right sidebar-->
		<div id="sidebar2">
		<!--start box-->
			<div class="mediaCont">
								
				
<!--				<ul class="media">
<li><a href="http://de-de.facebook.com/maxdome" target="blank"><img src="http://blog.maxdome.de/wp-content/uploads/facebook.png" alt="Folge maxdome auf Facebook" /></a></li><li><a href="http://twitter.com/maxdome" target="blank"><img src="http://blog.maxdome.de/wp-content/uploads/twitter.png" alt="Folge maxdome auf Twitter" /></a></li><li><a href="http://blog.maxdome.de/feed"><img src="http://blog.maxdome.de/wp-content/uploads/rss.png" alt="RSS Feed" /></a></li>
				</ul>
-->



			</div>
			<?php
				// left sidebar .widget-area
				if ( is_active_sidebar( 'sidebar2-widget-area' ) ) : ?>
					<div class="widget-area" >
						<ul class="sidebar2ul">
							<?php dynamic_sidebar( 'sidebar2-widget-area' ); ?>
						</ul>
					</div><!-- #left sidebar .widget-area -->
			
			<?php endif; ?>	
			&nbsp;		

<div class="boxTitle">Auf dem Laufenden bleiben</div>
<!--facebook plugin -->
<div class="fb-like-box" data-href="http://www.facebook.com/maxdome" data-width="199" data-show-faces="true" data-stream="true" data-header="false"></div>


		<!--end right sidebar-->