<?php get_header(); ?>

	<!--start CONTAINER-->
	<div id="container">
		
		<?php get_sidebar(); ?>	

		<!--start content-->
		<div id="content">

				<!-- Start the Loop. -->
				 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				
				  <div class="article">
					 <!-- Display the Title as a link to the Post's permalink. -->
					 <h2>
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
							<?php the_title(); ?>
						</a>
					 </h2>

<div class="top-span">
<span class="date"><?php the_time('d.m.Y') ?> von <strong><?php the_author_posts_link(); ?></strong></span>
<div style="padding-top:2px;"><span class="tags"><?php the_tags(); ?></span></div>
</div>

                                         <!-- Display the Post's Content in a div box. -->
					 <div class="entry">
					   <span style="float:left;padding-right:16px;padding-bottom:3px;">

<!-- Thumbnail auf großes Bild verlinken -->
<?php 
 if ( has_post_thumbnail()) {
   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
   echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
   the_post_thumbnail('thumbnail');
   echo '</a>';
 }
 ?>

					   </span>
					   <?php the_content(); ?>


<!-- Google +1-Schaltfläche -->
<div style="margin:15px 10px 5px;">
<g:plusone annotation="inline" width="165"></g:plusone>


<!-- FB Button  -->
<div class="fb-like" data-send="false" data-width="160" data-show-faces="true"></div>
<script type="text/javascript">_ga.trackFacebook();</script>
	

<a href="http://twitter.com/home?status=<?php the_permalink(); ?>" target="blank"><img src="http://blog.maxdome.de/wp-content/uploads/th_twitter.gif" border="0" alt="Auf Twitter teilen">Auf Twitter teilen</a>
</div>


					 </div>
				 </div> <!-- closes the first div box -->
				


				<!-- video custom field  -->
			    <?php the_meta(); ?>


<!-- social media buttons  -->


<!-- <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="blank"><img src="http://blog.maxdome.de/wp-content/uploads/th_facebook.gif" border="0" alt="Auf Facebook teilen">Auf Facebook teilen</a></span> -->


<!-- facebook kommentare -->
<div id="fb-root"></div><script type="text/javascript">_ga.trackFacebook();</script><fb:comments href="<?php the_permalink(); ?>" num_posts="0" width="557"></fb:comments>


				
				<div class="kommentareCont">
					<?php comments_template(); // Get wp-comments.php template ?>
				</div>

				 <!-- Stop The Loop (but note the "else:" - see next line). -->
				 <?php endwhile; else: ?>
				
					 <p>Keine passenden Artikel gefunden.</p>
				
				 <!-- REALLY stop The Loop. -->
				 <?php endif; ?>

			
		</div>
		<!--end content-->	


		<?php include('sidebar2.php'); ?>
	
	</div>
	<!--end CONTAINER-->	
							
</div><!-- end wrapper -->

<?php get_footer(); ?>	

</body>
</html>
