<!-- same as archive-product page -->

DO/ ETC single page with 4 products

                        <?php while ( have_posts() ): the_post(); ?>;    if it has post
                        <?php single_term_title(); ?>;     "DO" etc
                        <?php the_archive_description(); ?>;  the description

                        <?php if ( has_post_thumbnail() ): ?>;    grab image
                        <?php echo get_post_permalink() ?>; the_post_thumbnail()    post image
                        <?php endif;?>

                        <?php the_title()?>;
                        <?php echo CFS()->get ('price')?>;
                        <?php endwhile;?>

                        <!-- else -->
                        <?php get_template_part( 'template-parts/content', 'none' ); ?>;