<?php 
/**
 * Popular Section
*/

$title = get_sub_field( 'title' );
$trips = get_sub_field( 'trips' );

$args = array(
    'post_type'      => 'trip',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'post__in'       => $trips,
    'orderby'        => 'post__in'
);

$qry = new WP_Query( $args );

if( $trips && $qry->have_posts() ){ ?>
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
                    while( $qry->have_posts() ){
                        $qry->the_post();
                        if( have_rows( 'trip_details' ) ){ 
                            while( have_rows( 'trip_details' ) ) : the_row(); 
                                if( get_row_layout() == 'overview_section' ){ 
                                    $difficulty    = get_sub_field( 'difficulty' );
                                    $duration      = get_sub_field( 'duration' );
                                    $max_elevation = get_sub_field( 'max_elevation' );
                                    $date          = get_sub_field( 'date' ); ?>
                                    <a href="<?php the_permalink(); ?>" class="fadedownanimate" data-aos="fade-down" data-aos-delay="<?php echo absint( $i ); ?>" data-aos-duration="1000">
                                        <div class="relative overflow-hidden">
                                            <?php 
                                                the_post_thumbnail( 'full', array( 'class' => 'transition ease-linear duration-150 hover:scale-110' ) );

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
                                        <div class="trekdescription py-4">
                                            <h3 class="text-netrual-100 text-xl md:text-2xl font-bold mb-3 transition ease-linear delay-150 hover:text-primary"><?php the_title(); ?></h3>                                            
                                            <?php
                                                if( $difficulty || $duration || $max_elevation ){ ?>                                        
                                                    <div class="flex items-center space-x-6">
                                                        <?php 
                                                            if( $difficulty ){ ?>
                                                                <div class="flex items-center space-x-1">
                                                                    <span><i class="text-base md:text-lg text-neutral-800 icon-chart"></i></span>
                                                                    <span class="text-base md:text-lg text-neutral-800 font-semibold"><?php echo esc_html( $difficulty ); ?></span>
                                                                </div>
                                                                <?php
                                                            }
    
                                                            if( $duration ){ ?>
                                                                <div class="flex items-center space-x-1">
                                                                    <span><i class="text-base md:text-lg text-neutral-800 icon-clock"></i></span>
                                                                    <span class="text-base md:text-lg text-neutral-800 font-semibold"><?php echo esc_html( $duration ); ?></span>
                                                                </div>
                                                                <?php
                                                            }
    
                                                            if( $max_elevation ){ ?>
                                                                <div class="flex items-center space-x-1">
                                                                    <span><i class="text-base md:text-lg text-neutral-800 icon-mountain"></i></span>
                                                                    <span class="text-base md:text-lg text-neutral-800 font-semibold"><?php echo esc_html( $max_elevation ); ?></span>
                                                                </div>
                                                                <?php
                                                            }
                                                        ?>
                                                    </div>
                                                    <?php
                                                }
                                            ?>
                                        </div>
                                    </a>
                                    <?php
                                }
                            endwhile;
                        }
                        $i = $i + 100;                    
                    }
                ?>
            </div>
        </div>
    </section>
    <?php
}
wp_reset_postdata();