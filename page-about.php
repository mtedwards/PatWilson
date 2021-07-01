<?php get_header(); ?>

<div class="ten columns centered">

	<!-- Start the Loop -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<!-- Begin the first div -->
		<div>
				
			
			<!-- Display the Page's Content in a div box. -->
			<div class="entry">
				<dl class="nice contained tabs">
				  <dd><a href="#nice1" class="active">About</a></dd>
				  <dd><a href="#nice2">CV</a></dd>
				  <dd><a href="#nice3">Professional Summary</a></dd>
				</dl>
				
				<ul class="nice tabs-content contained">
				  <li class="active" id="nice1Tab">
				  	<h2>
					  	<?php the_title(); ?>
					</h2>
				  	<?php the_content(); ?>
				  </li>
				  <li id="nice2Tab">
				  	<h2>
					  	CV
					</h2>
				  	<div class="panel">
				  		<h4>Download my CV</h4>
				  		<a href="<?php the_field('cv_file'); ?>">CV</a>
				  	</div>
				  	<?php the_field('cv'); ?>
				  </li>
				  <li id="nice3Tab">
				  	<h2>
					  	Professional Summary
					</h2>
				  	<div class="panel">
				  		<h4>Download my Professional Summary</h4>
				  		<a href="<?php the_field('professional_summary_file'); ?>">CV</a>
				  	</div>
				  	<?php the_field('professional_summary'); ?>
				  </li>
				</ul>
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