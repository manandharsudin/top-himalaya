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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'top-himalaya' ); ?></a>

	<?php /*<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$top_himalaya_description = get_bloginfo( 'description', 'display' );
			if ( $top_himalaya_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $top_himalaya_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'top-himalaya' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->*/?>
    <header class="header header-down">
        <div class="header-nav">
            <div class="container">
                <div class="flex justify-between items-center">
                    <div class="header-item">
                        <div class="logo">
                            <a href="index.html" aria-label="Logo Link">
                                <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/tophimalaya-logowhite.png" alt="Top Himalaya Guides" class="h-12 sm:h-full logo-white"/>
                                <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/tophimalaya-logomain.png" alt="Top Himalaya Guides" class="h-12 sm:h-full logo-primary hidden"/>
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
                            <ul class="menu-main">
                                <li class="menu-item-has-children mega-menu-menu-items">
                                    <a href="#" class="flex items-center">
                                        <span class="mr-2">Trekking</span>
                                        <i class="icon-chevron-down text-2xl"></i>
                                    </a>
                                    <div class="sub-menu mega-menu w-full">
                                        <div class="tab-section grid grid-cols-1 lg:grid-cols-4 bg-neutral-900">
                                            <div class="tabs px-20 py-8 flex flex-col items-end justify-between">
                                                <div class="flex flex-col space-y-4">
                                                    <button class="tab-link text-lg text-white font-semibold hover:text-primary" data-tab="tab1">
                                                        8000M
                                                    </button>
                                                    <button data-tab="tab2" class="tab-link text-lg text-white font-semibold hover:text-primary">
                                                        7000M
                                                    </button>
                                                    <button data-tab="tab3" class="tab-link text-lg text-white font-semibold hover:text-primary">
                                                        6000M
                                                    </button>
                                                    <button data-tab="tab4" class="tab-link text-lg text-white font-semibold hover:text-primary">
                                                        5800M
                                                    </button>
                                                </div>
                                                <div>
                                                    <a href="#" class="text-lg text-white font-semibold hover:text-primary" >View All</a>
                                                </div>
                                            </div>
                                            <div class="tab_container lg:col-span-3 bg-neutral-1000">
                                                <h3 class="d_active tab_drawer_heading" data-tab="tab1">
                                                    8000M
                                                </h3>
                                                <div id="tab1" class="tab-content px-8 lg:px-20 py-8 flex flex-col justify-between">
                                                    <div class="grid grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-8">
                                                        <a href="detailpage.html">
                                                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/megamenu/MountEverest.jpg" alt="Mount Everest"
                                                            class="w-full h-auto lg:h-56 object-cover ease-linear duration-200 border-4 border-transparent hover:border-primary"/>
                                                            <h3 class="mt-1 lg:mt-3 text-sm lg:text-base text-basewhite font-semibold hover:text-primary">Mount Everest</h3>
                                                        </a>
                                                        <a href="detailpage.html">
                                                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/megamenu/ChoOyu.jpg" alt="Cho Oyu" class="w-full h-auto lg:h-56 object-cover ease-linear duration-200 border-4 border-transparent hover:border-primary" />
                                                            <h3 class="mt-1 lg:mt-3 text-sm lg:text-base text-basewhite font-semibold hover:text-primary">Cho Oyu</h3>
                                                        </a>
                                                        <a href="detailpage.html">
                                                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/megamenu/Makalu.jpg" alt="Makalu" class="w-full h-auto lg:h-56 object-cover ease-linear duration-200 border-4 border-transparent hover:border-primary" />
                                                            <h3 class="mt-1 lg:mt-3 text-sm lg:text-base text-basewhite font-semibold hover:text-primary">Makalu</h3>
                                                        </a>
                                                    </div>
                                                    <div class="text-right">
                                                        <a href="#" class="text-lg text-white font-semibold hover:text-primary">View All</a>
                                                    </div>
                                                </div>
                                                <!-- #tab1 -->

                                                <h3 class="tab_drawer_heading" data-tab="tab2">7000M</h3>
                                                <div id="tab2" class="tab-content px-8 lg:px-20 py-8 flex flex-col justify-between">
                                                    <div class="grid grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-8">
                                                        <a href="detailpage.html">
                                                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/megamenu/MountEverest.jpg" alt="Mount Everest" class="w-full h-auto lg:h-56 object-cover ease-linear duration-200 border-4 border-transparent hover:border-primary"/>
                                                            <h3 class="mt-1 lg:mt-3 text-sm lg:text-base text-basewhite font-semibold hover:text-primary">Mount Everest</h3>
                                                        </a>
                                                        <a href="detailpage.html">
                                                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/megamenu/ChoOyu.jpg" alt="Cho Oyu" class="w-full h-auto lg:h-56 object-cover ease-linear duration-200 border-4 border-transparent hover:border-primary" />
                                                            <h3 class="mt-1 lg:mt-3 text-sm lg:text-base text-basewhite font-semibold hover:text-primary">Cho Oyu</h3>
                                                        </a>
                                                        <a href="detailpage.html">
                                                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/megamenu/Makalu.jpg" alt="Makalu" class="w-full h-auto lg:h-56 object-cover ease-linear duration-200 border-4 border-transparent hover:border-primary"/>
                                                            <h3 class="mt-1 lg:mt-3 text-sm lg:text-base text-basewhite font-semibold hover:text-primary">Makalu</h3>
                                                        </a>
                                                    </div>
                                                    <div class="text-right">
                                                        <a href="#" class="text-lg text-white font-semibold hover:text-primary">View All</a>
                                                    </div>
                                                </div>
                                                <!-- #tab2 -->

                                                <h3 class="tab_drawer_heading" data-tab="tab3">6000M</h3>
                                                <div id="tab3" class="tab-content px-8 lg:px-20 py-8 flex flex-col justify-between">
                                                    <div class="grid grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-8">
                                                        <a href="detailpage.html">
                                                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/megamenu/MountEverest.jpg" alt="Mount Everest" class="w-full h-auto lg:h-56 object-cover ease-linear duration-200 border-4 border-transparent hover:border-primary" />
                                                            <h3 class="mt-1 lg:mt-3 text-sm lg:text-base text-basewhite font-semibold hover:text-primary">Mount Everest</h3>
                                                        </a>
                                                        <a href="detailpage.html">
                                                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/megamenu/ChoOyu.jpg" alt="Cho Oyu" class="w-full h-auto lg:h-56 object-cover ease-linear duration-200 border-4 border-transparent hover:border-primary" />
                                                            <h3 class="mt-1 lg:mt-3 text-sm lg:text-base text-basewhite font-semibold hover:text-primary">Cho Oyu</h3>
                                                        </a>
                                                        <a href="detailpage.html">
                                                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/megamenu/Makalu.jpg" alt="Makalu"
                                                            class="w-full h-auto lg:h-56 object-cover ease-linear duration-200 border-4 border-transparent hover:border-primary" />
                                                            <h3 class="mt-1 lg:mt-3 text-sm lg:text-base text-basewhite font-semibold hover:text-primary">Makalu</h3>
                                                        </a>
                                                    </div>
                                                    <div class="text-right">
                                                        <a href="#" class="text-lg text-white font-semibold hover:text-primary">View All</a>
                                                    </div>
                                                </div>
                                                <!-- #tab3 -->

                                                <h3 class="tab_drawer_heading" data-tab="tab4">5800M</h3>
                                                <div id="tab4" class="tab-content px-8 lg:px-20 py-8 flex flex-col justify-between">
                                                    <div class="grid grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-8">
                                                        <a href="detailpage.html">
                                                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/megamenu/MountEverest.jpg" alt="Mount Everest" class="w-full h-auto lg:h-56 object-cover ease-linear duration-200 border-4 border-transparent hover:border-primary" />
                                                            <h3 class="mt-1 lg:mt-3 text-sm lg:text-base text-basewhite font-semibold hover:text-primary">Mount Everest</h3>
                                                        </a>
                                                        <a href="detailpage.html">
                                                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/megamenu/ChoOyu.jpg" alt="Cho Oyu" class="w-full h-auto lg:h-56 object-cover ease-linear duration-200 border-4 border-transparent hover:border-primary" />
                                                            <h3 class="mt-1 lg:mt-3 text-sm lg:text-base text-basewhite font-semibold hover:text-primary">Cho Oyu</h3>
                                                        </a>
                                                        <a href="detailpage.html">
                                                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/megamenu/Makalu.jpg" alt="Makalu" class="w-full h-auto lg:h-56 object-cover ease-linear duration-200 border-4 border-transparent hover:border-primary" />
                                                            <h3 class="mt-1 lg:mt-3 text-sm lg:text-base text-basewhite font-semibold hover:text-primary">Makalu</h3>
                                                        </a>
                                                    </div>
                                                    <div class="text-right">
                                                        <a href="#" class="text-lg text-white font-semibold hover:text-primary">View All</a>
                                                    </div>
                                                </div>
                                                <!-- #tab4 -->
                                            </div>
                                            <!-- .tab_container -->
                                        </div>
                                        <a href="https://www.google.com/" class="text-center w-full inline-block py-4 px-5 text-white hover:bg-primary lg:hidden">View All</a>
                                    </div>
                                </li>
                                <li class="menu-item-has-children mega-menu-menu-items">
                                    <a href="#" class="flex items-center">
                                        <span class="mr-2">Mountaineering</span>
                                        <i class="icon-chevron-down text-2xl"></i>
                                    </a>
                                    <div class="sub-menu mega-menu w-full">
                                        <div class="tab-section grid grid-cols-1 lg:grid-cols-4 bg-neutral-900">
                                            <div class="tabs px-20 py-8 flex flex-col items-end justify-between">
                                                <div class="flex flex-col space-y-4">
                                                    <button class="tab-link text-lg text-white font-semibold hover:text-primary" data-tab="tab5">
                                                        8000M
                                                    </button>
                                                    <button data-tab="tab6" class="tab-link text-lg text-white font-semibold hover:text-primary">
                                                        7000M
                                                    </button>
                                                    <button data-tab="tab7" class="tab-link text-lg text-white font-semibold hover:text-primary">
                                                        6000M
                                                    </button>
                                                    <button data-tab="tab8" class="tab-link text-lg text-white font-semibold hover:text-primary">
                                                        5800M
                                                    </button>
                                                </div>
                                                <div>
                                                    <a href="#" class="text-lg text-white font-semibold hover:text-primary">View All</a>
                                                </div>
                                            </div>
                                            <div class="tab_container col-span-3 bg-neutral-1000">
                                                <h3 class="d_active tab_drawer_heading" data-tab="tab5">8000M</h3>
                                                <div id="tab5" class="tab-content px-8 lg:px-20 py-8 flex flex-col justify-between">
                                                    <div class="grid grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-8">
                                                        <a href="detailpage.html">
                                                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/megamenu/MountEverest.jpg" alt="Mount Everest" class="w-full h-auto lg:h-56 object-cover ease-linear duration-200 border-4 border-transparent hover:border-primary" />
                                                            <h3 class="mt-1 lg:mt-3 text-sm lg:text-base text-basewhite font-semibold hover:text-primary">Mount Everest</h3>
                                                        </a>
                                                        <a href="detailpage.html">
                                                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/megamenu/ChoOyu.jpg" alt="Cho Oyu" class="w-full h-auto lg:h-56 object-cover ease-linear duration-200 border-4 border-transparent hover:border-primary" />
                                                            <h3 class="mt-1 lg:mt-3 text-sm lg:text-base text-basewhite font-semibold hover:text-primary">Cho Oyu</h3>
                                                        </a>
                                                        <a href="detailpage.html">
                                                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/megamenu/Makalu.jpg" alt="Makalu" class="w-full h-auto lg:h-56 object-cover ease-linear duration-200 border-4 border-transparent hover:border-primary" />
                                                            <h3 class="mt-1 lg:mt-3 text-sm lg:text-base text-basewhite font-semibold hover:text-primary">Makalu</h3>
                                                        </a>
                                                    </div>
                                                    <div class="text-right">
                                                        <a href="#" class="text-lg text-white font-semibold hover:text-primary">View All</a>
                                                    </div>
                                                </div>
                                                <!-- #tab1 -->

                                                <h3 class="tab_drawer_heading" data-tab="tab6">7000M</h3>
                                                <div id="tab6" class="tab-content px-8 lg:px-20 py-8 flex flex-col justify-between">
                                                    <div class="grid grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-8">
                                                        <a href="#">
                                                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/megamenu/MountEverest.jpg" alt="Mount Everest" class="w-full h-auto lg:h-56 object-cover ease-linear duration-200 border-4 border-transparent hover:border-primary" />
                                                            <h3 class="mt-1 lg:mt-3 text-sm lg:text-base text-basewhite font-semibold hover:text-primary">Mount Everest</h3>
                                                        </a>
                                                        <a href="#">
                                                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/megamenu/ChoOyu.jpg" alt="Cho Oyu" class="w-full h-auto lg:h-56 object-cover ease-linear duration-200 border-4 border-transparent hover:border-primary" />
                                                            <h3 class="mt-1 lg:mt-3 text-sm lg:text-base text-basewhite font-semibold hover:text-primary">Cho Oyu</h3>
                                                        </a>
                                                        <a href="#">
                                                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/megamenu/Makalu.jpg" alt="Makalu" class="w-full h-auto lg:h-56 object-cover ease-linear duration-200 border-4 border-transparent hover:border-primary" />
                                                            <h3 class="mt-1 lg:mt-3 text-sm lg:text-base text-basewhite font-semibold hover:text-primary">Makalu</h3>
                                                        </a>
                                                    </div>
                                                    <div class="text-right">
                                                        <a href="#" class="text-lg text-white font-semibold hover:text-primary">View All</a>
                                                    </div>
                                                </div>
                                                <!-- #tab2 -->

                                                <h3 class="tab_drawer_heading" data-tab="tab7">6000M</h3>
                                                <div id="tab7" class="tab-content px-8 lg:px-20 py-8 flex flex-col justify-between">
                                                    <div class="grid grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-8">
                                                        <a href="#">
                                                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/megamenu/MountEverest.jpg" alt="Mount Everest" class="w-full h-auto lg:h-56 object-cover ease-linear duration-200 border-4 border-transparent hover:border-primary" />
                                                            <h3 class="mt-1 lg:mt-3 text-sm lg:text-base text-basewhite font-semibold hover:text-primary">Mount Everest</h3>
                                                        </a>
                                                        <a href="#">
                                                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/megamenu/ChoOyu.jpg" alt="Cho Oyu"
                                                            class="w-full h-auto lg:h-56 object-cover ease-linear duration-200 border-4 border-transparent hover:border-primary" />
                                                            <h3 class="mt-1 lg:mt-3 text-sm lg:text-base text-basewhite font-semibold hover:text-primary">Cho Oyu</h3>
                                                        </a>
                                                        <a href="#">
                                                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/megamenu/Makalu.jpg" alt="Makalu" class="w-full h-auto lg:h-56 object-cover ease-linear duration-200 border-4 border-transparent hover:border-primary" />
                                                            <h3 class="mt-1 lg:mt-3 text-sm lg:text-base text-basewhite font-semibold hover:text-primary">Makalu</h3>
                                                        </a>
                                                    </div>
                                                    <div class="text-right">
                                                    <a href="#" class="text-lg text-white font-semibold hover:text-primary">View All</a>
                                                    </div>
                                                </div>
                                                <!-- #tab3 -->

                                                <h3 class="tab_drawer_heading" data-tab="tab8">5800M</h3>
                                                <div id="tab8" class="tab-content px-8 lg:px-20 py-8 flex flex-col justify-between">
                                                    <div class="grid grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-8">
                                                        <a href="#">
                                                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/megamenu/MountEverest.jpg" alt="Mount Everest" class="w-full h-auto lg:h-56 object-cover ease-linear duration-200 border-4 border-transparent hover:border-primary" />
                                                            <h3 class="mt-1 lg:mt-3 text-sm lg:text-base text-basewhite font-semibold hover:text-primary">Mount Everest</h3>
                                                        </a>
                                                        <a href="#">
                                                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/megamenu/ChoOyu.jpg" alt="Cho Oyu" class="w-full h-auto lg:h-56 object-cover ease-linear duration-200 border-4 border-transparent hover:border-primary" />
                                                            <h3 class="mt-1 lg:mt-3 text-sm lg:text-base text-basewhite font-semibold hover:text-primary">Cho Oyu</h3>
                                                        </a>
                                                        <a href="#">
                                                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/megamenu/Makalu.jpg" alt="Makalu" class="w-full h-auto lg:h-56 object-cover ease-linear duration-200 border-4 border-transparent hover:border-primary" />
                                                            <h3 class="mt-1 lg:mt-3 text-sm lg:text-base text-basewhite font-semibold hover:text-primary">Makalu</h3>
                                                        </a>
                                                    </div>
                                                    <div class="text-right">
                                                        <a href="#" class="text-lg text-white font-semibold hover:text-primary">View All</a>
                                                    </div>
                                                </div>
                                                <!-- #tab4 -->
                                            </div>
                                            <!-- .tab_container -->
                                        </div>
                                        <a href="https://www.google.com/" class="text-center w-full inline-block py-4 px-5 text-white  hover:bg-primary lg:hidden">View All</a>
                                    </div>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#" class="flex items-center">
                                        <span class="mr-2">Training</span>
                                        <i class="icon-chevron-down text-2xl"></i>
                                    </a>
                                    <div class="sub-menu single-column-menu">
                                        <ul>
                                            <li><a href="#">Training 1</a></li>
                                            <li><a href="#">Training 2</a></li>
                                            <li><a href="#">Training 3</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#" class="flex items-center">
                                        <span class="mr-2">More</span>
                                        <i class="icon-chevron-down text-2xl"></i>
                                    </a>
                                    <div class="sub-menu single-column-menu">
                                        <ul>
                                            <li><a href="aboutus.html">About us</a></li>
                                            <li><a href="tshering.html">About Tshering</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="contactus.html">Contact us</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <button class="openmodelbtn bg-white w-12 h-12 rounded-full flex justify-center items-center transition ease-linear duration-150 hover:bg-primary hover:text-white" aria-labelledby="Search" data-target="#searchpopup">
                                        <i class="icon-search text-2xl"></i>
                                    </button>
                                </li>
                            </ul>
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
    