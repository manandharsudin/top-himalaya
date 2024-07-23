<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Top_Himalaya
*/

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
*/
function top_himalaya_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'top_himalaya_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
*/
function top_himalaya_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'top_himalaya_pingback_header' );

function top_himalaya_header_menu(){ 
    $header_menu = get_field( 'header_menu', 'option' );
    if( $header_menu ){ ?>
        <ul class="menu-main">
            <?php
                foreach( $header_menu as $menu ){
                    $menu_item      = $menu['menu_item'];
                    $mega_menu      = $menu['mega_menu'];
                    $sub_menu_item  = $menu['sub_menu_item'];
                    $mega_menu_item = $menu['mega_menu_item'];
                    $view_all       = $menu['view_all'];

                    if( $mega_menu ){ ?>
                        <li class="menu-item-has-children mega-menu-menu-items">
                            <a href="<?php echo esc_url( $menu_item['url'] ); ?>" class="flex items-center" target="<?php echo esc_attr( $menu_item['target'] ); ?>">
                                <span class="mr-2"><?php echo esc_html( $menu_item['title'] ); ?></span>
                                <i class="icon-chevron-down text-2xl"></i>
                            </a>
                            <div class="sub-menu mega-menu w-full">
                                <div class="tab-section grid grid-cols-1 lg:grid-cols-4 bg-neutral-900">
                                    <div class="tabs px-20 py-8 flex flex-col items-end justify-between">
                                        <?php 
                                            if( $mega_menu_item ){ ?>
                                                <div class="flex flex-col space-y-4">
                                                    <?php 
                                                        foreach( $mega_menu_item as $k => $item ){ ?>
                                                            <button data-tab="tab_<?php echo esc_attr( $k ); ?>" class="tab-link text-lg text-white font-semibold hover:text-primary"><?php echo esc_html( $item['title'] ); ?></button>
                                                            <?php
                                                        }
                                                    ?>
                                                </div>
                                                <?php 
                                            } 
                                        ?>
                                        <div>
                                            <a href="<?php echo esc_url( $view_all['url'] ); ?>" class="text-lg text-white font-semibold hover:text-primary" target="<?php echo esc_attr( $view_all['target'] ); ?>"><?php echo esc_html( $view_all['title'] ); ?></a>
                                        </div>
                                    </div>
                                    <?php 
                                        if( $mega_menu_item ){ ?>
                                            <div class="tab_container col-span-3 bg-neutral-1000">
                                                <?php
                                                    foreach( $mega_menu_item as $k => $item ){
                                                        $items = $item['items'];
                                                        $viewall = $item['view_all']; ?>
                                                        <div id="tab_<?php echo esc_attr( $k ); ?>" class="tab-content px-8 lg:px-20 py-8 flex flex-col justify-between">
                                                            <div class="grid grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-8">
                                                                <?php 
                                                                    foreach( $items as $it ){ ?>
                                                                        <a href="<?php echo esc_url( $it['link']['url'] ); ?>" target="<?php echo esc_attr( $it['link']['target'] ); ?>">
                                                                            <?php echo wp_get_attachment_image( $it['image']['ID'], 'full', false, array( 'class' => 'w-full h-auto lg:h-56 object-cover ease-linear duration-200 border-4 border-transparent hover:border-primary' ) ); ?>        
                                                                            <h3 class="mt-1 lg:mt-3 text-sm lg:text-base text-basewhite font-semibold hover:text-primary"><?php echo esc_html( $it['link']['title'] ); ?></h3>
                                                                        </a>    
                                                                        <?php
                                                                    }
                                                                ?>                                                                
                                                            </div>
                                                            <div class="text-right">
                                                                <a href="<?php echo esc_url( $viewall['url'] ); ?>" class="text-lg text-white font-semibold hover:text-primary" target="<?php echo esc_attr( $viewall['target'] ); ?>"><?php echo esc_html( $viewall['title'] ); ?></a>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                ?>
                                            </div><!-- .tab_container -->
                                            <?php
                                        }                                            
                                    ?>                                    
                                </div>
                            </div>
                        </li>
                        <?php
                    }else{ ?>
                        <li class="menu-item-has-children">
                            <a href="<?php echo esc_url( $menu_item['url'] ); ?>" class="flex items-center" target="<?php echo esc_attr( $menu_item['target'] ); ?>">
                                <span class="mr-2"><?php echo esc_html( $menu_item['title'] ); ?></span>
                                <i class="icon-chevron-down text-2xl"></i>
                            </a>
                            <?php 
                                if( $sub_menu_item ){ ?>
                                    <div class="sub-menu single-column-menu">
                                        <ul>
                                            <?php
                                                foreach( $sub_menu_item as $item ){ ?>
                                                    <li><a href="<?php echo esc_url( $item['item']['url'] ); ?>" target="<?php echo esc_attr( $item['item']['target'] ); ?>"><?php echo esc_html( $item['item']['title'] ); ?></a></li>
                                                    <?php
                                                }
                                            ?>
                                        </ul>
                                    </div>
                                    <?php 
                                } 
                            ?>
                        </li>
                        <?php
                    }
                }
            ?>            
            <li>
                <button class="openmodelbtn bg-white w-12 h-12 rounded-full flex justify-center items-center transition ease-linear duration-150 hover:bg-primary hover:text-white" aria-labelledby="Search" data-target="#searchpopup">
                    <i class="icon-search text-2xl"></i>
                </button>
            </li>
        </ul>
        <?php
    }
}

/**
 * Search Form
*/
function top_himalaya_search_form(){ 
    $form = '<form role="search" method="get" class="search-form form-groups flex items-center justify-center gap-4 max-w-4xl mx-auto py-8" action="' . esc_url( home_url( '/' ) ) . '">
                <label class="screen-reader-text">' . esc_html__( 'Looking for Something?', 'blossom-coach' ) . '</label>
                <input type="search" class="search-field search w-full py-4 px-6 bg-transparent rounded-none border border-neutral-500 outline-none focus:border-primary text-neutral-800" placeholder="Search" value="' . esc_attr( get_search_query() ) . '" name="s" />
                <label for="submit-field">
                    <span><i class="fa fa-search"></i></span>
                    <input type="submit" id="submit-field" class="search-submit" value="'. esc_attr_x( 'Search', 'submit button', 'blossom-coach' ) .'" />
                </label>
                <button class="close-popup transition ease-linear duration-100 hover:text-primary hover:scale-110">
                    <span class="text-xl font-light h-8 w-8">&#x2715;</span>
                </button>
            </form>';
 
    return $form;
}
add_filter( 'get_search_form', 'top_himalaya_search_form' );

function top_himalaya_related_trip(){ 
    if( is_singular( 'trip' ) ){
        global $post;
        $args = array(
            'post_type'      => 'trip',
            'post_status'    => 'publish',
            'posts_per_page' => 3,
            'post__not_in'   => array( $post->ID ),
        );

        $qry = new WP_Query( $args );

        if( $qry->have_posts() ){ ?>
            <section class="popularTrek py-12 md:py-16 lg:py-20 bg-secondarylight">
                <div class="container">
                    <div class="sectiontitle" data-aos="fade-down" data-aos-delay="50" data-aos-duration="1000">
                        <h2 class="text-netrual-100 text-3xl md:text-4xl lg:text-[40px] lg:leading-[120%] font-bold mb-4 md:mb-8 lg:mb-14">Similar Trips</h2>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">
                        <?php
                            while( $qry->have_posts() ){
                                $qry->the_post();
                                if( have_rows( 'trip_details' ) ){ 
                                    while( have_rows( 'trip_details' ) ) : the_row(); 
                                        if( get_row_layout() == 'overview_section' ){ 
                                            $text          = get_sub_field( 'text' );
                                            $difficulty    = get_sub_field( 'difficulty' );
                                            $duration      = get_sub_field( 'duration' );
                                            $max_elevation = get_sub_field( 'max_elevation' );
                                            $date          = get_sub_field( 'date' ); ?>
                                            <a href="<?php the_permalink(); ?>">
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
                                                    <p class="text-ellipse line-clamp-2 overflow-hidden text-neutral-800 mb-4"><?php echo wp_trim_words( $text, 30 ); ?></p>
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
                            }        
                        ?>                    
                    </div>
                </div>
            </section>    
            <?php
        }
        wp_reset_postdata();
    }
}
add_action( 'top_himalaya_before_footer', 'top_himalaya_related_trip' );

function is_acf_active(){
    return class_exists( 'ACF' ) ? true : false;
}

function top_himalaya_footer_search(){ ?>
    <div id="searchpopup" class="popup w-screen h-screen fixed inset-0 flex bg-gray-900 bg-opacity-50 hidden z-50 overflow-hidden">
        <div class="w-full popup-content max-h-[110px]">
            <div class="bg-white">
                <div class="container">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}
add_action( 'top_himalaya_after_footer', 'top_himalaya_footer_search' );

function top_himalaya_inquiry_popup(){
    if( is_singular( 'trip' ) ){ 
        global $post;
        $popup_title     = get_field( 'popup_title', 'option' );
        $popup_text      = get_field( 'popup_text', 'option' );
        $popup_shortcode = get_field( 'popup_shortcode', 'option' );

        if( $popup_title || $popup_text || $popup_shortcode ){ ?>
            <div id="inquirypopup" class="popup w-screen h-screen fixed inset-0 flex bg-gray-900 bg-opacity-50 hidden z-50 overflow-hidden">
                <div class="w-11/12 md:w-full md:max-w-[660px] flex justify-center items-center popup-content mx-auto">
                    <div class="w-full bg-white p-10 max-h-screen overflow-auto">
                        <div class="flex justify-between items-center mb-3">
                            <?php 
                                if( $popup_title ){ ?>
                                    <h2 class="text-3xl md:text-4xl lg:text-[40px] lg:leading-[120%] font-bold text-primary"><?php echo esc_html( $popup_title ); ?></h2>
                                    <?php 
                                }
                            ?>
                            <button class="close-popup transition ease-linear duration-100 hover:text-primary hover:scale-110"><span class="text-xl font-light h-8 w-8">&#x2715;</span></button>
                        </div>
                        <?php 
                            if( $popup_text ) echo wpautop( wp_kses_post( str_replace( '[title]', $post->post_title, $popup_text ) ) );
                            
                            if( $popup_shortcode ){ ?>
                                <div class="mt-8 grid grid-cols-1 gap-4">
                                    <?php echo do_shortcode( wp_kses_post( $popup_shortcode ) ); ?>
                                </div>
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
            <?php
        }
    }
}
add_action( 'top_himalaya_after_footer', 'top_himalaya_inquiry_popup', 15 );

/**
 * Returns page template url if not found returns home page url
*/
function top_himalaya_get_page_template_url( $page_template, $home_url = true ){
    $url = false;
    $args = array(
        'meta_key'   => '_wp_page_template',
        'meta_value' => $page_template,
        'post_type'  => 'page',
        'fields'     => 'ids',
    );
    
    $posts_array = get_posts( $args );
    if( $home_url ){
        $url = ( $posts_array ) ? get_permalink( $posts_array[0] ) : get_home_url();
    }else{
        $url = ( $posts_array ) ? get_permalink( $posts_array[0] ) : false;
    }
    return $url;    
}

function top_himalaya_wp_handle_upload( $file, $image = false ){
    $return = false;
    if( isset( $file ) ){
        if ( ! function_exists( 'wp_handle_upload' ) ) {
            require_once( ABSPATH . 'wp-admin/includes/file.php' );
        }
        $uploadedfile = $file;
        $upload_overrides = array(
            'test_form' => false
        );

        if( $image ){
            $upload_overrides['mimes'] = array(
                'jpg|jpeg|jpe' => 'image/jpeg',
                'gif'          => 'image/gif',
                'png'          => 'image/png',
                'bmp'          => 'image/bmp',
                'tif|tiff'     => 'image/tiff',
                'ico'          => 'image/x-icon',
            );
        }

        $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
        if ( $movefile && ! isset( $movefile['error'] ) ) {
            $return = array(
                'status' => 'success',
                'file' => $movefile['file'],
                'url' => $movefile['url']
            );
        } else {
            $return = array(
                'status' => 'error',
                'error' => $movefile['error']
            );
        }
    }
    
    return $return;
}

function top_himalaya_file_upload(){

    if( isset( $_FILES['file'] ) ){
        $file = top_himalaya_wp_handle_upload( $_FILES['file'] );

        if( $file['status'] == 'success' ){
            wp_send_json( array(
                'status' => 'success',
                'url' => $file['url'],
                'data' => 'File uploaded successfully.'
            ));
        }else{
            wp_send_json( array(
                'status' => 'error',
                'error' => $file['error']
            ));
        }
    }

    wp_die();
}
add_action( 'wp_ajax_upload_file', 'top_himalaya_file_upload' );
add_action( 'wp_ajax_nopriv_upload_file', 'top_himalaya_file_upload' );
