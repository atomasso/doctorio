<?php get_header(); ?>

  <div class="main-wrap " id="section-home">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content' ); ?>

		<?php endwhile; else : ?>
			
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
			
		<p>Template: index.php</p>

	</div>
	
<?php get_footer(); ?>