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

					<!-- Display the Post's Content in a div box. -->
					 <div class="entry">
					   <?php the_content(); ?>
					 </div>

				 </div> <!-- closes the first div box -->
				

				<!-- video custom field  -->
			    <?php the_meta(); ?>


				 <!-- Stop The Loop (but note the "else:" - see next line). -->
				 <?php endwhile; else: ?>
				
					 <p>Sorry, no posts matched your criteria.</p>
				
				 <!-- REALLY stop The Loop. -->
				 <?php endif; ?>

			
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
