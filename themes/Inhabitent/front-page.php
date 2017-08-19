<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <section class='hero_banner'> 
        <h2 class='site-description'>Hero Banner</h2>
        <img src='<?php echo get_stylesheet_directory_uri();?>/assets/logos/inhabitent-logo-full.svg'>
      </section>

      <div class='shop_stuff'> 
        <h1> shop stuff </h1>

        <div class='frontpage_product_types'>
          <?php
            $args = array( 'post_type' => 'product-type');
            $four_product_types = get_terms( $args );?>
        
          <?php foreach ( $four_product_types as $product_type ) : setup_postdata( $product_type ); ?>

          <div class='indiv_product_type'>
            <img class='product_type_icon' src='<?php echo get_stylesheet_directory_uri() . '/assets/product-type-icons/' . strtolower($product_type->name) . '.svg';?>'>
            <p><?php echo $product_type->description?></p>
            <a href='<?php echo esc_url( home_url( '/product-type/' . strtolower($product_type->name) ) )?>'> <?php echo $product_type->name . ' stuff'?></a>
          </div>

          <?php endforeach; wp_reset_postdata(); ?>
        </div>
      </div>

      <h1> inhabitent journal </h1>
                        
  <div class='frontpage_journal_container'>
    <?php
    $args = array( 'post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 3, 'orderby' => 'date');
    $journal_posts = get_posts( $args );
    ?>
    <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
      <div class='indiv_journal_post'>
          <?php  if (has_post_thumbnail() ):?>
          <?php the_post_thumbnail('large')?>
          <?php endif; ?>

        <div> 
          <p><?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></p>
        </div>
        <a href="<? echo get_post_permalink() ?>"><?php the_title(); ?></a>
      </div>

    <?php endforeach; wp_reset_postdata(); ?>
  </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

