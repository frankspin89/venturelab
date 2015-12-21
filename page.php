<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */
get_header(); ?>
	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<?php if( have_rows('rows') ): ?>
			<?php while( have_rows('rows') ): the_row();
			$grid = get_sub_field('grid');
			?>
			<?php if($grid === "fullwidth") : ?>
				<div class="row fullwidth small-collapse content">
				<?php else: ?>
				<div class="row boxed content">
				<?php endif; ?>
				<?php if( have_rows('column') ): ?>
					<?php  while ( have_rows('column') ) : the_row(); ?>
						<?php if( get_row_layout() === 'slider' ): ?>
							<?php get_template_part( 'parts/layout/slider' ); ?>
						<?php endif; ?>
						<?php if( get_row_layout() === 'text' ): ?>
							<?php get_template_part( 'parts/layout/text' ); ?>
						<?php endif; ?>
					<?php endwhile; endif; ?>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
		</article>
	<?php endwhile;?>
	<?php do_action( 'foundationpress_after_content' ); ?>
</div>
<?php get_footer(); ?>
