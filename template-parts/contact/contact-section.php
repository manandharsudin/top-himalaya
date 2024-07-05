<?php
/**
 * Contact Section
*/

$location_label = get_sub_field( 'location_label' );
$location       = get_sub_field( 'location' );
$email_label    = get_sub_field( 'email_label' );
$email          = get_sub_field( 'email' );
$phone_label    = get_sub_field( 'phone_label' );
$phone          = get_sub_field( 'phone' );

if( ( $location && $location_label ) || ( $email && $email_label ) || ( $phone && $phone_label ) ){ ?>
    <section class="contact_detail py-12 lg:py-16">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-3">
                <?php 
                    if( $location && $location_label ){ ?>
                        <div class="flex lg:justify-center items-center py-2 lg:py-8">
                            <div class="flex items-center gap-3">
                                <span class="icon-map-pin text-primary text-3xl md:text-4xl lg:text-5xl"></span>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-primary leading-[120%]"><?php echo esc_html( $location_label ); ?></h4>
                                    <h3 class="text-lg font-semibold leading-[120%]"><?php echo esc_html( $location ); ?></h3>
                                </div>
                            </div>
                        </div>
                        <?php
                    }

                    if( $email && $email_label ){ ?>                
                        <div class="flex lg:justify-center items-center lg:border-l lg:border-r border-neutral-500 py-2 lg:py-8">
                            <div class="flex items-center gap-3">
                                <span class="icon-mail text-primary text-3xl md:text-4xl lg:text-5xl"></span>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-primary leading-[120%]"><?php echo esc_html( $email_label)?></h4>
                                    <h3 class="text-lg font-semibold leading-[120%]"><a href="<?php echo esc_url( 'mailto:' . sanitize_email( $email ) ); ?>"><?php echo esc_html( $email ); ?></a></h3>
                                </div>
                            </div>
                        </div>
                        <?php
                    }

                    if( $phone && $phone_label ){ ?>
                        <div class="flex lg:justify-center items-center py-2 lg:py-8">
                            <div class="flex items-center gap-3">
                                <span class="icon-phone text-primary text-3xl md:text-4xl lg:text-5xl"></span>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-primary leading-[120%]"><?php echo esc_html( $phone_label );?></h4>
                                    <h3 class="text-lg font-semibold leading-[120%]"><a href="tel:<?php echo preg_replace('/[^\d+]/', '', $phone); ?>"><?php echo esc_html( $phone ); ?></a></h3>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <?php
}