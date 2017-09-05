<?php
/**
 * The template for displaying all pages.
 *
 * @package inhabitent_Theme
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
          
      <div class='journal_post_text'>
        <div> 
          <p><?php inhabitent_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></p>
        </div>
        <a href="<?php echo get_post_permalink() ?>"><?php the_title(); ?></a>
      </div>    <!-- end of journal post text -->

      <div class='read_entry_button'>
        <a href='<?php echo get_post_permalink() ?>'>read entry</a>
      </div>
    </div>    <!-- end of indiv div -->

    <?php endforeach; wp_reset_postdata(); ?>
  </div>

  <h1> latest adventures </h1>

  <div class='frontpage_adventures'>
    <div class='adv_container'>
      <div class='adv_post_1'>
        <h4> getting back to nature in a canoe </h4>
        <div class='journal_readme_button'>
          <a href='#'>read more</a>
        </div>
      </div>

      <div class='adv_container2'>
        <div class='adv_post_2'>
          <h4> a night with friends at the beach </h4>
          <div class='journal_readme_button'>
            <a href='#'>read more</a>
          </div>
        </div>
        
        <div class='adv_post_3'>
          <h4> taking in the view at big mountain </h4>
          <div class='journal_readme_button'>
            <a href='#'>read more</a>
          </div>
        </div>
        
        <div class='adv_post_4'>
          <h4> star-gazing at the night sky </h4>
          <div class='journal_readme_button'>
            <a href='#'>read more</a>
          </div>
        </div> <!--end of post 4 -->
      </div><!-- end of class 2 adv post -->
    </div> <!-- end of adventure container -->

    <div class='more_adv_button'>
      <p>more adventures</p>
    </div>
  </div> <!-- end of adventure posts -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

