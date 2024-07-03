<?php 
/**
 * Instagram Section
*/

$title     = get_sub_field( 'title' );
$link      = get_sub_field( 'link' );
$shortcode = get_sub_field( 'shortcode' );

if( $shortcode ){ ?>
    <section>
        <div class="container">
            <div class="sectiontitle  text-center" data-aos="fade-down" data-aos-delay="50" data-aos-duration="1000">
                <?php 
                    if( $title ) echo '<h2 class="text-netrual-100 text-2xl sm:text-3xl lg:text-4xl xl:text-[40px] lg:leading-[120%] font-bold mb-6">' . esc_html( $title ) . '</h2>';

                    if( $link ) echo '<a href="' . esc_url( $link['url'] ) . '" target="' . esc_attr( $link['target'] ) . '" class="text-2xl leading-[120%] text-primary">' . esc_html( $link['title'] ) . '</a>';
                ?>
            </div>
            <div class="mt-8 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">
                <?php echo do_shortcode( wp_kses_post( $shortcode ) ); ?>
            </div>
        </div>
    </section>
    <?php
}