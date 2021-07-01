<?php get_header(); ?>
<div class="eight columns">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<!-- Begin the first article -->
		<article>
			<!-- Display the Title as a link to the Post's permalink. -->
			<h2>
				<?php the_title(); ?>
			</h2>
			<h5><?php the_field('author'); ?></h5>
			<div class="entry">
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile; endif; ?>
</div>	
<div class="four columns">
	<img src="<?php the_field('book_image'); ?>">
	<a class="button radius feature" href="https://patwilson.local/shop">Buy This Book</a>
</div>
<?php get_footer(); ?>