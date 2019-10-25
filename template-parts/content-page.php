<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package game
 */

?>

<!-- INDHOLDET I MIN PAGE.PHP -->
<div id="post-<?php the_ID(); ?>" class="section">
<div class="container">
		<div class="row">
			<div class="col-12">
	<div class="section__header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</div>

	<div class="section__image">
		<?php game_post_thumbnail(); ?>
	</div>

	<div class="section__text">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'game' ),
			'after'  => '</div>',
		) );
		?>
	</div>

	<?php if ( get_edit_post_link() ) : ?>

		<footer>
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'game' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer>
	<?php endif; ?>
		</div>
		</div>
		</div>
</div>
<?php the_ID(); ?>
