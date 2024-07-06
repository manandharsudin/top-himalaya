<?php
/**
 * Climbing Section
*/

$title  = get_sub_field( 'title' );
$summer = get_sub_field( 'summer' );
$winter = get_sub_field( 'winter' );

if( $title || $summer || $winter ){ ?>
    <section class="pt-12 md:pt-20 lg:pt-40 pb-12 md:pb-20 lg:pb-30">
        <div class="container">
            <?php 
                if( $title ) echo '<h2 class="text-netrual-900 text-2xl sm:text-3xl lg:text-4xl xl:text-[40px] lg:leading-[120%] font-bold mb-3">' . esc_html( $title ) . '</h2>';

                if( $summer || $winter ){ ?>            
                    <div class="mt-8 grid md:grid-cols-2 gap-4 md:gap-10">
                        <?php 
                            if( $summer ){
                                $summer_title = $summer['title'];
                                $summer_lists = $summer['lists']; ?>
                                <div class="space-y-4 md:space-y-6">
                                    <h3 class="text-3xl font-semibold leading-[120%]"><?php echo esc_html( $summer_title ); ?></h3>
                                    <?php
                                        if( $summer_lists ){
                                            foreach( $summer_lists as $list ){ ?>
                                                <div class="flex items-center gap-3">
                                                    <span class="icon-mountain text-3xl"></span>
                                                    <span class="text-lg font-semibold"><?php echo esc_html( $list['list'] ); ?></span>
                                                </div>
                                                <?php
                                            }
                                        }
                                    ?>
                                </div>
                                <?php 
                            }

                            if( $winter ){
                                $winter_title = $winter['title'];
                                $winter_lists = $winter['lists']; ?>
                                <div class="space-y-6">
                                    <h3 class="text-3xl font-semibold leading-[120%]"><?php echo esc_html( $winter_title ); ?></h3>
                                    <?php
                                        if( $winter_lists ){
                                            foreach( $winter_lists as $list ){ ?>
                                                <div class="flex items-center gap-3">
                                                    <span class="icon-mountain text-3xl"></span>
                                                    <span class="text-lg font-semibold"><?php echo esc_html( $list['list'] ); ?></span>
                                                </div>
                                                <?php
                                            }
                                        }
                                    ?>
                                </div>
                                <?php 
                            }
                        ?>
                    </div>
                    <?php 
                }
            ?>
        </div>
    </section>
    <?php
}