<?php
/**
 * Map Section
*/

$title  = get_sub_field( 'title' );
$button = get_sub_field( 'button' );
$image  = get_sub_field( 'image' );

if( $title || $button || $image ){ ?>
    <div id="thg-map">
        <?php 
            if( $title || $button ){ ?>
                <div class="container">
                    <div class="sectiontitle flex items-center justify-between">
                        <h2 class="text-netrual-100 text-2xl sm:text-3xl lg:text-4xl xl:text-[40px] lg:leading-[120%] font-bold"><?php echo esc_html( $title ) ?></h2>
                        <a href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>" class="btn btn-primary border border-primary text-primary py-2 md:py-3 px-6 md:px-12 hover:bg-primary hover:text-white font-bold uppercase text-xs md:text-sm leading[120%]"><?php echo esc_html( $button['title'] ); ?></a>
                    </div>
                </div>
                <?php 
            }
        
            if( $image ){ ?>
                <picture>
                    <?php echo wp_get_attachment_image( $image['ID'], 'full', false, array( 'class' => 'w-full' ) );  ?>
                </picture>
                <?php 
            }
        ?>
    </div>
    <?php
}