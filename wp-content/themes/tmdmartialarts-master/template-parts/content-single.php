<?php
/**
 * Template part for displaying single posts.
 *
 * @package TMD_Martial_Arts_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php TMD_Martial_Arts_posted_on(); ?> / <?php TMD_Martial_Arts_comment_count(); ?> / <?php TMD_Martial_Arts_posted_by(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php TMD_Martial_Arts_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
