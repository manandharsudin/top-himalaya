<?php 
/**
 * Testimonial Section
*/

$title       = get_sub_field( 'title' );
$image_bg    = get_sub_field( 'image_bg' );
$testimonial = get_sub_field( 'testimonial' );

if( $title || $image_bg || $testimonial ){ ?>
    <section class="py-8 relative">
        <?php 
            if( $image_bg ){ ?>
                <picture class="hidden md:block">
                    <?php echo wp_get_attachment_image( $image_bg['ID'], 'full' ); ?>
                </picture>
                <?php 
            } 
        ?>
        <div class="relative top-0 translate-0 md:absolute md:top-[62%] md:-translate-y-1/2 mx-auto w-full">
            <div class="container">
                <?php 
                    if( $title ){ ?>
                        <div class="sectiontitle" data-aos="fade-down" data-aos-delay="50" data-aos-duration="1000">
                            <h2 class="text-netrual-100 text-2xl sm:text-3xl lg:text-4xl xl:text-[40px] lg:leading-[120%] font-bold mb-4"><?php echo esc_html( $title ); ?></h2>
                        </div>
                        <?php 
                    }
                    
                    if( $testimonial ){ ?>
                        <section class="testimonialWrapper overflow-hidden">
                            <div class="testimonialslider md:pb-14">
                                <?php foreach( $testimonial as $testi ){ ?>
                                <div class="slickbox">
                                    <div class="flex flex-wrap gap-12 lg:gap-18 items-center">
                                        <a href="<?php echo esc_url( $testi['link']['url'] ); ?>" target="<?php echo esc_attr( $testi['link']['target'] ); ?>" aria-label="<?php echo esc_attr( $testi['link']['title'] ); ?>" class="md:w-1/2 relative" data-aos="fade-down-left" data-aos-delay="100" data-aos-duration="1000">
                                            <?php echo wp_get_attachment_image( $testi['image']['ID'], 'full', false, array( 'class' => '-skew-x-3 skew-y-3 drop-shadow-[0_6.7_17.87_0_rgba(0,0,0,0.25)]' ) ); ?>
                                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/testimonial/pin.png" alt="Pin" class="absolute -top-14 left-2"/>
                                            <h2 class="absolute -right-4 -bottom-4 lg:-right-8 lg:-bottom-8 font-bold text-lg md:text-xl leading-[120%] py-2 px-3 md:py-3 md:px-4 border border-black bg-white"><?php echo esc_html( $testi['title'] ); ?></h2>
                                        </a>                        
                                        <div class="flex-1 text-2xl md:text-3xl lg:text-4xl xl:text-[40px] lg:leading-[120%]" data-aos="fade-down" data-aos-delay="50" data-aos-duration="1000"><?php echo wpautop( wp_kses_post( $testi['text'] ) ); ?></div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </section>
                        <?php 
                    }
                ?>
            </div>
        </div>
    </section>
    <?php
}