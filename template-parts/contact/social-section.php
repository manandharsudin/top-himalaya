<?php
/**
 * Social Section
*/

$title = get_sub_field( 'title' );
$icons = get_sub_field( 'icons' );

if( $title || $icons ){ ?>
    <section class="pb-12">
        <div class="container">
            <div class="flex justify-center flex-col items-center">
                <?php 
                    if( $title ) echo '<h2 class="text-netrual-100 text-3xl md:text-4xl lg:text-[40px] lg:leading-[120%] font-bold">' . esc_html( $title ) . '</h2>';

                    if( $icons ){ ?>                
                        <div class="mt-6 flex items-center gap-4 xl:gap-6">
                            <?php 
                                foreach( $icons as $icon ){ ?>
                                    <a href="<?php echo esc_url( $icon['link'] ); ?>" target="_blank">
                                        <div class="transition-all ease-linear hover:text-primary text-neutral-1000">
                                            <span class="text-xl xl:text-2xl icon-<?php echo esc_attr( $icon['icon'] ); ?>"></span>
                                        </div>
                                    </a>
                                    <?php
                                }
                            ?>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <?php
}