<?php
/**
 * Template Name: Archive template
 */
?>
<?php get_header(); ?>

		<section>

			<div class="container">
				<div class="grid">
					<?php get_template_part( 'inc/gridpress/archive/_archive-views' ); ?>
				</div>
			</div>

		</section>

		<?php get_sidebar(); ?><!-- optional -->

<?php get_footer(); ?>
