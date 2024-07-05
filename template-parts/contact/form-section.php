<?php
/**
 * Form Section
*/

$map_iframe = get_sub_field( 'map_iframe' );
$subtitle   = get_sub_field( 'subtitle' );
$title      = get_sub_field( 'title' );
$shortcode  = get_sub_field( 'shortcode' );

if( $map_iframe || $subtitle || $title || $shortcode ){ ?>
    <section class="contact_form pb-12 md:pb-16 lg:pb-34">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <?php 
                    if( $map_iframe ){ ?>
                        <div class="order-last lg:order-first grayscale h-80 lg:h-[660px]"><?php echo htmlspecialchars_decode( stripslashes( $map_iframe ) ); ?></div>
                        <?php
                    }
                ?>
                
                <div class="order-first lg:order-last">
                    <?php 
                        if( $subtitle ) echo '<h4 class="text-lg">' . esc_html( $subtitle ) . '</h4>';
                        if( $title ) echo '<h2 class="text-netrual-100 text-3xl md:text-4xl lg:text-[40px] lg:leading-[120%] font-bold mb-4 md:mb-6 lg:mb-8">' . esc_html( $title ) . '</h2>';

                        if( $shortcode ) echo '<div class="formWrapper space-y-6">' . do_shortcode( wp_kses_post( $shortcode ) ) . '</div>';
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php
}