<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<div>
			<?php
   $args = array( 'post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 4, 'orderby' => 'date');
   $journal_posts = get_posts( $args );
?>
<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
<div>
  <div>
   <?php  if (has_post_thumbnail() ):?>
   <?php the_post_thumbnail('medium')?>
   <?php endif; ?>
   </div>

   <div> 
     <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
     </div>
     <a href="<? echo get_post_permalink() ?>"><?php the_title(); ?></a>
     </div>

<?php endforeach; wp_reset_postdata(); ?>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

