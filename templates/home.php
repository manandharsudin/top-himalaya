<?php
/**
 * Template Name:Home Page
 * 
 * @package Top_Himalaya
*/

get_header(); 

    while( have_posts() ): the_post();

        if( have_rows( 'contents' ) ):

            while( have_rows( 'contents' ) ) : the_row();
            
                if( get_row_layout() == 'banner_section' ) :
                    get_template_part( 'template-parts/home/banner' );
                elseif( get_row_layout() == 'category_section' ) :
                    get_template_part( 'template-parts/home/category' );
                elseif( get_row_layout() == 'popular_trek' ) :
                    get_template_part( 'template-parts/home/popular' );
                elseif( get_row_layout() == 'guide_section' ) :
                    get_template_part( 'template-parts/home/guide' );
                elseif( get_row_layout() == 'counter_section' ) :
                    get_template_part( 'template-parts/home/counter' );
                elseif( get_row_layout() == 'testimonial_section' ) :
                    get_template_part( 'template-parts/home/testimonial' );
                elseif( get_row_layout() == 'blog_section' ) :
                    get_template_part( 'template-parts/home/blog' );
                elseif( get_row_layout() == 'instagram_section' ) :
                    get_template_part( 'template-parts/home/instagram' );
                endif;
                
            endwhile;

        endif;

    endwhile;

get_footer();