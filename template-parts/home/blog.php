<?php 
/**
 * Blog Section
*/

$title = get_sub_field( 'title' );
$link  = get_sub_field( 'link' );
$posts = get_sub_field( 'posts' );

$args = array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'post__in'       => $posts,
    'orderby'        => 'post__in'
);

$qry = new WP_Query( $args );

if( $title || $link || ( $posts && $qry->have_posts() ) ){ ?>
    <section class="pt-0 pb-12 md:py-30 lg:py-60">
        <div class="container">
            <?php 
                if( $title || $link ){ ?>
                    <div class="sectiontitle flex justify-between items-center" data-aos="fade-down" data-aos-delay="50" data-aos-duration="1000">
                        <?php 
                            if( $title ){ ?>
                                <h2 class="text-netrual-100 text-2xl sm:text-3xl lg:text-4xl xl:text-[40px] lg:leading-[120%] font-bold"><?php echo esc_html( $title ); ?></h2>
                                <?php 
                            }

                            if( $link ){ ?>
                                <a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>" class="btn btn-primary border border-primary text-primary py-3 px-12 hover:bg-primary hover:text-white font-bold uppercase text-sm leading[120%]"><?php echo esc_html( $link['title'] ); ?></a>
                                <?php
                            }
                        ?>
                    </div>
                    <?php 
                }

                if( $posts && $qry->have_posts() ){ ?>
                    <div class="blogwrapper mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-0">
                        <?php
                            while( $qry->have_posts() ){
                                $qry->the_post(); ?>
                                <a href="<?php the_permalink(); ?>" class="bloglist block relative transition-all duration-150 ease-linear footeranimation-faderight" data-aos="fade-right" data-aos-delay="50" data-aos-easing="ease-in-out" data-aos-duration="1000">
                                    <?php 
                                        the_post_thumbnail( 'full', array( 'class' => 'grayscale w-full h-80 md:lg-96 lg:h-120 xl:h-[596px] object-cover' ) );
                                    ?>                                    
                                    <div class="p-6 absolute left-0 right-0 bottom-0">
                                        <h3 class="text-2xl font-semibold leading[120%] text-white"><?php the_title(); ?></h3>
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
    </section>
    <?php
}