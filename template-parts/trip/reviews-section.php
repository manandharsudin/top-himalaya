<?php
/**
 * Review Section
*/

$title  = get_sub_field( 'title' );
$button = get_sub_field( 'button' );
$reviews  = get_sub_field( 'reviews' );

if( $title || $button || $reviews ){ ?>
    <div id="thg-reviews" class="py-12 md:py-16 lg:py-20 bg-secondarylight">
        <div class="container">
            <?php
                if( $title || $button ){ ?>
                    <div class="sectiontitle flex items-center justify-between">
                        <h2 class="text-netrual-100 text-2xl sm:text-3xl lg:text-4xl xl:text-[40px] lg:leading-[120%] font-bold"><?php echo esc_html( $title ) ?></h2>
                        <a href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>" class="btn btn-primary border border-primary text-primary py-2 md:py-3 px-6 md:px-12 hover:bg-primary hover:text-white font-bold uppercase text-xs md:text-sm leading[120%]"><?php echo esc_html( $button['title'] ); ?></a>                        
                    </div>
                    <?php 
                }

                if( $reviews ){ ?>            
                    <section class="relative mt-8 reviewsliderWrapper overflow-hidden">
                        <div class="reviewslider">
                            <?php 
                                foreach( $reviews as $review ){
                                    $image   = $review['image'];
                                    $text    = $review['text'];
                                    $name    = $review['name'];
                                    $country = $review['country']; ?>
                                    <div class="slickbox">
                                        <div class="flex flex-wrap gap-6">
                                            <?php
                                                if( $image ){ ?>
                                                    <picture class="md:w-1/2 relative">
                                                        <?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?>
                                                    </picture>
                                                    <?php
                                                }

                                                if( $text ){ ?>
                                                    <div class="flex-1 text-neutral-800" data-aos="fade-down" data-aos-delay="50" data-aos-duration="1000">
                                                        <div class="flex items-start h-full">
                                                            <span class="icon-inverted-comma text-[80px]"></span>
                                                            <div class="flex justify-between flex-col h-full">
                                                                <div class="mt-6"><?php echo wpautop( wp_kses_post( $text ) ); ?></div>
                                                                <div class="mt-4">
                                                                    <?php 
                                                                        if( $name ) echo '<h4 class="text-2xl font-semibold leading-[120%] text-neutral-1000">' . esc_html( $name ) . '</h4>';

                                                                        if( $country ) echo '<h5 class="font-semibold leading-[120%] text-neutral-800">' . esc_html( $country ) . '</h5>';
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                            ?>
                                        </div>
                                    </div>
                                    <?php 
                                }
                            ?>
                        </div>
                        <div class="reviewSlider__arrows flex items-center gap-3 absolute right-0 bottom-2"></div>
                    </section>
                    <?php
                }
            ?>            
        </div>
    </div>
    <?php
}