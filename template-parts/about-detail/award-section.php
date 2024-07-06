<?php 
/**
 * Award Section
*/

$title   = get_sub_field( 'title' );
$awards = get_sub_field( 'awards' );

if( $title || $awards ){ ?>
    <section class="py-16 bg-secondarylight">
        <div class="container">
            <?php
                if( $title ) echo '<h2 class="text-center text-netrual-900 text-2xl sm:text-3xl lg:text-4xl xl:text-[40px] lg:leading-[120%] font-bold mb-3">' . esc_html( $title ) . '</h2>';

                if( $awards ){ ?>            
                    <div class="grid justify-center sm:grid-cols-3 gap-4 md::gap-9">
                        <?php 
                            foreach( $awards as $award ){
                                echo wp_get_attachment_image( $award['image']['ID'], 'full', false, array( 'class' => 'w-72 sm:w-full' ) );
                            }
                        ?>
                    </div>
                    <?php
                }
            ?>
        </div>
    </section>
    <?php
}