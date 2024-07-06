<?php
/**
 * Intro Section
*/

$title   = get_sub_field( 'title' );
$text    = get_sub_field( 'text' );
$members = get_sub_field( 'members' );
$image   = get_sub_field( 'image' );

if( $title || $text || $members || $image ){ ?>
    <section>
        <div class="container">
            <div class="py-12 md:py-16 lg:py26 grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-10">
                <div>
                    <?php
                        if( $title ) echo '<h2 class="text-netrual-900 text-2xl sm:text-3xl lg:text-4xl xl:text-[40px] lg:leading-[120%] font-bold mb-3">' . esc_html( $title ) . '</h2>';

                        if( $text ) echo '<div class="text-neutral-800">' . wpautop( wp_kses_post( $text ) ) . '</div>';

                        if( $members ){ ?>
                            <div class="mt-12 space-y-6">
                                <?php
                                    foreach( $members as $member ){ ?>
                                        <div class="flex items-center gap-4">
                                            <?php echo wp_get_attachment_image( $member['image']['ID'], 'full' ); ?>
                                            <div>
                                                <h2 class="text-lg font-semibold"><?php echo esc_html( $member['title'] ); ?></h2>
                                                <h3 class="text-lg"><?php echo esc_html( $member['subtitle'] ); ?></h3>
                                            </div>
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