<?php
/**
 * FAQ Section
*/

$title = get_sub_field( 'title' );
$faqs  = get_sub_field( 'faqs' );

if( $title || $faqs ){ ?>
    <div id="thg-faq" class="py-12 md:py-16 lg:">
        <div class="container">
            <?php 
                if( $title ){ ?>
                    <div class="sectiontitle">
                        <h2 class="text-netrual-100 text-2xl sm:text-3xl lg:text-4xl xl:text-[40px] lg:leading-[120%] font-bold mb-8"><?php echo esc_html( $title ); ?></h2>
                    </div>
                    <?php 
                }
                
                if( $faqs ){ ?>
                    <div class="mt-8 expansionWrapper">
                        <?php 
                            $i = 1;
                            foreach( $faqs as $faq ){ ?>
                                <div class="expansionlist">
                                    <a href="#" class="flex items-center justify-between font-semibold text-neutral-1000 text-2xl leading-[120%] hover:text-primary gap-8<?php echo ( $i == 1 ) ? ' active' : ''; ?>">
                                        <span><?php echo esc_html( $faq['title'] ); ?></span>
                                        <span class="icon-box icon-<?php echo ( $i == 1 ) ? 'minus' : 'plus'; ?>"></span>
                                    </a>
                                    <div class="expansioncontent w-full text-neutral-800">
                                        <div class="w-full lg:w-1/2">
                                            <?php echo wpautop( wp_kses_post( $faq['text'] ) ); ?>
                                        </div>
                                    </div>
                                </div>                                
                                <?php
                                $i++; 
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