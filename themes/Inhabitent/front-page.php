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
      </section>

      <div class='frontpage_product_types'>
        <?php
          $args = array( 'post_type' => 'product-type');
          $four_product_types = get_terms( $args );?>
      
        <?php foreach ( $four_product_types as $product_type ) : setup_postdata( $product_type ); ?>

        <img src='<?php echo get_stylesheet_directory_uri() . '/assets/product-type-icons/' . strtolower($product_type->name) . '.svg';?>'>
        <?php echo $product_type->description?>
        <!-- add button with same path as product-name add "stuff" with dot notation-->
        <?php echo $product_type->name?>

        <?php endforeach; wp_reset_postdata(); ?>
      </div>


                        

                        <!-- ADD ALL TITLE WITH H1 TAGS -->












                        <div>
                              <?php
                          $args = array( 'post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 3, 'orderby' => 'date');
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
                            <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
                            </div>
                            <a href="<? echo get_post_permalink() ?>"><?php the_title(); ?></a>
                            <!-- add buttom and do same as ^ permalink -->
                            </div>

                        <?php endforeach; wp_reset_postdata(); ?>
                        </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

