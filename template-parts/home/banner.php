<?php 
/**
 * Banner Section
*/

$sliders = get_sub_field( 'sliders' );

if( $sliders ){ ?>
    <section class="banner_wrapper relative h-dvh w-full object-cover">
        <div class="mainslider sliderWrapper">
            <?php 
                foreach( $sliders as $slider ){
                    $type     = $slider['type'];
                    $image    = $slider['image'];
                    $title    = $slider['title'];
                    $subtitle = $slider['subtitle'];
                    $link     = $slider['link'];
                    $video    = $slider['video'];

                    if( $type == 'video' && $video ){ ?>
                        <div class="slickbox relative overflow-hidden">
                            <video src="<?php echo esc_url( $video['url'] ); ?>" autoplay loop muted class="w-full h-dvh object-cover"></video>
                            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>
                        </div>
                        <?php
                    }else{ ?>
                        <div class="slickbox relative overflow-hidden">
                            <?php 
                                if( $image ){ 
                                    if( $link ) echo '<a href="' . esc_url( $link['url'] ) . '" target="' . esc_attr( $link['target'] ) . '" aria-label="' . esc_attr( $link['title'] ) . '">';

                                    echo wp_get_attachment_image( $image['ID'], 'full', false, array( 'class' => 'h-dvh object-cover w-full' ) );
                                    
                                    if( $link ) echo '</a>';
                                } 
                            ?>
                            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-10"></div>
                            <?php
                                if( $title || $subtitle ){ ?>
                                    <div class="container absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                        <div class="w-4/5 lg:w-auto sm:max-w-auto lg:max-w-[1020px] mx-auto flex flex-col justify-center space-y-3" data-aos="fade-down" data-aos-delay="50" data-aos-duration="1000">
                                            <?php 
                                                if( $title ) echo '<h2 class="text-center uppercase font-extrabold text-white text-5xl lg:text-[110px] lg:leading-none">' . esc_html( $title ) . '</h2>';
                                                if( $subtitle ) echo '<h4 class="text-white text-center text-2xl font-medium uppercase">' . esc_html( $subtitle ) . '</h4>';
                                            ?>
                                        </div>
                                    </div>
                                    <?php 
                                }
                            ?>
                        </div>
                        <?php
                    }
                }
            ?>
        </div>
        <div class="absolute bottom-9 left-1/2 -translate-x-1/2">
            <a href="#mycategory" class="relative mycategory bounce flex justify-center items-center text-center flex-col space-y-2 sm:space-y-4 md:space-y-6">
                <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/scroll-down.png" alt="Scroll Down Icon" class="h-8 sm:h-auto"/>
                <p class="text-white text-center">Scroll Down</p>
            </a>
        </div>
    </section>
    <?php
}