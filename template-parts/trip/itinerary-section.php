<?php
/**
 * Itinerary Section
*/

$title     = get_sub_field( 'title' );
$download  = get_sub_field( 'download' );
$itenerary = get_sub_field( 'itenerary' );

if( $title || $download || $itenerary ){ ?>
    <div id="thg-itenerary" class="py-12 md:py-16 lg:py-20">
        <div class="container">
            <?php
                if( $title || $download ){ ?>
                    <div class="sectiontitle flex items-center justify-between">
                        <h2 class="text-netrual-100 text-2xl sm:text-3xl lg:text-4xl xl:text-[40px] lg:leading-[120%] font-bold"><?php echo esc_html( $title ); ?></h2>
                        <a href="<?php echo esc_url( $download['url'] ); ?>" target="_blank" class="btn btn-primary border border-primary text-primary py-2 md:py-3 px-6 md:px-12 hover:bg-primary hover:text-white font-bold uppercase text-xs md:text-sm leading[120%]">Download PDF</a>
                    </div>
                    <?php
                }

                if( $itenerary ){ ?>
                    <div class="itineraryWrapper py-12 md:py-16 lg:py-20">
                        <div class="relative">
                            <ul class="flex w-full flex-col gap-4 md:gap-8 lg:gap-24">
                                <?php
                                    foreach( $itenerary as $ite ){ 
                                        $title      = $ite['title'];
                                        $text       = $ite['text'];
                                        $day        = $ite['day'];
                                        $no_of_days = $ite['no_of_days'];
                                        $services   = $ite['services']; ?>
                                        <li>
                                            <div class="relative bg-white w-full lg:py-4">
                                                <div class="itineraryContent bg-white">
                                                    <div class="rounded-lg lg:rounded-none itinerary-description p-2 sm:p-4 md:p-6 bg-primarylight cursor-pointer z-20">
                                                        <div class="flex justify-between items-center mb-1 sm:mb-2 md:mb-3">
                                                            <h3 class="flex-1 font-semibold text-lg sm:text-xl md:text-2xl leading-[120%] text-neutral-1000"><?php echo esc_html( $title ); ?></h3>
                                                            <button class="w-10 h-10 inline-block md:hidden itinerarybtn icon-chevron-down text-2xl"></button>
                                                        </div>
                                                        <div class="itineraryparaph text-sm sm:text-base md:text-lg"><?php echo wpautop( wp_kses_post( $text ) ); ?></div>
                                                        <?php 
                                                            if( $services ){ ?>
                                                                <div class="relative itinerary-services flex flex-wrap items-center gap-3 py-1 md:py-3">
                                                                    <?php 
                                                                        foreach( $services as $service ){ 
                                                                            if( $service['service'] == 'hotel' ){
                                                                                $class = 'text-base md:text-lg icon-HouseLine';
                                                                            }elseif( $service['service'] == 'tent' ){
                                                                                $class = 'text-lg icon-Tent';
                                                                            }elseif( $service['service'] == 'dinner' ){
                                                                                $class = 'text-base md:text-lg icon-ForkKnife';
                                                                            }
                                                                            ?>
                                                                            <div class="flex items-center space-x-2">
                                                                                <span class="<?php echo esc_attr( $class ); ?>"></span>
                                                                                <span class="text-neutral-800 text-base md:text-lg font-semibold leading-[120%]"><?php echo esc_html( $service['text'] ); ?></span>
                                                                            </div>
                                                                            <?php
                                                                        }
                                                                    ?>
                                                                </div>
                                                                <?php
                                                            }        
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="itinerary-days mt-4 lg:mt-0 flex justify-center items-center border-2 border-dashed border-neutral-800 h-18 w-18 sm:w-20 sm:h-20 md:w-28 md:h-28 rounded-full bg-white">
                                                    <div class="relative flex justify-center items-center flex-col w-full h-full">
                                                        <span class="block text-sm sm:text-base md:text-lg font-bold leading-[120%]"><?php echo esc_html( $day ); ?></span>
                                                        <span class="block text-lg sm:text-xl md:text-[28px] font-bold leading-[120%]"><?php echo esc_html( $no_of_days ); ?></span>
                                                        <div class="itinerary-horizontal-line border-t-2 border-dashed border-neutral-800"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <?php
                                    }
                                ?>
                            </ul>
                            <div class="hidden lg:block h-full w-px bg-black absolute left-1/2 top-0 bottom-0 z-[-1]"></div>
                        </div>
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
    <?php
}