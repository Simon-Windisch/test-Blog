<?php get_header(); ?>

	<!--start CONTAINER-->
	<div id="container">
		
		<?php get_sidebar(); ?>	

		<!--start content-->
		<div id="content">


			<!-- Start the Loop. -->
				 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				
				  <div class="post">
					 <h2>
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
							<?php the_title(); ?>
						</a>
					 </h2>
				
<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author -->
<div class="top-span">
<span class="date"><?php the_time('d.m.Y') ?> von <span class="author"><?php the_author_posts_link(); ?></span></span>
<span class="tags"><?php the_tags(); ?></span>
</div>

					 <!-- Display the Title as a link to the Post's permalink. -->

					<?php 
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					?>
					<div class="image">	
						<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a> 
					</div>
					<?php  
					} 
					?>
				
					 <!-- Display the Post's Content in a div box. -->
					 <div class="entry">
					   <?php the_excerpt(); ?>

						<span class="read-more">
							<a href="<?php the_permalink() ?>">Weiter lesen</a>
						</span>
					 </div>
				
				 </div> <!-- closes the first div box -->
				
				
				 <!-- Stop The Loop (but note the "else:" - see next line). -->
				 <?php endwhile; else: ?>

					<?php printf( __( 'Suche nach: %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?><br /><br />
				
					 Keine Ergebnisse gefunden.<br /><br />
<div align="center">
<img src="http://blog.maxdome.de/wp-content/uploads/404-suche.jpg" alt="Keine Ergebnisse gefunden.">	
</div>
				 <!-- REALLY stop The Loop. -->
				 <?php endif; ?>


				 <div class="pagination">	
				 <?php kriesi_pagination(); ?>
				 </div>
			
		</div>
		<!--end content-->	


		<?php include('sidebar2.php'); ?>
	
	</div>
	<!--end CONTAINER-->	
							
</div><!-- end wrapper -->

<?php get_footer(); ?>
</div><!-- end Page Content -->

</body>
</html>