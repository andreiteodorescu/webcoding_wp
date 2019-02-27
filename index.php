<?php get_header(); ?>
<main>
	<div class="front valign">
		<div class="intro">
			<p class="entrance-1">Hello world :&#41;</p>
			<h1 class="intro-title">My name is Andrei Teodorescu.</h1>
			<h2 class="intro-undertitle">
				I am a Front-End UX Web Developer from Bucharest. <br>
				The words that best describe me when it comes to work are: quality, details, speed, performance, accessibility, optimization, resourceful.
			</h2>
			<p class="scroll-down">View portfolio <span></span></p>
		</div>
	</div>
</main>		
<ul class="portfolio">
	<?php
		$portfolio = new WP_Query();
		$portfolio->query('cat=2&order=ASC');
	?>
	<?php $count = 1; ?>
	<?php while ($portfolio->have_posts()) : $portfolio->the_post(); ?>
		<li class="portfolio-item">
			
			<a class="portfolio-image-wrap" id="demo<?php echo $count ?>" href="#project<?php echo $count ?>" rel="nofollow">
				<?php if ( get_post_meta( get_the_ID(), 'logo', true ) ) : ?>
					<img src="<?php echo esc_url( get_post_meta( get_the_ID(), 'logo', true ) ); ?>" alt="<?php the_title(); ?>">
				<?php endif; ?>
			</a>

			<h2 class="portfolio-item-title"><?php the_title(); ?></h2>

			<div class="project-detail" id="project<?php echo $count ?>">
				<div class="btn-close-modal close-project<?php echo $count ?>"> 
					<img class="closebt" src="<?php bloginfo('template_directory'); ?>/images/closebt.svg" alt="Close">
				</div>
				<div class="modal-content">
					<img class="preview-image" src="<?php bloginfo('template_directory'); ?>/images/trans.gif" data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
					<div class="modal-content-text">
						<h3 class="portfolio-item-detailtitle"><?php the_title(); ?></h3>
						<?php if ( get_post_meta( $post->ID, 'year', true ) ) : ?>
							<p class="portfolio-item-txt">Project Year: <?php echo get_post_meta( $post->ID, 'year', true); ?></p>
						<?php endif; ?>
						<?php if ( get_post_meta( $post->ID, 'url', true ) ) : ?>
							<p class="portfolio-item-txturl">Project URL: <a href="<?php echo get_post_meta( $post->ID, 'url', true); ?>" class="portfolio-item-url" target="_blank"><?php echo get_post_meta( $post->ID, 'url', true); ?></a></p>
						<?php endif; ?>
						<p class="portfolio-item-txt">Technologies used: <?php the_tags('', ', ', ''); ?></p>
					</div>
				</div>
			</div>

		</li>
		<?php $count++; ?>
	<?php endwhile; ?>
</ul>
	
<?php get_footer(); ?>