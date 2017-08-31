<?php
/**
 * Template part for displaying single posts.
 *
 * @package inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class='post_container'>
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?>

			<div class='content_title'><?php the_title( '<h2 class="entry-title">', '</h2>' ); ?></div>

			<div class="entry-meta">
				<?php inhabitent_posted_on(); ?> / <?php inhabitent_comment_count(); ?> / <?php inhabitent_posted_by(); ?>
			</div><!-- .entry-meta -->
		</div>
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
		<?php inhabitent_entry_footer(); ?>
	</footer><!-- .entry-footer -->

	<div class='post_social'>
		<div class='social_fb'><a href=''><i class="fa fa-facebook" aria-hidden="true"></i> like</a></div>
		<div class='social_tweet'><a href=''><i class="fa fa-twitter" aria-hidden="true"></i> tweet</a></div>
		<div class='social_pin'><a href=''><i class="fa fa-pinterest" aria-hidden="true"></i> pin</a></div>
	</div>
</article><!-- #post-## -->
