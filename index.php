<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Top_Himalaya
 */

get_header();
?>

	<main id="primary" class="site-main">
        <section class="ourBlogsWrapper pt-12 md:pt-16 pb-12 md:pb-16 lg:pb-34">
            <div class="container">
                <div class="blogwrapper grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">
                    <?php
                    if ( have_posts() ) :

                        /* Start the Loop */
                        while ( have_posts() ) :
                            the_post();

                            /*
                            * Include the Post-Type-specific template for the content.
                            * If you want to override this in a child theme, then include a file
                            * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                            */
                            get_template_part( 'template-parts/content', get_post_type() );

                        endwhile;

                        the_posts_pagination( array(
                            'prev_text'          => '<span class="icon-arrow-left"></span>',
                            'next_text'          => '<span class="icon-arrow-right"></span>',
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'top-himalaya' ) . ' </span>',
                        ) );

                    else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif;
                    ?>
                </div>
            </div>
        </section>
	</main><!-- #main -->

<?php
get_footer();