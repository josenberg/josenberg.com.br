<?php
/**
 * The template for displaying all single posts.
 *
 * @package Integer
 */

get_header(); ?>

<div id="main" class="site-main" role="main">

	<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php integer_post_navigation(); ?>
	<?php endwhile; ?>

</div><!-- #main -->

<?php get_footer();
