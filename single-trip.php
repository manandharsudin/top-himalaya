<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Top_Himalaya
 */

get_header(); ?>

    <section class="horizontaltabWrapper relative">
		<?php
            while ( have_posts() ) : the_post();            
                if( have_rows( 'trip_details' ) ):?>
                    <div class="tablinkwrapper border-b border-black/20 sticky top-0 bg-white w-full z-50">
                        <div class="container">
                            <div class="flex items-center justify-between box-border">
                                <ul class="tablinks flex items-center gap-3 overflow-x-auto">
                                    <?php 
                                        while( have_rows( 'trip_details' ) ) : the_row();
                                            if( get_row_layout() == 'overview_section' ) :
                                                echo '<li><a href="#thg-overview" class="active inline-block py-4 lg:py-9 px-2 xl:px-4 text-lg rubik">Overview</a></li>';
                                            elseif( get_row_layout() == 'gallery_section' ) :
                                                echo '<li><a href="#thg-gallery" class="inline-block py-4 lg:py-9 px-2 xl:px-4 text-lg rubik">Gallery</a></li>';
                                            elseif( get_row_layout() == 'itinerary_section' ) :
                                                echo '<li><a href="#thg-itenerary" class="inline-block py-4 lg:py-9 px-2 xl:px-4 text-lg rubik">Itinerary</a></li>';
                                            elseif( get_row_layout() == 'map_section' ) :
                                                echo '<li><a href="#thg-map" class="inline-block py-4 lg:py-9 px-2 xl:px-4 text-lg rubik">Map</a></li>';
                                            elseif( get_row_layout() == 'included_section' ) :
                                                echo '<li><a href="#thg-included" class="inline-block py-4 lg:py-9 px-2 xl:px-4 text-lg rubik">Included</a></li>';            
                                            elseif( get_row_layout() == 'fixed_dates_section' ) :
                                                echo '<li><a href="#thg-fixdates" class="inline-block py-4 lg:py-9 px-2 xl:px-4 text-lg rubik">Fixed Dates</a></li>';
                                            elseif( get_row_layout() == 'useful_info_section' ) :
                                                echo '<li><a href="#thg-usefulinfo" class="inline-block py-4 lg:py-9 px-2 xl:px-4 text-lg rubik">Useful Info</a></li>';
                                            elseif( get_row_layout() == 'reviews_section' ) :
                                                echo '<li><a href="#thg-reviews" class="inline-block py-4 lg:py-9 px-2 xl:px-4 text-lg rubik">Reviews</a></li>';
                                            elseif( get_row_layout() == 'faq_section' ) :
                                                echo '<li><a href="#thg-faq" class="inline-block py-4 lg:py-9 px-2 xl:px-4 text-lg rubik">Faq</a></li>';
                                            endif;
                                        endwhile;
                                    ?>
                                </ul>
                                <div class="hidden tabbtn lg:flex items-center gap-4">
                                    <button class="openmodelbtn btn btn-white bg-white border border-neutral-200 hover:bg-primary hover:border-primary hover:text-white py-3 px-6 text-sm uppercase leading[120%] font-bold" data-target="#inquirypopup">Inquiry</button>
                                    <a href="<?php echo esc_url( add_query_arg( 'trip_id', get_the_ID(), top_himalaya_get_page_template_url( 'templates/booking.php' ) ) ); ?>" class="btn btn-primary border border-primary bg-primary hover:bg-white hover:text-primary text-white py-3 px-6 text-sm uppercase leading[120%] font-bold whitespace-nowrap">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-contents">
                        <?php
                            while( have_rows( 'trip_details' ) ) : the_row();
                                if( get_row_layout() == 'overview_section' ) :
                                    get_template_part( 'template-parts/trip/overview', 'section' );
                                elseif( get_row_layout() == 'gallery_section' ) :
                                    get_template_part( 'template-parts/trip/gallery', 'section' );
                                elseif( get_row_layout() == 'itinerary_section' ) :
                                    get_template_part( 'template-parts/trip/itinerary', 'section' );
                                elseif( get_row_layout() == 'map_section' ) :
                                    get_template_part( 'template-parts/trip/map', 'section' );
                                elseif( get_row_layout() == 'included_section' ) :
                                    get_template_part( 'template-parts/trip/included', 'section' );
                                elseif( get_row_layout() == 'fixed_dates_section' ) :
                                    get_template_part( 'template-parts/trip/fixed', 'section' );
                                elseif( get_row_layout() == 'useful_info_section' ) :
                                    get_template_part( 'template-parts/trip/useful', 'section' );
                                elseif( get_row_layout() == 'reviews_section' ) :
                                    get_template_part( 'template-parts/trip/reviews', 'section' );
                                elseif( get_row_layout() == 'faq_section' ) :
                                    get_template_part( 'template-parts/trip/faq', 'section' );
                                endif;                                
                            endwhile;
                        ?>
                    </div>
                    <?php
                endif;
            endwhile; // End of the loop.
		?>
    </section>

<?php
get_footer();