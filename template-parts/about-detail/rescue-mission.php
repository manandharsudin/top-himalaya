<?php
/**
 * Rescue Mission
*/

$title = get_sub_field( 'title' );
$text  = get_sub_field( 'text' );
$lists = get_sub_field( 'lists' );
$image = get_sub_field( 'image' );

if( $title || $text || $lists || $image ){ ?>
    <section class="py-12 md:py-16 bg-secondarylight">
        <div class="container">
            <div class="grid md:grid-cols-2 gap-8 md:gap-16">
                <?php 
                    if( $title || $text || $lists ){ ?>
                        <div class="order-last md:order-first">
                            <?php
                                if( $title ) echo '<h2 class="text-netrual-100 text-2xl sm:text-3xl lg:text-4xl xl:text-[40px] lg:leading-[120%] font-bold mb-3">' . esc_html( $title ) . '</h2>';

                                if( $text ) echo wpautop( wp_kses_post( $text ) );

                                if( $lists ){ ?>
                                    <div class="mt-8 space-y-8">
                                        <?php 
                                            foreach( $lists as $list ){ ?>
                                                <div class="flex items-center gap-3">
                                                    <span class="icon-check text-3xl text-primary"></span>
                                                    <span class="text-lg font-semibold"><?php echo wpautop( wp_kses_post( $list['list'] ) ); ?></span>
                                                </div>
                                                <?php 
                                            } 
                                        ?>
                                    </div>
                                    <?php
                                }
                            ?>
                        </div>
                        <?php 
                    }

                    if( $image ){ ?>
                        <picture>
                            <?php echo wp_get_attachment_image( $image['ID'], 'full', false, array( 'class' => 'w-full' ) ); ?>
                        </picture>
                        <?php 
                    }    
                ?>
            </div>
        </div>
    </section>
    <?php
}