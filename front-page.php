<?php get_header(); ?>

<div class="twelve columns">
	<div class="row">
		<div class="twelve columns">
			<div class="row welcome">
				<div class="eight columns">
					<div class="welcome-quote">
						<h2><?php the_field('welcome_text'); ?></h2>
						<h3>- <?php the_field('citation'); ?></h3>
					</div>
				</div>
				<div class="four columns">
					<img src="<?php the_field('welcome_image'); ?>">
				</div>
			</div>
			<div class="row latest-news">
				<div class="panel">
					<h4>Latest News:</h4>
					<?php the_field('latest_news'); ?>
				</div>
			</div>
			<?php $boxes = get_field('boxes'); ?>
			<?php if ( $boxes ) {?>
				<div class="boxes row">
				<?php foreach( $boxes as $box ) {?>					
					<div class="four columns">
						<h3><?php echo $box['heading']; ?></h3>
						<p><?php echo $box['text']; ?></p>		
					</div>
				<?php } ?>		
				</div>
				<div class="boxes row">
				<?php foreach( $boxes as $box ) {?>	
						<div class="four columns">
							<a class="right" href="<?php echo $box['link']; ?>">Find out more</a>
						</div>
				<?php } ?>
				</div>
			<?php } ?>
		</div>
	</div>
		
</div> <!-- end twelve -->

<?php get_footer(); ?>