<?php 
/**
 * Banner Section
*/
?>

<section class="banner_wrapper relative h-dvh w-full object-cover">
    <div class="mainslider sliderWrapper">
        <div class="frst slickbox relative overflow-hidden">
            <video src="./assets/images/bannervid.mp4" autoplay loop muted class="w-full h-dvh object-cover"></video>
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>
        </div>
        <div class="scnd slickbox relative overflow-hidden">
            <a href="#" aria-label="Slider Banner2">
                <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/hero-Image.jpg" alt="Banner 2" class="h-dvh object-cover w-full"/>
            </a>
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-10"></div>
            <div class="container absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                <div class="w-4/5 lg:w-auto sm:max-w-auto lg:max-w-[1020px] mx-auto flex flex-col justify-center space-y-3" data-aos="fade-down" data-aos-delay="50" data-aos-duration="1000">
                    <h1 class="text-center uppercase font-extrabold text-white text-5xl lg:text-[110px] lg:leading-none">Conquer the mountains!</h1>
                    <h4 class="text-white text-center text-2xl font-medium uppercase">Certified IFMGA / NNMGA guide</h4>
                </div>
            </div>
        </div>
        <div class="thrd slickbox relative overflow-hidden">
            <a href="#" aria-label="Slider Banner3"><img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/hero-Image.jpg" alt="Banner 3" class="h-dvh object-cover w-full"/></a>
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-10"></div>
            <div class="container absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                <div class="w-4/5 lg:w-auto sm:max-w-auto lg:max-w-[1020px] mx-auto flex flex-col justify-center space-y-3" data-aos="fade-down" data-aos-delay="50" data-aos-duration="1000">
                    <h1 class="text-center uppercase font-extrabold text-white text-5xl lg:text-[110px] lg:leading-none">Conquer the mountains!</h1>
                    <h4 class="text-white text-center text-2xl font-medium uppercase">Certified IFMGA / NNMGA guide</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute bottom-9 left-1/2 -translate-x-1/2">
        <a href="#mycategory" class="relative mycategory bounce flex justify-center items-center text-center flex-col space-y-2 sm:space-y-4 md:space-y-6">
            <img src="<?php echo trailingslashit( get_template_directory_uri() );?>assets/images/scroll-down.png" alt="Scroll Down Icon" class="h-8 sm:h-auto"/>
            <p class="text-white text-center">Scroll Down</p>
        </a>
    </div>
</section>