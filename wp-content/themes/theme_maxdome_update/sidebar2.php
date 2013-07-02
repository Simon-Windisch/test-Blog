		<!--start right sidebar-->
		<div id="sidebar2">
            <div class="widget-area" >
                <ul class="sidebar2ul">
		<!--start box-->
            <!--
                <li class="mediaCont">
                    <ul class="media">
                        <li>
                            <a href="http://de-de.facebook.com/maxdome" target="blank">
                                <img src="http://blog.maxdome.de/wp-content/uploads/facebook.png" alt="Folge maxdome auf Facebook" />
                            </a>
                        </li>
                        <li>
                            <a href="http://twitter.com/maxdome" target="blank">
                                <img src="http://blog.maxdome.de/wp-content/uploads/twitter.png" alt="Folge maxdome auf Twitter" />
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.maxdome.de/feed"><img src="http://blog.maxdome.de/wp-content/uploads/rss.png" alt="RSS Feed" /></a>
                        </li>
                    </ul>
                </li>
            -->
			<?php
				// left sidebar .widget-area
				if ( is_active_sidebar( 'sidebar2-widget-area' ) ) : ?>
							<?php dynamic_sidebar( 'sidebar2-widget-area' ); ?>
			
			<?php endif; ?>

                    <!--facebook plugin -->
                    <li class="facebook-plugin">
                        <h3 class="boxTitle">Auf dem Laufenden bleiben</h3>
                        <div class="fb-like-box" data-href="http://www.facebook.com/maxdome" data-width="195" data-show-faces="true" data-stream="true" data-header="false"  data-show-border="false"></div>
                    </li>
                </ul>
            </div>
        </div><!-- #left sidebar .widget-area -->
		<!--end right sidebar-->