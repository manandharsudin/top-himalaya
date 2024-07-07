<?php
/**
 * Included Section
*/

$included = get_sub_field( 'included' );
$excluded = get_sub_field( 'excluded' );

if( $included || $excluded ){ ?>
    <div id="thg-included" class="py-12 md:py-16 lg:py-20">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <?php
                    if( $included ){
                        $title = $included['title'];
                        $lists = $included['lists']; ?>
                        <div>
                            <?php 
                                if( $title ){ ?>
                                    <div class="sectiontitle">
                                        <h2 class="text-netrual-100 text-2xl sm:text-3xl lg:text-4xl xl:text-[40px] lg:leading-[120%] font-bold mb-6"><?php echo esc_html( $title ); ?></h2>
                                    </div>
                                    <?php
                                }
                                
                                if( $lists ){ ?>
                                    <ul class="flex flex-col space-y-6">
                                        <?php
                                            foreach( $lists as $list ){ ?>
                                                <li class="flex space-x-3">
                                                    <span class="text-lg icon-check-circle text-primary"></span>
                                                    <span class="text-neutral-800 text-base md:text-lg"><?php echo wp_kses_post( $list['list'] ); ?></span>
                                                </li>
                                                <?php
                                            }
                                        ?>
                                    </ul>
                                    <?php
                                }
                            ?>
                        </div>
                        <?php
                    }

                    if( $excluded ){ 
                        $title = $excluded['title'];
                        $lists = $excluded['lists']; ?>
                        <div>
                            <?php 
                                if( $title ){ ?>
                                    <div class="sectiontitle">
                                        <h2 class="text-netrual-100 text-2xl sm:text-3xl lg:text-4xl xl:text-[40px] lg:leading-[120%] font-bold mb-4"><?php echo esc_html( $title ); ?></h2>
                                    </div>
                                    <?php
                                }
                                
                                if( $lists ){ ?>
                                    <ul class="flex flex-col space-y-6">
                                        <?php
                                            foreach( $lists as $list ){ ?>
                                                <li class="flex space-x-3">
                                                    <span class="text-lg icon-x-circle text-red-400"></span>
                                                    <span class="text-neutral-800 text-base md:text-lg"><?php echo wp_kses_post( $list['list'] ); ?></span>
                                                </li>
                                                <?php
                                            }
                                        ?>
                                    </ul>
                                    <?php
                                }
                            ?>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
    <?php
}