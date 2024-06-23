<?php 
/**
 * Blog Section
*/
?>

<section class="pt-0 pb-12 md:py-30 lg:py-60">
    <div class="container">
        <div class="sectiontitle flex justify-between items-center" data-aos="fade-down" data-aos-delay="50" data-aos-duration="1000">
            <h2 class="text-netrual-100 text-2xl sm:text-3xl lg:text-4xl xl:text-[40px] lg:leading-[120%] font-bold">Our Blogs</h2>
            <button class="btn btn-primary border border-primary text-primary py-3 px-12 hover:bg-primary hover:text-white font-bold uppercase text-sm leading[120%]">View All</button>
        </div>
        <div class="blogwrapper mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-0">
            <a href="#" class="bloglist block relative transition-all duration-150 ease-linear footeranimation-faderight" data-aos="fade-right" data-aos-delay="50" data-aos-easing="ease-in-out" data-aos-duration="1000">
                <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/blogs/blogpic1.jpg" alt="Blog Pictures" class="grayscale w-full h-80 md:lg-96 lg:h-120 xl:h-[596px] object-cover"/>
                <div class="p-6 absolute left-0 right-0 bottom-0">
                    <h3 class="text-2xl font-semibold leading[120%] text-white">Everest Base Camp Trek, Lobuche Peak and Island Peak Climb</h3>
                </div>
            </a>
            <a href="#" class="bloglist block relative transition-all duration-150 ease-linear footeranimation-faderight" data-aos="fade-right" data-aos-delay="250" data-aos-easing="ease-in-out" data-aos-duration="1000">
                <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/blogs/blogpic2.jpg" alt="Blog Pictures" class="grayscale w-full h-80 md:lg-96 lg:h-120 xl:h-[596px] object-cover"/>
                <div class="p-6 absolute left-0 right-0 bottom-0">
                    <h3 class="text-2xl font-semibold leading[120%] text-white">THG 3 passes with Everest Base Camp Trek</h3>
                </div>
            </a>
            <a href="#" class="bloglist block relative transition-all duration-150 ease-linear footeranimation-faderight" data-aos="fade-right" data-aos-delay="450" data-aos-easing="ease-in-out" data-aos-duration="1000">
                <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/blogs/blogpic3.jpg" alt="Blog Pictures" class="grayscale w-full h-80 md:lg-96 lg:h-120 xl:h-[596px] object-cover"/>
                <div class="p-6 absolute left-0 right-0 bottom-0">
                    <h3 class="text-2xl font-semibold leading[120%] text-white">THG Langtang Valley Trekking with Yala Peak Climb</h3>
                </div>
            </a>
            <a href="#" class="bloglist block relative transition-all duration-150 ease-linear footeranimation-faderight" data-aos="fade-right" data-aos-delay="900" data-aos-easing="ease-in-out" data-aos-duration="1000">
                <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/blogs/blogpic4.jpg" alt="Blog Pictures" class="grayscale w-full h-80 md:lg-96 lg:h-120 xl:h-[596px] object-cover"/>
                <div class="p-6 absolute left-0 right-0 bottom-0">
                    <h3 class="text-2xl font-semibold leading[120%] text-white">Norwegian Mountain Girls Khopra Trek with Ghorepani</h3>
                </div>
            </a>
        </div>
    </div>
</section>