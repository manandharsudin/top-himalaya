<?php 
/**
 * Guide Section
*/

$title    = get_sub_field( 'title' );
$subtitle = get_sub_field( 'subtitle' );
$text     = get_sub_field( 'text' );
$link     = get_sub_field( 'link' );

if( $title || $subtitle || $text ){ ?>
    <section class="block relative py-32 md:py-40 lg:py-78 bg-primary/20 bg-no-repeat after:absolute after:content-[''] after:w-full after:h-full after:inset-0 after:bg-parallax-pattern after:bg-center after:bg-no-repeat lg:after:bg-cover lg:after:bg-fixed after:z-[-1]">
        <div class="py-8 px-8 md:px-32 bg-black/40 text-white md:max-w-[766px]">
            <?php
                if( $subtitle ) echo '<h4 class="text-2xl leading-[120%]">' . esc_html( $subtitle ) . '</h4>';
                if( $title ) echo '<h2 class="text-3xl lg:text-4xl xl:text-[40px] font-bold lg:leading-[120%] mb-3">' . esc_html( $title ) . '</h2>';
                if( $text ) echo '<div class="text-lg leading-[25px] mb-6">' . wpautop( wp_kses_post( $text ) ) . '</div>';
                if( $link ) echo '<a href="' . esc_url( $link['url'] ) . '" target="' . esc_attr( $link['target'] ) . '" class="btn btn-primary bg-primary hover:bg-white hover:text-primary text-white py-3 px-12 text-sm uppercase leading[120%] font-bold">' . esc_html( $link['title'] ) . '</a>';
            ?>
        </div>
    </section>
    <?php
}