<?php 
/**
 * Text Image Section
*/

$layout   = get_sub_field( 'layout' );
$image    = get_sub_field( 'image' );
$title    = get_sub_field( 'title' );
$subtitle = get_sub_field( 'subtitle' );
$text     = get_sub_field( 'text' );
$link     = get_sub_field( 'link' );

if( $image || $title || $text ){ ?>
    <div class="py-12 md:py-16 grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-10">
        <?php 
            if( $layout == 'left' && $image ){ ?>
                <picture class="order-last md:order-first">
                    <?php echo wp_get_attachment_image( $image['ID'], 'full', false, array( 'class' => 'w-full' ) ); ?>
                </picture>
                <?php 
            } 
        ?>

        <div>
            <?php 
                if( $subtitle ) echo '<h4 class="text-neutral-1000 text-2xl leading-[120%]">' . esc_html( $subtitle ) . '</h4>';
                if( $title ) echo '<h2 class="text-netrual-900 text-2xl sm:text-3xl lg:text-4xl xl:text-[40px] lg:leading-[120%] font-bold mb-3">' . esc_html( $title ) . '</h2>';

                if( $text ) echo '<div class="text-neutral-800">' . wpautop( wp_kses_post( $text ) ) . '</div>';

                if( $link ){ ?>            
                    <div class="mt-8 form-group flex">
                        <a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>" class="min-w-50 btn btn-primary border border-primary bg-primary hover:bg-white hover:text-primary text-white py-3 px-6 text-sm uppercase leading[120%] font-bold whitespace-nowrap"><?php echo esc_html( $link['title'] ); ?></a>
                    </div>
                    <?php 
                } 
            ?>
        </div>
        
        <?php 
            if( $layout == 'right' && $image ){ ?>
                <picture>
                    <?php echo wp_get_attachment_image( $image['ID'], 'full', false, array( 'class' => 'w-full' ) ); ?>
                </picture>
                <?php 
            } 
        ?>
    </div>
    <?php
}