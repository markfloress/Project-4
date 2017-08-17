<?php
/**
* Template Name: Shop Page
*
* @package Inhabitent_Theme
*/

get_header(); ?>

<div>
			<?php
   $args = array( 'product_type' => 'product', 'order' => 'DESC');
   $product_types = get_posts( $args );
?>
<?php foreach ( $product_types as $page ) : setup_postdata( $page ); ?>
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

<?php get_footer(); ?>