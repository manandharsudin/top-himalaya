<?php
/**
 * Experience Section
*/

$layout      = get_sub_field( 'layout' );
$title       = get_sub_field( 'title' );
$image       = get_sub_field( 'image' );
$experiences = get_sub_field( 'experiences' );

if( $layout == 'experience' ){
    $title_class = ' text-netrual-900 mb-3';
    $wrap_class = ' mt-8 grid-cols-1 md:gap-x-10 md:gap-y-6';
    $icon_class = ' icon-mountain text-3xl';
}elseif( $layout == 'teaching' ){
    $title_class = ' text-netrual-100 mb-8';
    $wrap_class = ' md:gap-x-16 md:gap-y-8';
    $icon_class = ' icon-mountain text-3xl';
}else{
    $title_class = ' text-netrual-100';
    $wrap_class = ' md:gap-x-16 md:gap-y-8';
    $icon_class = ' icon-mountain text-3xl';
}

if( $title || $experiences ){ ?>
    <section class="py-12 md:py-20 lg:py-40">
        <div class="container">
            <?php 
                if( $title ) echo '<h2 class="text-2xl sm:text-3xl lg:text-4xl xl:text-[40px] lg:leading-[120%] font-bold' . esc_attr( $title_class ) . '">' . esc_html( $title ) . '</h2>';
                
                if( $image ){ ?>
                    <picture class="my-6 block">
                        <?php echo wp_get_attachment_image( $image['ID'], 'full', false, array( 'class' => 'w-full' ) ); ?>
                    </picture>
                    <?php
                }

                if( $experiences ){ ?>
                    <div class="grid md:grid-cols-2 gap-4<?php echo esc_attr( $wrap_class ); ?>">
                        <?php 
                            foreach( $experiences as $experience ){ ?>       
                                <div class="flex items-center gap-3">
                                    <span class="<?php echo esc_attr( $icon_class ); ?>"></span>
                                    <span class="text-lg font-semibold"><?php echo wpautop( wp_kses_post( $experience['experience'] ) ); ?></span>
                                </div>
                                <?php 
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