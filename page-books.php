<?php get_header(); ?>

<div class="ten columns centered">

	<!-- Start the Loop -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<!-- Begin the first div -->
		<div>
				
			<h2>
				<?php the_title(); ?>
			</h2>
			<div class="entry">
				<p>Looking to purchase a book? Visit the <a href="https://patwilson.local/shop">Shop</a></p>
				<hr/>
				<?php
						$args = array( 
						    'post_type' => array(    
						            'book'
						            ),
						     'order' => 'ASC'
						);
						
						$the_query = new WP_Query( $args );
						
						// The Loop
						if ( $the_query->have_posts() ) :
						while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						  <a href="<?php the_permalink(); ?>"><h3><?php the_title();  ?></h3></a>
						  	<div class="row">
						  		<div class="three columns">
										<a href="<?php the_permalink(); ?>">
						  				<img src="<?php the_field('book_image'); ?>">
										</a>
						  		</div>
						  		<div class="nine columns">
						  			<h5><?php the_field('author'); ?></h5>
						  			<?php the_excerpt(); ?>
						  		</div>
						  	</div>
						<?php 
						endwhile;
						endif;
						wp_reset_postdata(); ?>
			</div>
		
		</div>
		<!-- Closes the first div -->
	
	<!-- Stop The Loop (but note the "else:" - see next line). -->
	<?php endwhile; else: ?>
	
		<!-- The very first "if" tested to see if there were any Posts to -->
		<!-- display.  This "else" part tells what do if there weren't any. -->
		<div class="alert-box error">Sorry, the page you requested was not found</div>
	
	<!--End the loop -->
	<?php endif; ?>
	
</div>
		
<?php get_footer(); ?>