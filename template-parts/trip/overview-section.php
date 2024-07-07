<?php
/**
 * Overview Section
*/

$title           = get_sub_field( 'title' );
$text            = get_sub_field( 'text' );
$difficulty      = get_sub_field( 'difficulty' );
$duration        = get_sub_field( 'duration' );
$walking_per_day = get_sub_field( 'walking_per_day' );
$group_size      = get_sub_field( 'group_size' );
$max_elevation   = get_sub_field( 'max_elevation' );
$best_season     = get_sub_field( 'best_season' );
$accommodations  = get_sub_field( 'accommodations' );
$weather_report  = get_sub_field( 'weather_report' );

if( $title || $text || $difficulty || $duration || $walking_per_day || $group_size || $max_elevation || $best_season || $accommodations || $weather_report ){ ?>
    <div id="thg-overview" class="py-12 md:py-14 lg:py-18 xl:pt-36 xl:pb-56">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 xl:gap-26 place-items-start">
                <div>
                    <?php
                        if( $title ){ ?>
                            <div class="sectiontitle">
                                <h2 class="text-netrual-100 text-2xl sm:text-3xl lg:text-4xl xl:text-[40px] lg:leading-[120%] font-bold mb-4"><?php echo esc_html( $title ); ?></h2>
                            </div>
                            <?php
                        }

                        if( $text ){ ?>
                            <div class="overview_description text-ellipse line-clamp-6 overflow-hidden text-base md::text-lg text-neutral-800 transition ease-linear duration-150"><?php echo wpautop( wp_kses_post( $text ) ); ?></div>
                            <a href="#" class="readalloverview block mt-6 font-semibold text-base md:text-lg underline hover:text-primary">Read More</a>
                            <?php 
                        }
                    ?>
                </div>
                <div class="grid grid-cols-2 gap-y-6 gap-x-4 xl:gap-x-26">
                    <?php 
                        if( $difficulty ){ ?>
                            <div class="flex gap-x-2 xl:gap-x-4">
                                <div class="flex items-center justify-center w-12 h-12 rounded-full bg-primary">
                                    <span class="icon-chart text-white text-2xl"></span>
                                </div>
                                <div class="flex-1 space-y-1.5">
                                    <h4 class="font-semibold text-base md:text-lg leading-[120%] text-neutral-1000"><?php echo esc_html( $difficulty ); ?></h4>
                                    <h5 class="font-semibold text-xs md:text-sm leading-[120%] text-neutral-600">Difficulty</h5>
                                </div>
                            </div>
                            <?php
                        }

                        if( $duration ){ ?>
                            <div class="flex gap-x-2 xl:gap-x-4">
                                <div class="flex items-center justify-center w-12 h-12 rounded-full bg-primary">
                                    <span class="icon-clock text-white text-2xl"></span>
                                </div>
                                <div class="flex-1 space-y-1.5">
                                    <h4 class="font-semibold text-base md:text-lg leading-[120%] text-neutral-1000"><?php echo esc_html( $duration ); ?></h4>
                                    <h5 class="font-semibold text-xs md:text-sm leading-[120%] text-neutral-600">Duration</h5>
                                </div>
                            </div>
                            <?php
                        }

                        if( $walking_per_day ){ ?>
                            <div class="flex gap-x-2 xl:gap-x-4">
                                <div class="flex items-center justify-center w-12 h-12 rounded-full bg-primary">
                                    <span class="icon-PersonSimpleHike text-white text-2xl"></span>
                                </div>
                                <div class="flex-1 space-y-1.5">
                                    <h4 class="font-semibold text-base md:text-lg leading-[120%] text-neutral-1000"><?php echo esc_html( $walking_per_day ); ?></h4>
                                    <h5 class="font-semibold text-xs md:text-sm leading-[120%] text-neutral-600">Walking Per Day</h5>
                                </div>
                            </div>
                            <?php
                        }

                        if( $group_size ){ ?>
                            <div class="flex gap-x-2 xl:gap-x-4">
                                <div class="flex items-center justify-center w-12 h-12 rounded-full bg-primary">
                                    <span class="icon-UsersThree text-white text-2xl"></span>
                                </div>
                                <div class="flex-1 space-y-1.5">
                                    <h4 class="font-semibold text-base md:text-lg leading-[120%] text-neutral-1000"><?php echo esc_html( $group_size ); ?></h4>
                                    <h5 class="font-semibold text-xs md:text-sm leading-[120%] text-neutral-600">Group size</h5>
                                </div>
                            </div>
                            <?php
                        }

                        if( $max_elevation ){ ?>
                            <div class="flex gap-x-2 xl:gap-x-4">
                                <div class="flex items-center justify-center w-12 h-12 rounded-full bg-primary">
                                    <span class="icon-mountain text-white text-2xl"></span>
                                </div>
                                <div class="flex-1 space-y-1.5">
                                    <h4 class="font-semibold text-base md:text-lg leading-[120%] text-neutral-1000"><?php echo esc_html( $max_elevation ); ?></h4>
                                    <h5 class="font-semibold text-xs md:text-sm leading-[120%] text-neutral-600">Max elevation</h5>
                                </div>
                            </div>
                            <?php
                        }

                        if( $best_season ){ ?>
                            <div class="flex gap-x-2 xl:gap-x-4">
                                <div class="flex items-center justify-center w-12 h-12 rounded-full bg-primary">
                                    <span class="icon-Leaf-3 text-white text-2xl"></span>
                                </div>
                                <div class="flex-1 space-y-1.5">
                                    <h4 class="font-semibold text-base md:text-lg leading-[120%] text-neutral-1000"><?php echo esc_html( $best_season ); ?></h4>
                                    <h5 class="font-semibold text-xs md:text-sm leading-[120%] text-neutral-600">Best Season</h5>
                                </div>
                            </div>
                            <?php
                        }

                        if( $accommodations ){ ?>
                            <div class="flex gap-x-2 xl:gap-x-4">
                                <div class="flex items-center justify-center w-12 h-12 rounded-full bg-primary">
                                    <span class="icon-ion_bed-sharp text-white text-2xl"></span>
                                </div>
                                <div class="flex-1 space-y-1.5">
                                    <h4 class="font-semibold text-base md:text-lg leading-[120%] text-neutral-1000"><?php echo esc_html( $accommodations ); ?></h4>
                                    <h5 class="font-semibold text-xs md:text-sm leading-[120%] text-neutral-600">Accommodations</h5>
                                </div>
                            </div>
                            <?php
                        }

                        if( $weather_report ){ ?>
                            <div class="flex gap-x-2 xl:gap-x-4">
                                <div class="flex items-center justify-center w-12 h-12 rounded-full bg-primary">
                                    <span class="icon-CloudFog text-white text-2xl"></span>
                                </div>
                                <div class="flex-1 space-y-1.5">
                                    <h4 class="font-semibold text-base md:text-lg leading-[120%] text-neutral-1000"><?php echo esc_html( $weather_report ); ?></h4>
                                    <h5 class="font-semibold text-xs md:text-sm leading-[120%] text-neutral-600">Weather Report</h5>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}