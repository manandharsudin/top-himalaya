<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Top_Himalaya
*/
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="header header-down">
        <div class="header-nav">
            <div class="container">
                <div class="flex justify-between items-center">
                    <?php 
                        $logo_white = get_field( 'logo_white', 'option' );
                        $logo_main = get_field( 'logo_main', 'option' ); 
                    ?>
                    <div class="header-item">
                        <div class="logo">
                            <a href="index.html" aria-label="Logo Link">
                                <?php 
                                    if( $logo_white ){
                                        echo wp_get_attachment_image( $logo_white['ID'], 'full', false, array( 'class' => 'h-12 sm:h-full logo-white' ) );
                                    }
                                    if( $logo_main ){
                                        echo wp_get_attachment_image( $logo_main['ID'], 'full', false, array( 'class' => 'h-12 sm:h-full logo-primary hidden' ) );
                                    }
                                ?>
                            </a>
                        </div>
                    </div>

                    <!-- menu start here -->
                    <div class="header-item">
                        <div class="menu-overlay"></div>
                        <nav class="menu">
                            <div class="mobile-menu-head">
                                <div class="go-back flex items-center justify-center">
                                    <i class="icon-chevron-left text-2xl"></i></a>
                                </div>
                                <div class="current-menu-title"></div>
                                <div class="mobile-menu-close">&times;</div>
                            </div>
                            <?php top_himalaya_header_menu(); ?>
                        </nav>
                        <div class="flex space-x-8 items-center">
                            <button class="btnsearch openmodelbtn block lg:hidden text-white hover:text-primary" aria-labelledby="Search" data-target="#searchpopup" >
                                <i class="icon-search text-xl font-medium"></i>
                            </button>
                            <!-- mobile menu trigger -->
                            <div class="mobile-menu-trigger">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <!-- menu end here -->
                </div>
            </div>
        </div>
    </header>
    
    <?php 
    if( ! is_front_page() ){ ?>
        <section class="breadcrumbWrapper relative">
            <?php the_post_thumbnail( 'full', array( 'class' => 'w-full h-[600px] object-cover' ) ); ?>
            <div class="absolute inset-0 w-full h-full bg-black/20"></div>
            <div class="absolute top-1/2 -translate-y-1/2 w-full mx-auto">
                <div class="container">
                    <h1 class="rubik text-4xl md:text-5xl lg:text-[64px] font-bold max-w-4xl text-white">
                        <?php the_title(); ?>
                    </h1>
                </div>
            </div>
        </section>
        <?php 
    }
    