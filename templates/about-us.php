<?php
/**
 * Template Name:About Us Page
 * 
 * @package Top_Himalaya
*/

get_header();

    while( have_posts() ): the_post(); ?>

        <main>
            <section>
                <?php
                    if( have_rows( 'contents' ) ):

                        while( have_rows( 'contents' ) ) : the_row();
                        
                            if( get_row_layout() == 'text_image_section' ) :
                                get_template_part( 'template-parts/about/text', 'image' );                
                            elseif( get_row_layout() == 'why_choose_section' ) :
                                get_template_part( 'template-parts/about/why', 'choose' );
                            endif;
                            
                        endwhile;

                    endif;
                ?>
            </section>
        </main>

        <?php
    endwhile;

get_footer();