<?php get_header(); ?>

<div class="ten columns centered">

	<!-- Start the Loop -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<!-- Begin the first div -->
		<div>
				
			<h2>
				<?php the_title(); ?>
			</h2>
			
			<!-- Display the Page's Content in a div box. -->
			<div class="entry papers">
				<figure class="wp-caption alignright feature-caption">
					<?php the_post_thumbnail('medium', array('class' => 'alignright')); ?>
					<figcaption><small><?php the_post_thumbnail_caption(); ?></small></figcaption>
				</figure>
				
				<?php $paper_section = get_field('paper_section'); ?>
				<?php foreach( $paper_section as $papers ): ?>
					<h4><?php echo $papers['title']; ?></h4>
					<ul>
						<?php foreach($papers['papers'] as $paper ): ?>
							<li>
								<p><?php echo $paper['description']; ?></p>
								<?php if($paper['pdf']): ?>
									<p class="download">Download <a href="<?php echo $paper['pdf']; ?>" target="_blank">PDF</a></p>
								<?php endif; ?>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endforeach; ?>
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