<?php get_header(); ?>

<div class="ten columns centered gallery">

	<!-- Start the Loop -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<!-- Begin the first div -->
		<div>
				
			<h2>
				<?php the_title(); ?>
			</h2>
			
			<!-- Display the Page's Content in a div box. -->
			<div class="entry">
				<?php $images = get_field('gallery');
				if( $images ): ?>
					<div class="row">
				        <ul>
				            <?php foreach( $images as $image ): ?>
				                <li>
				                   <a class="fancybox" rel="gallery"  href="<?php echo $image['url']; ?>" title="<?php echo $image['caption'] ?>"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
				                </li>
				            <?php endforeach; ?>
				        </ul>
					</div>
				<?php endif; ?>
			</div>
		
		</div>
		<!-- Closes the first div -->
	
	<!-- Stop The Loop (but note the "else:" - see next line). -->
	<?php endwhile;
		endif; ?>
	
</div>
		
<?php get_footer(); ?>