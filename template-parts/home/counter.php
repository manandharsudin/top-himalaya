<?php 
/**
 * Counter Section
*/

$counter_bg = get_sub_field( 'counter_bg' );
$counters   = get_sub_field( 'counters' );

if( $counter_bg || $counters ){ ?>
    <section class="relative w-full">
        <?php 
            if( $counter_bg ){
                echo wp_get_attachment_image( 
                    $counter_bg['ID'], 
                    'full', 
                    false, 
                    array( 
                        'class'             => 'w-full object-scale-down h-[400px] sm:h-[480px] sm:h-[600px] md:h-[880px] lg:h-[1000px]',
                        'data-aos'          => 'fade-down',
                        'data-aos-delay'    => '200',
                        'data-aos-duration' => '3000',
                    )
                );
            }
            
            if( $counters ){ ?>        
                <div class="px-4 w-full md:px-0 md:w-4/5 absolute top-[80px] sm:top-[120px] md:top-[180px] lg:top-[230px] xl:top-[180px] left-1/2 -translate-x-1/2">
                    <div class="flex justify-center text-center flex-col items-center successrate-counter space-y-2" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000">
                        <h2 class="count text-3xl sm:text-4xl md:text-5xl lg:text-[56px] leading-[120%] text-primary font-bold"><?php echo esc_html( $counters['counter_one'] ); ?></h2>
                        <p class="text-xs xs:text-sm sm:text-base text-neutral-800"><?php echo esc_html( $counters['title_one'] ); ?></p>
                    </div>
                    <div class="mt-4 lg:mt-8 xl:mt-16 w-4/5 md:w-3/5 flex justify-between mx-auto">
                        <div class="w-[150px] sm:w-[250px] flex justify-center text-center flex-col items-center successrate-counter space-y-2" data-aos="zoom-in-up" data-aos-delay="200" data-aos-duration="1000">
                            <h2 class="count text-3xl sm:text-4xl md:text-5xl lg:text-[56px] leading-[120%] text-primary font-bold"><?php echo esc_html( $counters['counter_two'] ); ?></h2>
                            <p class="text-xs xs:text-sm sm:text-base text-neutral-800"><?php echo esc_html( $counters['title_two'] ); ?></p>
                        </div>
                        <div class="w-[150px] sm:w-[250px] flex justify-center text-center flex-col items-center successrate-counter space-y-2" data-aos="zoom-in-up" data-aos-delay="200" data-aos-duration="1000">
                            <h2 class="count text-3xl sm:text-4xl md:text-5xl lg:text-[56px] leading-[120%] text-primary font-bold"><?php echo esc_html( $counters['counter_three'] ); ?></h2>
                            <p class="text-xs xs:text-sm sm:text-base text-neutral-800"><?php echo esc_html( $counters['title_three'] ); ?></p>
                        </div>
                    </div>
                    <div class="mt-4 lg:mt-8 xl:mt-16 xl:w-full flex justify-between mx-auto">
                        <div class="w-[150px] sm:w-[250px] flex justify-center text-center flex-col items-center successrate-counter space-y-2" data-aos="zoom-in-up" data-aos-delay="300" data-aos-duration="1000">
                            <h2 class="count text-3xl sm:text-4xl md:text-5xl lg:text-[56px] leading-[120%] text-primary font-bold"><?php echo esc_html( $counters['counter_four'] ); ?></h2>
                            <p class="text-xs xs:text-sm sm:text-base text-neutral-800"><?php echo esc_html( $counters['title_four'] ); ?></p>
                        </div>
                        <div class="w-[150px] sm:w-[250px] flex justify-center text-center flex-col items-center successrate-counter space-y-2" data-aos="zoom-in-up" data-aos-delay="300" data-aos-duration="1000">
                            <h2 class="count text-3xl sm:text-4xl md:text-5xl lg:text-[56px] leading-[120%] text-primary font-bold"><?php echo esc_html( $counters['counter_five'] ); ?></h2>
                            <p class="text-xs xs:text-sm sm:text-base text-neutral-800"><?php echo esc_html( $counters['title_five'] ); ?></p>
                        </div>
                    </div>
                </div>
                <?php
            }
        ?>
    </section>
    <?php
}