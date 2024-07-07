<?php
/**
 * Gallery Section
*/

$title   = get_sub_field( 'title' );
$gallery = get_sub_field( 'gallery' );

if( $title || $gallery ){ ?>
    <div id="thg-gallery" class="py-12 md:py-16 lg:py-20 bg-secondarylight">
        <div class="container">
            <?php
                if( $title ){ ?>
                    <div class="sectiontitle">
                        <h2 class="text-netrual-100 text-2xl sm:text-3xl lg:text-4xl xl:text-[40px] lg:leading-[120%] font-bold"><?php echo esc_html( $title ); ?></h2>
                    </div>
                    <?php 
                }

                if( $gallery ){ ?>
                    <div class="relative">
                        <div class="pt-6 gallerySlider relative overflow-hidden">
                            <?php 
                                foreach( $gallery as $gal ){
                                    $image = $gal['image'];
                                    $link = $gal['link'];
                                    if( $image ){ ?>
                                        <div class="slickbox">
                                            <?php 
                                                if( $link ) echo '<a href="' . esc_url( $link['url']) . '" target="' . esc_attr( $link['target'] ) . '">';
                                                echo wp_get_attachment_image( $image['ID'], 'full', false, array( 'class' => 'w-full object-cover h-40 sm:h-52 lg:h-[304px]' ) ); 
                                                if( $link ) echo '</a>';
                                            ?>                                            
                                        </div>
                                    <?php
                                    }
                                }
                            ?>
                        </div>
                        <div class="gallerySlider__arrows flex items-center gap-3 absolute right-0 bottom-0"></div>
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
    <?php
}