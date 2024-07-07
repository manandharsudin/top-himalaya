<?php 
/**
 * Fixed Date Section
*/

$title = get_sub_field( 'title' );
$dates = get_sub_field( 'dates' );

if( $title || $dates ){ ?>
    <div id="thg-fixdates" class="py-12 md:py-16 lg:py-20 bg-secondarylight">
        <div class="container">
            <?php 
                if( $title ){ ?>
                    <div class="sectiontitle">
                        <h2 class="text-netrual-100 text-2xl sm:text-3xl lg:text-4xl xl:text-[40px] lg:leading-[120%] font-bold mb-8"><?php echo esc_html( $title ); ?></h2>
                    </div>
                    <?php
                }

                if( $dates ){ ?>
                    <table class="w-full table-auto">
                        <thead>
                            <tr>
                                <th scope="col" class="text-left text-lg font-semibold text-neutral-1000 leading-[120%] pb-6">Package</th>
                                <th scope="col" class="text-lg font-semibold text-neutral-1000 leading-[120%] pb-6">Date</th>
                                <th scope="col" class="text-lg font-semibold text-neutral-1000 leading-[120%] pb-6">State</th>
                                <th scope="col" class="text-lg font-semibold text-neutral-1000 leading-[120%] pb-6">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach( $dates as $d ){
                                    $package = $d['package'];
                                    $date    = $d['date'];
                                    $state   = $d['state']; ?>
                                    <tr class="border-t border-slate-300">
                                        <?php 
                                            if( $package ){ ?>
                                                <td data-label="Package" class="px-4 py-4 lg:px-6 lg:py-6">
                                                    <div class="flex flex-col space-y-2">
                                                        <h4 class="font-semibold text-2xl text-neutral-1000 leading[120%]"><?php echo esc_html( $package['title'] ); ?></h4>
                                                        <h5 class="space-x-2 font-semibold text-neutral-1000 leading[120%]">
                                                            <span class="icon-UsersThree"></span><span><?php echo esc_html( $package['subtitle'] ); ?></span>
                                                        </h5>
                                                    </div>
                                                </td>
                                                <?php 
                                            }

                                            if( $date ){ ?>
                                                <td data-label="Date" class="px-4 py-4 lg:px-6 lg:py-6 md:text-center w-full md:w-60 lg:w-auto">
                                                    <div class="flex flex-col space-y-2">
                                                        <span class="text-lg text-neutral-1000">Start: <?php echo esc_html( $date['start'] ); ?></span>
                                                        <span class="text-lg text-neutral-1000">End: <?php echo esc_html( $date['end'] ); ?></span>
                                                    </div>
                                                </td>
                                                <?php 
                                            }                                                
                                            
                                            if( $state ){ ?>
                                                <td data-label="State" class="px-4 py-4 lg:px-6 lg:py-6 md:text-center w-full md:w-60 lg:w-auto">
                                                    <div class="inline-block px-4 lg:px-7 py-1 space-x-2 font-semibold bg-thggreen rounded-full text-basewhite leading[120%]">
                                                        <span class="icon-UsersThree"></span><span><?php echo esc_html( $state ); ?></span>
                                                    </div>
                                                </td>
                                                <?php
                                            }
                                        ?>
                                        <td data-label="Action" class="px-4 py-4 lg:px-6 lg:py-6 md:text-center">
                                            <div class="tabbtn flex flex-wrap lg:flex-nowrap  justify-end md:justify-center items-center gap-2 lg:gap-4">
                                                <button class="w-auto md:w-full lg:w-1/2 btn btn-white bg-white border border-neutral-200 hover:bg-primary hover:border-primary hover:text-white py-3 px-6 text-xs lg:text-sm uppercase leading[120%] font-bold">Inquiry</button>
                                                <button class="w-auto md:w-full lg:w-1/2 btn btn-primary border border-primary bg-primary hover:bg-white hover:text-primary text-white py-3 px-6 text-xs lg:text-sm uppercase leading[120%] font-bold whitespace-nowrap">Book Now</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            ?>
                        </tbody>
                    </table>
                    <?php
                }
            ?>
        </div>
    </div>
    <?php
}