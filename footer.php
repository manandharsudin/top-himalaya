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
?>	

    <section class="pt-12 md:pt-18 lg:pt-36 pb-11">
        <div class="container">
            <div class="flex justify-center flex-col items-center" data-aos="fade-down" data-aos-delay="50" data-aos-duration="1000">
                <div class="sectiontitle  text-center mb-6">
                    <h2 class="text-netrual-100 text-2xl sm:text-3xl lg:text-4xl xl:text-[40px] lg:leading-[120%] font-bold">Get Updates from the Himalayas</h2>
                </div>
                <div class="flex w-full min:w-full md:min-w-[552px] md:w-auto">
                    <input type="email" id="email" class="flex-1 outline-none border rounded-none border-r-0 border-neutral-500 text-neutral-800 block w-full py-4 px-6" placeholder="Your Email" required/>
                    <button type="submit" class="text-white bg-primary hover:bg-secondary font-bold text-sm py-4 px-6 text-center text-sm uppercase leading[120%]" aria-labelledby="Submit">Subscribe</button>
                </div>
            </div>
        </div>
    </section>

    <footer id="colophon" class="site-footer">
        <div><img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/footer-mountain.png" alt="footer bg"/></div>
        <div class="py-5 bg-footer -mt-1">
            <div class="container">
                <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 lg:gap-4 xl:gap-24 pb-14 items-center">
                    <div class="lg:col-span-2">
                        <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/tophimalaya-logowhite.png" alt="Top Himalaya guide Logo" class="footeranimation-faderight" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="50" data-aos-duration="1000"/>
                        <div class="footeranimation-faderight mt-4 text-white" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-duration="1000">
                            <p>Lorem ipsum dolor sit amet consectetur. Libero fermentum malesuada nulla in tincidunt. Tristique aliquam libero tincidunt semper ultricies et dictumst volutpat.</p>
                            <a href="#" class="block mt-4 underline">Read More</a>
                        </div>
                        <div class="mt-4 flex items-center gap-4">
                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/partners/1.png" alt="Partner Name" class="h-9 footeranimation-faderight" data-aos="fade-right" data-aos-delay="50" data-aos-easing="ease-in-out" data-aos-duration="1000"/>
                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/partners/2.png" alt="Partner Name" class="h-9 footeranimation-faderight" data-aos="fade-righ"  data-aos-delay="150" data-aos-easing="ease-in-out" data-aos-duration="1000"/>
                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/partners/3.png" alt="Partner Name" class="h-9 footeranimation-faderight" data-aos="fade-righ"  data-aos-delay="250" data-aos-easing="ease-in-out" data-aos-duration="1000"/>
                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/partners/4.png" alt="Partner Name" class="h-9 footeranimation-faderight" data-aos="fade-righ"  data-aos-delay="350" data-aos-easing="ease-in-out" data-aos-duration="1000"/>
                            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/partners/5.png" alt="Partner Name" class="h-9 footeranimation-faderight" data-aos="fade-righ"  data-aos-delay="450" data-aos-easing="ease-in-out" data-aos-duration="1000"/>
                        </div>
                    </div>
                    <div class="lg:col-span-3 flex flex-wrap justify-between gap-8 sm:gap-4 xl:gap-16">
                        <div class="basis-full sm:basis-1/4 xl:basis-auto">
                            <h3 class="footeranimation-faderight font-semibold text-white uppercase"  data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="50" data-aos-duration="1000">Mountaineering</h3>
                            <ul class="mt-4 flex flex-col space-y-4">
                                <li>
                                    <a href="#" aria-label="Mountaineering footer list" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="50" data-aos-duration="1000" class="footeranimation-faderight inline-block text-sm font-medium text-white hover:text-primary">Mt. Everest Expedition</a>
                                </li>
                                <li>
                                    <a href="#" aria-label="Mountaineering footer list" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="150" data-aos-duration="1000" class="footeranimation-faderight inline-block text-sm font-medium text-white hover:text-primary">Himlung Himal Expedition</a>
                                </li>
                                <li>
                                    <a href="#" aria-label="Mountaineering footer list" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="250" data-aos-duration="1000" class="footeranimation-faderight inline-block text-sm font-medium text-white hover:text-primary">Ama Dablam Expedition</a>
                                </li>
                                <li>
                                    <a href="#" aria-label="Mountaineering footer list" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="350" data-aos-duration="1000" class="footeranimation-faderight inline-block text-sm font-medium text-white hover:text-primary">Manaslu Expedition</a>
                                </li>
                                <li>
                                    <a href="#" aria-label="Mountaineering footer list" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="450" data-aos-duration="1000" class="footeranimation-faderight inline-block text-sm font-medium text-white hover:text-primary">Makalu Expedition</a>
                                </li>
                                <li>
                                    <a href="#" aria-label="Mountaineering footer list" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="550" data-aos-duration="1000" class="footeranimation-faderight inline-block text-sm font-medium text-white hover:text-primary">Pumori Expedition</a>
                                </li>
                            </ul>
                        </div>
                        <div class="basis-full sm:basis-1/4 xl:basis-auto">
                            <h3 class="footeranimation-faderight font-semibold text-white uppercase" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="50" data-aos-duration="1000">Trekking</h3>
                            <ul class="mt-4 flex flex-col space-y-4">
                                <li>
                                    <a href="#" aria-label="Mountaineering footer list" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="50" data-aos-duration="1000" class="footeranimation-faderight inline-block text-sm font-medium text-white hover:text-primary">Annapurna trekking</a>
                                </li>
                                <li>
                                    <a href="#" aria-label="Mountaineering footer list" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="150" data-aos-duration="1000" class="footeranimation-faderight inline-block text-sm font-medium text-white hover:text-primary">Langtang trekking</a>
                                </li>
                                <li>
                                    <a href="#" aria-label="Mountaineering footer list" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="250" data-aos-duration="1000" class="footeranimation-faderight inline-block text-sm font-medium text-white hover:text-primary">Khopra trekking</a>
                                </li>
                                <li>
                                    <a href="#" aria-label="Mountaineering footer list" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="350" data-aos-duration="1000" class="footeranimation-faderight inline-block text-sm font-medium text-white hover:text-primary">EBC trekking</a>
                                </li>
                                <li>
                                    <a href="#" aria-label="Mountaineering footer list" data-aos="fade-right" data-aos-easing="ease-in-out"  data-aos-delay="450" data-aos-duration="1000" class="footeranimation-faderight inline-block text-sm font-medium text-white hover:text-primary">Gokyo trekking</a>
                                </li>
                            </ul>
                        </div>
                        <div class="basis-full sm:basis-auto">
                            <h3 class="footeranimation-faderight font-semibold text-white uppercase" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="50" data-aos-duration="1000">Connect with us</h3>
                            <div class="footeranimation-faderight inline-block mt-4 flex items-center gap-4 xl:gap-6" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="50" data-aos-duration="1000">
                                <a href="https://twitter.com/" target="_blank">
                                    <div class="transition-all ease-linear hover:text-primary text-white">
                                        <span class="text-xl xl:text-2xl icon-x1"></span>
                                    </div>
                                </a>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <div class="transition-all ease-linear hover:text-primary text-white">
                                        <span class="text-xl xl:text-2xl icon-instagram"></span>
                                    </div>
                                </a>
                                <a href="https://www.tiktok.com/" target="_blank">
                                    <div class="transition-all ease-linear hover:text-primary text-white">
                                        <span class="text-xl xl:text-2xl icon-tiktok"></span>
                                    </div>
                                </a>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <div class="transition-all ease-linear hover:text-primary text-white">
                                        <span class="text-xl xl:text-2xl  icon-facebook"></span>
                                    </div>
                                </a>
                                            
                                <a href="https://www.linkedin.com/" target="_blank">
                                    <div class="transition-all ease-linear hover:text-primary text-white">
                                        <span class="text-xl xl:text-2xl icon-linkedin"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="mt-8 flex flex-col space-y-4">
                                <div class="footeranimation-faderight flex items-center" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-easing="ease-in-out" data-aos-delay="150" data-aos-duration="1000">
                                    <a href="mailto:info@himalayaguides.com" class="flex items-center space-x-3 text-white">
                                        <span class="icon-mail text-xl xl:text-2xl"></span>
                                        <span class="text-sm xl:text-base">info@himalayaguides.com</span>
                                    </a>
                                </div>
                                <div class="footeranimation-faderight flex items-center" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-easing="ease-in-out" data-aos-delay="250" data-aos-duration="1000">
                                    <a href="tel:+977-9841237190" class="flex items-center space-x-3 text-white">
                                        <span class="icon-mail text-xl xl:text-2xl"></span>
                                        <span class="text-sm xl:text-base">+977-9841237190</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border-t border-white copyright pt-3">
                    <div class="flex flex-wrap gap-1 justify-between text-white text-sm lg:text-base">
                        <p>All rights reserved ©️ Top Himalaya Guide 2024</p>
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
                    <div class="form-groups flex items-center justify-center gap-4 max-w-4xl mx-auto py-8">
                        <input type="text" class="search w-full py-4 px-6 bg-transparent rounded-none border border-neutral-500 outline-none focus:border-primary text-neutral-800" placeholder="Search" />
                        <button class="close-popup transition ease-linear duration-100 hover:text-primary hover:scale-110">
                            <span class="text-xl font-light h-8 w-8">&#x2715;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
