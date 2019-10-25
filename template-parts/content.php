<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package game
 */

?>

<div id="post-<?php the_ID(); ?>" class="section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section__header">
					<?php the_title( '<h2>', '</h2>' ); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-6">
				<div class="section__image">
					<?php game_post_thumbnail(); ?>
				</div>
			</div>
			<div class="col-12 col-md-6">
				<div class="section__text">
					<?php
						the_content( sprintf(
							wp_kses(
								__( 'game' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						) );

						wp_link_pages( array(
							'before' => '<div>' . esc_html__( 'Pages:', 'game' ),
							'after'  => '</div>',
						) );
					?>
				</div>
			</div>
		</div>
	</div>
</div>