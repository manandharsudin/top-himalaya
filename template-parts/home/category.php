<?php 
/**
 * Category Section
*/

$categories = get_sub_field( 'categories' );

if( $categories ){ ?>
    <section id="mycategory" class="category lg:grid lg:grid-cols-4">
        <?php
            foreach( $categories as $category ){ 
                $image       = $category['image'];
                $hover_image = $category['hover_image'];
                $title       = $category['title'];
                $subtitle    = $category['subtitle'];
                $difficulty  = $category['difficulty'];
                $height      = $category['height'];
                $link        = $category['link']; ?>
                <div class="mx-1 lg:mx-0 categorylist bg-secondarylight pt-24 cursor-pointer overflow-hidden">
                    <div class="px-4 flex flex-col items-center relative z-20" data-aos="fade-down" data-aos-delay="50" data-aos-duration="1000">
                        <?php 
                            if( $subtitle ) echo '<h5 class="text-primary font-semibold">' . esc_html( $subtitle ) . '</h5>';
                            if( $title ) echo '<h3 class="text-[30px] leading[120%] text-neutral-1000 font-semibold mb-4">' . esc_html( $title ) . '</h5>';

                            if( $difficulty || $height ){ ?>
                                <div class="flex flex-col justify-center shortinfo space-y-4 lg:opacity-0 lg:visibility-hidden transition delay-150 ease-linear duration-150">
                                    <div class="flex justify-between space-x-16">
                                        <?php
                                            if( $difficulty ){ ?>
                                                <div class="flex items-center space-x-1">
                                                    <span><i class="text-base md:text-lg text-neutral-800 icon-chart"></i></span>
                                                    <span class="text-base md:text-lg text-neutral-800 font-semibold"><?php echo esc_html( $difficulty ); ?></span>
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
                                        if( $link ){ ?>
                                            <a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>" class="flex items-center space-x-1 text-sm font-medium self-center hover:text-primary">
                                                <span><?php echo esc_html( $link['title'] ); ?></span> 
                                                <span><i class="icon-chevrons-right text-xl"></i></span>
                                            </a>
                                            <?php
                                        }
                                    ?>                                    
                                </div>
                                <?php
                            }
                        ?>
                    </div>
                    <?php
                        if( $image || $hover_image ){ ?>
                            <div class="imagebox relative">
                                <?php
                                    echo wp_get_attachment_image( $image['ID'], 'full', false, array( 'class' => 'mountain w-full transition-all duration-150 ease-linear aspect-[2/4]' ) );
                                    echo wp_get_attachment_image( $hover_image['ID'], 'full', false, array( 'class' => 'cloud w-full absolute bottom-0 mix-blend-lighten transition-all duration-150 ease-linear' ) );
                                ?>
                            </div>
                            <?php
                        }
                    ?>
                </div>
                <?php                
            }
        ?>
    </section>
    <?php
}