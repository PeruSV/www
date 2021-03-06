<?php
/**
 * The main template file. Used for the blog page.
 *
 */

get_header();?>

<div class="row">

	<div id="primary" class="content-area">

		<div class="large-8 columns">

			<main id="main" class="site-main" role="main">
			<?php query_posts('category_name=Main');?>			
			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php 
						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php gateway_paging_nav(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

			</main><!-- #main -->

		</div><!-- .large-8 -->

	</div><!-- #primary -->

	<div class="large-3 large-offset-1 columns">

		<?php get_sidebar(); ?>
		
	</div><!-- .large-3 -->

</div><!-- .row -->

<?php get_footer(); ?>