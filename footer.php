<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Top_Himalaya
*/

    do_action( 'top_himalaya_before_footer' );

    $newsletter_title   = get_field( 'newsletter_title', 'option' );
    $footer_newsletter  = get_field( 'footer_newsletter', 'option' );
    $footer_logo        = get_field( 'footer_logo', 'option' );
    $footer_content     = get_field( 'footer_content', 'option' );
    $footer_link        = get_field( 'footer_link', 'option' );
    $partners           = get_field( 'partners', 'option' );
    $footer_two_title   = get_field( 'footer_two_title', 'option' );
    $footer_two_links   = get_field( 'footer_two_links', 'option' );
    $footer_three_title = get_field( 'footer_three_title', 'option' );
    $footer_three_links = get_field( 'footer_three_links', 'option' );
    $footer_four_title  = get_field( 'footer_four_title', 'option' );
    $social_links       = get_field( 'social_links', 'option' );
    $email              = get_field( 'email', 'option' );
    $phone              = get_field( 'phone', 'option' );

    if( $footer_newsletter && ! is_page_template( array( 'templates/about-detail.php', 'templates/contact-us.php' ) ) ){ ?>
        <section class="pt-12 md:pt-18 lg:pt-36 pb-11">
            <div class="container">
                <div class="flex justify-center flex-col items-center" data-aos="fade-down" data-aos-delay="50" data-aos-duration="1000">
                    <?php 
                        if( $newsletter_title ){ ?>
                            <div class="sectiontitle  text-center mb-6">
                                <h2 class="text-netrual-100 text-2xl sm:text-3xl lg:text-4xl xl:text-[40px] lg:leading-[120%] font-bold"><?php echo esc_html( $newsletter_title ); ?></h2>
                            </div>
                            <?php 
                        } 
                    ?>
                    <div class="flex w-full min:w-full md:min-w-[552px] md:w-auto">
                        <?php echo do_shortcode( wp_kses_post( $footer_newsletter ) ); ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
    ?>

    <footer id="colophon" class="site-footer">
        <div><img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/footer-mountain.png" alt="footer bg"/></div>
        <div class="py-5 bg-footer -mt-1">
            <div class="container">
                <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 lg:gap-4 xl:gap-24 pb-14 items-center">
                    <?php 
                        if( $footer_logo || $footer_content || $partners ){ ?>
                            <div class="lg:col-span-2">
                                <?php 
                                    if( $footer_logo ){
                                        echo wp_get_attachment_image( 
                                            $footer_logo['ID'], 
                                            'full', 
                                            false, 
                                            array( 
                                                'class'             => 'footeranimation-faderight',
                                                'data-aos'          => 'fade-right',
                                                'data-aos-easing'   => 'ease-in-out',
                                                'data-aos-delay'    => '50',
                                                'data-aos-duration' => '1000',
                                            )
                                        );
                                    }

                                    if( $footer_content ){ ?>                                
                                        <div class="footeranimation-faderight mt-4 text-white" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-duration="1000">
                                            <?php 
                                                echo wpautop( wp_kses_post( $footer_content ) ); 

                                                if( $footer_link ){ ?>
                                                    <a href="<?php echo esc_url( $footer_link['url'] ); ?>" target="<?php echo esc_attr( $footer_link['target'] ); ?>" class="block mt-4 underline"><?php echo esc_html( $footer_link['title'] ); ?></a>
                                                    <?php
                                                }
                                            ?>
                                        </div>
                                        <?php
                                    }

                                    if( $partners ){ ?>
                                        <div class="mt-4 flex items-center gap-4">
                                            <?php
                                                $i = 50;
                                                foreach( $partners as $partner ){
                                                    echo wp_get_attachment_image( 
                                                        $partner['image']['ID'], 
                                                        'full', 
                                                        false, 
                                                        array( 
                                                            'class'             => 'h-9 footeranimation-faderight',
                                                            'data-aos'          => 'fade-right',
                                                            'data-aos-easing'   => 'ease-in-out',
                                                            'data-aos-delay'    => $i,
                                                            'data-aos-duration' => '1000',
                                                        )
                                                    );
                                                    $i = $i + 100;
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

                    <div class="lg:col-span-3 flex flex-wrap justify-between gap-8 sm:gap-4 xl:gap-16">
                        <?php 
                            if( $footer_two_title || $footer_two_links ){ ?>
                                <div class="basis-full sm:basis-1/4 xl:basis-auto">
                                    <?php 
                                        if( $footer_two_title ){ ?>
                                            <h3 class="footeranimation-faderight font-semibold text-white uppercase"  data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="50" data-aos-duration="1000"><?php echo esc_html( $footer_two_title ); ?></h3>
                                            <?php 
                                        }
                                        
                                        if( $footer_two_links ){ ?>
                                            <ul class="mt-4 flex flex-col space-y-4">
                                                <?php
                                                    $j = 50; 
                                                    foreach( $footer_two_links as $links ){ ?>
                                                        <li>
                                                            <a href="<?php echo esc_url( $links['link']['url'] );?>" target="<?php echo esc_attr( $links['link']['target'] ); ?>" aria-label="<?php echo esc_attr( $links['link']['title'] ); ?>" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="<?php echo absint( $j ); ?>" data-aos-duration="1000" class="footeranimation-faderight inline-block text-sm font-medium text-white hover:text-primary"><?php echo esc_html( $links['link']['title'] ); ?></a>
                                                        </li>
                                                        <?php
                                                        $j = $j + 100;
                                                    }
                                                ?>
                                            </ul>
                                            <?php 
                                        } 
                                    ?>
                                </div>
                                <?php 
                            }

                            if( $footer_three_title || $footer_three_links ){ ?>
                                <div class="basis-full sm:basis-1/4 xl:basis-auto">
                                    <?php 
                                        if( $footer_three_title ){ ?>
                                            <h3 class="footeranimation-faderight font-semibold text-white uppercase"  data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="50" data-aos-duration="1000"><?php echo esc_html( $footer_three_title ); ?></h3>
                                            <?php 
                                        }
                                        
                                        if( $footer_three_links ){ ?>
                                            <ul class="mt-4 flex flex-col space-y-4">
                                                <?php
                                                    $j = 50; 
                                                    foreach( $footer_three_links as $links ){ ?>
                                                        <li>
                                                            <a href="<?php echo esc_url( $links['link']['url'] );?>" target="<?php echo esc_attr( $links['link']['target'] ); ?>" aria-label="<?php echo esc_attr( $links['link']['title'] ); ?>" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="<?php echo absint( $j ); ?>" data-aos-duration="1000" class="footeranimation-faderight inline-block text-sm font-medium text-white hover:text-primary"><?php echo esc_html( $links['link']['title'] ); ?></a>
                                                        </li>
                                                        <?php
                                                        $j = $j + 100;
                                                    }
                                                ?>
                                            </ul>
                                            <?php 
                                        } 
                                    ?>
                                </div>
                                <?php 
                            }

                            if( $footer_four_title || $social_links || $email || $phone ){ ?>                        
                                <div class="basis-full sm:basis-auto">
                                    <?php
                                        if( $footer_four_title ){ ?>
                                            <h3 class="footeranimation-faderight font-semibold text-white uppercase"  data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="50" data-aos-duration="1000"><?php echo esc_html( $footer_four_title ); ?></h3>
                                            <?php 
                                        }

                                        if( $social_links ){ ?>                                    
                                            <div class="footeranimation-faderight inline-block mt-4 flex items-center gap-4 xl:gap-6" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="50" data-aos-duration="1000">
                                                <?php 
                                                    foreach( $social_links as $link ){ ?>
                                                        <a href="<?php echo esc_url( $link['link'] ); ?>" target="_blank">
                                                            <div class="transition-all ease-linear hover:text-primary text-white">
                                                                <span class="text-xl xl:text-2xl icon-<?php echo esc_attr( $link['icons'] ); ?>"></span>
                                                            </div>
                                                        </a>
                                                        <?php
                                                    }
                                                ?>
                                            </div>
                                            <?php
                                        }

                                        if( $email || $phone ){ ?>
                                            <div class="mt-8 flex flex-col space-y-4">
                                                <?php 
                                                    if( $email ){ ?>
                                                        <div class="footeranimation-faderight flex items-center" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-easing="ease-in-out" data-aos-delay="150" data-aos-duration="1000">
                                                            <a href="<?php echo esc_url( 'mailto:' . sanitize_email( $email ) ); ?>" class="flex items-center space-x-3 text-white">
                                                                <span class="icon-mail text-xl xl:text-2xl"></span>
                                                                <span class="text-sm xl:text-base"><?php echo esc_html( $email ); ?></span>
                                                            </a>
                                                        </div>
                                                        <?php 
                                                    }
                                                    
                                                    if( $phone ){ ?>
                                                        <div class="footeranimation-faderight flex items-center" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-easing="ease-in-out" data-aos-delay="250" data-aos-duration="1000">
                                                            <a href="<?php echo esc_url( 'tel:' . preg_replace( '/[^\d+]/', '', $phone ) ); ?>" class="flex items-center space-x-3 text-white">
                                                                <span class="icon-mail text-xl xl:text-2xl"></span>
                                                                <span class="text-sm xl:text-base"><?php echo esc_html( $phone ); ?></span>
                                                            </a>
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
                    </div>
                </div>

                <div class="border-t border-white copyright pt-3">
                    <div class="flex flex-wrap gap-1 justify-between text-white text-sm lg:text-base">
                        <p>All rights reserved ©️ Top Himalaya Guide <?php echo date( 'Y' ); ?></p>
                        <p><span>Design and Developed by </span<span><a href="https://codeilo.com/" target="_blank" class="text-white hover:text-primary">Codeilo</a></span></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div id="searchpopup" class="popup w-screen h-screen fixed inset-0 flex bg-gray-900 bg-opacity-50 hidden z-50 overflow-hidden">
        <div class="w-full popup-content max-h-[110px]">
            <div class="bg-white">
                <div class="container">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>