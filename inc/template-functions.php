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

function is_acf_active(){
    return class_exists( 'ACF' ) ? true : false;
}