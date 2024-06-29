<?php 
/**
 * Popular Section
*/

$title = get_sub_field( 'title' );
$trips = get_sub_field( 'trips' );

if( $trips ){ ?>
    <section class="popularTrek py-12 md:py-16 lg:py-20">
        <div class="container">
            <?php
                if( $title ){ ?>
                    <div class="sectiontitle" data-aos="fade-down" data-aos-delay="50" data-aos-duration="1000">
                        <h2 class="text-netrual-100 text-3xl md:text-4xl lg:text-[40px] lg:leading-[120%] font-bold mb-4 md:mb-8 lg:mb-14 max-w-[628px]"><?php echo esc_html( $title ); ?></h2>
                    </div>
                    <?php
                }                
            ?>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8">
                <?php
                    $i = 50;
                    foreach( $trips as $trip ){ 
                        $image      = $trip['image'];
                        $date       = $trip['date'];
                        $title      = $trip['title'];
                        $difficulty = $trip['difficulty'];
                        $days       = $trip['days'];
                        $height     = $trip['height'];
                        $link       = $trip['link']; ?>
                        <a href="<?php echo esc_url( $link['url'] )?>" target="<?php echo esc_attr( $link['target'] ); ?>" class="fadedownanimate" data-aos="fade-down" data-aos-delay="<?php echo absint( $i ); ?>" data-aos-duration="1000">
                            <?php
                                if( $image ){ ?>
                                    <div class="relative overflow-hidden">
                                        <?php 
                                            echo wp_get_attachment_image( $image['ID'], 'full', false, array( 'class' => 'transition ease-linear duration-150 hover:scale-110' ) );
                                            
                                            if( $date ){ ?>
                                                <div class="absolute top-0 right-0">
                                                    <div class="date flex bg-primary items-center p-1 md:p-2 lg:p-3 space-x-2 md:space-x-3">
                                                        <span><i class="text-white text-xl md:text-2xl icon-CalendarDots"></i></span>
                                                        <span class="text-white font-semibold text-base"><?php echo esc_html( $date ); ?></span>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        ?>
                                    </div>
                                    <?php      
                                }

                                if( $title || $difficulty || $days || $height ){ ?>                                
                                    <div class="trekdescription py-4">
                                        <?php
                                            if( $title ) echo '<h3 class="text-netrual-100 text-xl md:text-2xl font-bold mb-3 transition ease-linear delay-150 hover:text-primary">' . esc_html( $title ) . '</h3>';

                                            if( $difficulty || $days || $height ){ ?>                                        
                                                <div class="flex items-center space-x-6">
                                                    <?php 
                                                        if( $difficulty ){ ?>
                                                            <div class="flex items-center space-x-1">
                                                                <span><i class="text-base md:text-lg text-neutral-800 icon-chart"></i></span>
                                                                <span class="text-base md:text-lg text-neutral-800 font-semibold"><?php echo esc_html( $difficulty ); ?></span>
                                                            </div>
                                                            <?php
                                                        }

                                                        if( $days ){ ?>
                                                            <div class="flex items-center space-x-1">
                                                                <span><i class="text-base md:text-lg text-neutral-800 icon-clock"></i></span>
                                                                <span class="text-base md:text-lg text-neutral-800 font-semibold"><?php echo esc_html( $days ); ?></span>
                                                            </div>
                                                            <?php
                                                        }

                                                        if( $height ){ ?>
                                                            <div class="flex items-center space-x-1">
                                                                <span><i class="text-base md:text-lg text-neutral-800 icon-mountain"></i></span>
                                                                <span class="text-base md:text-lg text-neutral-800 font-semibold"><?php echo esc_html( $height ); ?></span>
                                                            </div>
                                                            <?php
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
                        </a>
                        <?php
                        $i = $i + 100;
                    }
                ?>
            </div>
        </div>
    </section>
    <?php
}