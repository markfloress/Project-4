<?php
/**
 * The template for displaying archive pages.
 *
 * @package inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );    //add filter
				?>
				<div class='frontpage_product_types'>
          <?php
            $args = array( 'post_type' => 'product-type');
            $four_product_types = get_terms( $args );?>
        
          <?php foreach ( $four_product_types as $product_type ) : setup_postdata( $product_type ); ?>

          <div class='indiv_product_type'>
            <a href='<?php echo esc_url( home_url( '/product-type/' . strtolower($product_type->name) ) )?>'> <?php echo $product_type->name?></a>
          </div>

          <?php endforeach; wp_reset_postdata(); ?>
        </div>
			</div>
			
      </header><!-- .page-header -->
      




<div class='products_grid'>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<article id='post-<?php the_ID();?>' <?php post_class(); ?>>
		<div class='entry-header'>
			<?php if ( has_post_thumbnail() ) : ?>
				<a href='<?php the_permalink(); ?>'>
					<?php the_post_thumbnail ('large');?>
				</a>
			<?php endif; ?>
		</div>

		<div class='entry-content'>
			<div class='product_info'>
				<?php the_title('<h2 class="entry-title">' , '<span class="dots">...............................</span></h2>');?>
				<p><?php echo CFS()->get ('price');?></p>
			</div>
		</div>
	</article>


			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

</div>
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
