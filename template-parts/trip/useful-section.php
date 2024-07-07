<?php
/**
 * UseFul Section
*/

$title = get_sub_field( 'title' );
$infos = get_sub_field( 'infos' );

if( $title || $infos ){ ?>
    <div id="thg-usefulinfo" class="py-12 md:py-24 lg:pt-64 lg:pb-52">
        <div class="container">
            <?php
                if( $title ){ ?>
                    <div class="sectiontitle">
                        <h2 class="text-netrual-100 text-2xl sm:text-3xl lg:text-4xl xl:text-[40px] lg:leading-[120%] font-bold mb-8"><?php echo esc_html( $title ); ?></h2>
                    </div>
                    <?php
                }

                if( $infos ){ ?>
                    <div class="grid grid-cols-2 lg:grid-cols-3 gap-2 sm:gap-4 lg:gap-8">
                        <?php
                            foreach( $infos as $info ){
                                $title = $info['title'];
                                $image = $info['image'];
                                $link  = $info['link'];
                                
                                if( $link ) echo '<a href="' . esc_url( $link['url'] ) . '" target="' . esc_attr( $link['target'] ) . '" class="block p-8 h-50 bg-primarylight border border-primarylight flex justify-center items-center hover:border-primary">';
                                
                                if( $title || $image ){ ?>                                
                                    <div class="flex flex-col justify-center items-center text-center space-y-2">
                                        <?php
                                            if( $image ) echo wp_get_attachment_image( $image['ID'], 'full' );
                                            if( $title ) echo '<h3 class="text-lg md:text-xl lg:text-2xl font-semibold text-neutral-1000 leading-[120%]">' . esc_html( $title ) . '</h3>';
                                        ?>                                        
                                    </div>                                
                                    <?php
                                }

                                if( $link ) echo '</a>';
                            }
                        ?>
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
    <?php
}