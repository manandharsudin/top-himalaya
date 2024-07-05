<?php
/**
 * Template Name:Contact Us Page
 * 
 * @package Top_Himalaya
*/

get_header();

    while( have_posts() ): the_post(); ?>

        <main>
            <?php
                if( have_rows( 'contents' ) ):

                    while( have_rows( 'contents' ) ) : the_row();
                    
                        if( get_row_layout() == 'contact_section' ) :
                            get_template_part( 'template-parts/contact/contact', 'section' );                
                        elseif( get_row_layout() == 'form_section' ) :
                            get_template_part( 'template-parts/contact/form', 'section' );
                        elseif( get_row_layout() == 'social_section' ) :
                            get_template_part( 'template-parts/contact/social', 'section' );
                        endif;
                        
                    endwhile;

                endif;
            ?>
        </main>
        
        <?php
    endwhile;

get_footer();