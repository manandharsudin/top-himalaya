<?php
/**
 * Template Name:About Detail Page
 * 
 * @package Top_Himalaya
*/

get_header();

    while( have_posts() ): the_post(); ?>

    <main>
        <?php
            if( have_rows( 'contents' ) ):

                while( have_rows( 'contents' ) ) : the_row();
                
                    if( get_row_layout() == 'intro_section' ) :
                        get_template_part( 'template-parts/about-detail/intro', 'section' );                
                    elseif( get_row_layout() == 'award_section' ) :
                        get_template_part( 'template-parts/about-detail/award', 'section' );
                    elseif( get_row_layout() == 'experience_section' ) :
                        get_template_part( 'template-parts/about-detail/experience', 'section' );
                    elseif( get_row_layout() == 'rescue_mission' ) :
                        get_template_part( 'template-parts/about-detail/rescue', 'mission' );
                    elseif( get_row_layout() == 'image_section' ) :
                        get_template_part( 'template-parts/about-detail/image', 'section' );
                    elseif( get_row_layout() == 'experience_with_side_image' ) :
                        get_template_part( 'template-parts/about-detail/experience', 'image' );
                    elseif( get_row_layout() == 'climbing_list' ) :
                        get_template_part( 'template-parts/about-detail/climbing', 'list' );
                    endif;
                    
                endwhile;

            endif;
        ?>
    </main>

    <?php
    endwhile;

get_footer();