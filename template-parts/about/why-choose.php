<?php 
/**
 * Why Choose Section
*/

$title      = get_sub_field( 'title' );
$why_choose = get_sub_field( 'why_choose' );

if( $title || $why_choose ){ ?>
    <div class="py-12 md:py-16 gap-8 md:gap-10">
        <?php
            if( $title ) echo '<h2 class="text-netrual-100 text-2xl sm:text-3xl lg:text-4xl xl:text-[40px] lg:leading-[120%] font-bold max-w-[519px]">' . esc_html( $title ) . '</h2>';

            if( $why_choose ){ ?>        
                <div class="mt-12 lg:mt-18 grid lg:grid-cols-2 gap-8">
                    <?php 
                        foreach( $why_choose as $why ){ 
                            $image = $why['image'];
                            $title = $why['title'];
                            $text  = $why['text']; ?>
                            <div class="flex gap-4 space-y-3">
                                <?php 
                                    if( $image ){ ?>
                                        <div class="flex justify-center items-center w-16 h-16 md:w-[100px] md:h-[100px] bg-primary rounded-full">
                                            <?php echo wp_get_attachment_image( $image['ID'], 'full', false, array( 'class' => 'w-10 md:h-auto' ) ); ?>
                                        </div>
                                        <?php 
                                    } 
                                ?>
                                <div class="flex-1">
                                    <?php 
                                        if( $title ) echo '<h3 class="text-2xl font-bold text-neutral-1000 leading-[120%]">' . esc_html( $title ) . '</h3>';

                                        if( $text ) echo '<div class="text-lg text-neutral-800">' . wpautop( wp_kses_post( $text ) ) . '</div>';
                                    ?>
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
}