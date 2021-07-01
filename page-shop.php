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
				
				<?php
						$args = array( 
						    'post_type' => array(    
						            'download'
						            ),
						     'order' => 'ASC'
						);
						
						$the_query = new WP_Query( $args );
						
						// The Loop
						if ( $the_query->have_posts() ) :
						while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						  <h4 itemprop="name" class="edd_download_title">
              	<a title="<?php the_title_attribute(); ?>" itemprop="url" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h4>
						  	<div class="row">
						  		<div class="three columns">
						  			<?php if ( function_exists( 'has_post_thumbnail' ) && has_post_thumbnail( get_the_ID() ) ) : ?>
                    	<div class="edd_download_image">
                    		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    			<?php echo get_the_post_thumbnail( get_the_ID(), 'medium' ); ?>
                    		</a>
                    	</div>
                    <?php endif; ?>
						  		</div>
						  		<div class="nine columns">
						  			<?php the_content(); ?>
						  			<?php if ( ! edd_has_variable_prices( get_the_ID() ) ) : ?>
                    	<div itemprop="price" class="edd_price">
                    		<?php edd_price( get_the_ID() ); ?>
                    	</div>
                    <?php endif; ?>
                    <div class="edd_download_buy_button">
                    	<?php echo edd_get_purchase_link( array( 'download_id' => get_the_ID() ) ); ?>
                    </div>
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