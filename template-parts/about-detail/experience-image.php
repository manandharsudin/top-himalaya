<?php
/**
 * Experience with Image section
*/

$title       = get_sub_field( 'title' );
$experiences = get_sub_field( 'experiences' );
$image       = get_sub_field( 'image' );

if( $title || $experiences || $image ){ ?>
    <section class="py-12 md:py-20 bg-secondarylight">
        <div class="container">
            <div class="grid md:grid-cols-2 gap-8 md:gap-16">
                <div>
                    <?php 
                        if( $title ) echo '<h2 class="text-netrual-100 text-2xl sm:text-3xl lg:text-4xl xl:text-[40px] lg:leading-[120%] font-bold mb-3">' . esc_html( $title ) . '</h2>';

                        if( $experiences ){ ?>                    
                            <div class="mt-8">
                                <table class="w-full">
                                    <tbody>
                                        <?php 
                                            foreach( $experiences as $experience ){ ?>
                                                <tr class="odd:bg-secondary/10">
                                                    <td class="p-4">
                                                        <div class="flex items-center justify-between">
                                                            <span class="text-lg font-semibold leading-[120%]"><?php echo esc_html( $experience['title'] ); ?></span>
                                                            <span class="text-lg font-semibold leading-[120%]"><?php echo esc_html( $experience['subtitle'] ); ?></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php 
                        }
                    ?>
                </div>

                <?php 
                    if( $image ){ ?>
                        <picture>
                            <?php echo wp_get_attachment_image( $image['ID'], 'full', false, array( 'class' => 'w-full' ) ); ?>
                        </picture>
                        <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <?php
}